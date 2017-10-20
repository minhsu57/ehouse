<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Images_library extends Admin_Controller
{

    function __construct()
    {
        parent::__construct();
        if(!$this->ion_auth->in_group('admin'))
        {
            $this->postal->add('You are not allowed to visit the Categories page','error');
            redirect('admin');
        }
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $this->lang->load('form_validation', 'english');
        $this->load->model('images_model');       
        $input['order'] = array('modified_date','DESC');
    }

    public function index()
    {
        $this->data['items'] = $this->images_model->get_list();
        $this->render('admin/images_library/index_view');
    }

    public function create()
    {
        if($this->input->post('submit')){
            $this->form_validation->set_message('required', $this->lang->line('required'));
            $this->form_validation->set_rules('name', '', 'required');
            $this->form_validation->set_rules('image_link', '', 'required');
            if ($this->form_validation->run() == FALSE)
            {
                 $this->render('admin/images_library/create_view');
            }else{                
                $name = $this->input->post('name');
                $sort = $this->input->post('sort');
                $image_link = $this->input->post('image_link');
                $insert_data = array('name' => $name, 'sort' => $sort, 'image' => $image_link, 'modified_date'=>date('Y-m-d H:i:s'));                
                if(!$this->images_model->create($insert_data))
                {             
                    $this->postal->add('Created fail !','error');
                }else $this->postal->add('Created successfully.','success');
                redirect('admin/images_library');
            }            
        }else{
            $this->render('admin/images_library/create_view');
        }
    }

    public function delete($id){
        if(!$this->images_model->delete($id))
        {
            $this->postal->add('Images library was not existed','error');
            redirect('admin/images_library');
        }else{
            $this->postal->add('Deleted successfully','success');            
        }
        redirect('admin/images_library');
    }
}