<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Speaking_english extends Admin_Controller
{

    function __construct()
    {
        parent::__construct();
        if(!$this->ion_auth->in_group('admin'))
        {
            $this->postal->add('You are not allowed to visit the Categories page','error');
            redirect('admin');
        }
        $this->load->model('page_content_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        date_default_timezone_set("Asia/Ho_Chi_Minh");
    }

    public function index($id)
    {
        $input['where']= array('id' => $id);
        $this->data['item'] = $this->page_content_model->get_row($input);

        if($this->input->post('submit')){
            $id = $this->input->post('id');
            $title = $this->input->post('title');
            $description = $this->input->post('description');
            $content = $this->input->post('content');
            $content2 = $this->input->post('content2');
            $content3 = $this->input->post('content3');
            $update_data = array('title' => $title, 'description' => $description, 'content' => $content, 'content2' => $content2, 'content3' => $content3,);
            if(!$this->page_content_model->update($id, $update_data))
            {             
                $this->postal->add('Chỉnh sửa thất bại !','error');
            }else $this->postal->add('Chỉnh sửa thành công.','success');
            redirect('admin/Speaking_english/index/'.$id);
        }
        $this->render('admin/english_speaking/index_view'); 
    }
}