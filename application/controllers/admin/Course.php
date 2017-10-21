<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends Admin_Controller
{

    function __construct()
    {
        parent::__construct();
        if(!$this->ion_auth->in_group('admin'))
        {
            $this->postal->add('You are not allowed to visit the Course page','error');
            redirect('admin');
        }
        $this->load->model('course_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $this->lang->load('form_validation', 'english');
        $this->load->library('pagination'); 
    }

    public function index()
    {
        // condition for get course data
        $active = $this->input->get('active');
        $input['order'] = array('start_date','desc');
        $input['like'] = array('active', $active);
        //pagination settings
        $config["per_page"] = 15;
        $config['base_url'] = site_url('admin/course?active='.$this->input->get('active'));
        $config['total_rows'] = $this->course_model->get_total($input);
        $this->data['total'] = $config['total_rows'];
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = $choice;       
        
        // pagination
        $page = ($this->input->get('page')) ? $this->input->get('page') : 1;
        $this->pagination->initialize($config);        
        $this->data['pagination'] = $this->pagination->create_links();
        $offset = ($page  == 1) ? 0 : ($page * $config['per_page']) - $config['per_page'];
        // record number for each page
        $this->data['record_number'] = ($config["per_page"] * ($page - 1) ) + 1;
        // get list data
        $input_course['limit']  = array($config["per_page"], $offset);
        $input_course['like']   = array('active', $active);         
        $this->data['items'] = $this->course_model->get_list($input_course);

        $this->render('admin/course/index_view');
    }

    public function create()
    {
        if($this->input->post('submit')){
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('teacher', 'Teacher', 'trim');
            $this->form_validation->set_rules('total_day', 'Total day', 'trim|required|greater_than[0]');
            $this->form_validation->set_rules('start_date', 'Start Date', 'trim|required');
            if(preg_replace('/\s+/', '', $this->input->post('end_date')) != ""){
                $this->form_validation->set_rules('end_date', 'Start Date', 'trim|callback_check_equal_less['.$this->input->post('start_date').']');
            }            
            $this->form_validation->set_rules('description', 'Description', 'trim');
            if ($this->form_validation->run() == FALSE)
            {
               $this->render('admin/course/create_view');
           }else{
            $name = $this->input->post('name');
            $teacher = $this->input->post('teacher');
            $total_day = $this->input->post('total_day');
            $start_date = $this->input->post('start_date');
            $end_date = $this->input->post('end_date');
            $description = $this->input->post('description');
            $insert_data = array('name' => $name,'teacher' => $teacher, 'total_day' => $total_day, 'start_date' => $start_date, 'end_date' => $end_date, 'description' => $description, 'modified_date'=>date('Y-m-d H:i:s'));
            if(!$this->course_model->create($insert_data))
            {             
                $this->postal->add('Created new fail','error');
            }else { $this->postal->add('Created successfully.','success'); }
            redirect('admin/course'); 
        }

    }else $this->render('admin/course/create_view');
}

public function edit($item_id)
{
    $input['where'] = array('id' => $item_id);
    $this->data['item'] = $this->course_model->get_row($input);        
    if($this->input->post('submit')){
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('teacher', 'Teacher', 'trim');
        $this->form_validation->set_rules('total_day', 'Total day', 'trim|required|greater_than[0]');
        $this->form_validation->set_rules('start_date', 'Start Date', 'trim|required');
        if(preg_replace('/\s+/', '', $this->input->post('end_date')) != ""){
            $this->form_validation->set_rules('end_date', 'Start Date', 'trim|callback_check_equal_less['.$this->input->post('start_date').']');
        }  
        $this->form_validation->set_rules('description', 'Description', 'trim');
        if ($this->form_validation->run() == FALSE)
        {
           $this->render('admin/course/edit_view');
       }else{
        $name = $this->input->post('name');
        $teacher = $this->input->post('teacher');
        $total_day = $this->input->post('total_day');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        $description = $this->input->post('description');
        $insert_data = array('name' => $name,'teacher' => $teacher, 'total_day' => $total_day, 'start_date' => $start_date, 'end_date' => $end_date, 'description' => $description, 'modified_date'=>date('Y-m-d H:i:s'));
        if(!$this->course_model->update($item_id, $insert_data))
        {             
            $this->postal->add('Edited fail !','error');
        }else { $this->postal->add('Edited successfully ','success'); }
        redirect('admin/course');
    }
}else { $this->render('admin/course/edit_view'); }
}

public function delete($item_id){
    $where = array('item_id' => $item_id);

    if(!$this->course_model->delete($item_id))
    {
        $this->postal->add("Course doesn't exist",'error');
        redirect('admin/course');
    }else{
        $this->postal->add('Deleted successfully','success');            
    }
    redirect('admin/course');
}

function check_equal_less($second_field,$first_field)
{
    if ($second_field <= $first_field)
    {
        $this->form_validation->set_message('check_equal_less', 'The End date must be greater than the Start date.');
        return false;       
    }else
    {
        return true;
    }
}

public function lock($item_id, $status){
    $status = $status == 1 ? 0 : 1;
    $data = array('active' => $status);
    if(!$this->course_model->update($item_id, $data))
    {             
        $this->postal->add('Edited fail !','error');
    }else{ $this->postal->add('Edited successfully ','success'); }
    redirect('admin/course');
}
}