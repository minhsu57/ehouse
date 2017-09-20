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
    }

    public function index()
    {
        $active = $this->input->get('active');
        $input['order'] = array('start_date','DESC');
        $input['like'] = array('active', $active);
        $this->data['items'] = $this->course_model->get_list($input);
        $this->render('admin/course/index_view');
    }

    public function create()
    {
        if($this->input->post('submit')){
            $this->form_validation->set_message('required', $this->lang->line('required'));
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('teacher', 'Teacher', 'trim');
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
            $start_date = $this->input->post('start_date');
            $end_date = $this->input->post('end_date');
            $description = $this->input->post('description');
            $insert_data = array('name' => $name,'teacher' => $teacher, 'start_date' => $start_date, 'end_date' => $end_date, 'description' => $description, 'modified_date'=>date('Y-m-d H:i:s'));
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
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        $description = $this->input->post('description');
        $insert_data = array('name' => $name,'teacher' => $teacher, 'start_date' => $start_date, 'end_date' => $end_date, 'description' => $description, 'modified_date'=>date('Y-m-d H:i:s'));
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