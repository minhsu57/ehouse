<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page_content extends Admin_Controller
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
        $this->load->helper(array('form'));
        $this->load->library('form_validation', 'english');
        $this->form_validation->set_error_delimiters('<span class="form_error">','</span>');
        date_default_timezone_set("Asia/Ho_Chi_Minh");
    }
    public function index()
    {
        $this->data['items'] = $this->page_content_model->get_list();
        $this->render('admin/page_content/index_view');
    }

    public function edit($id)
    {
        $input['where']= array('id' => $id);
        $this->data['item'] = $this->page_content_model->get_row($input);

        if($this->input->post('submit')){
            $this->form_validation->set_rules('title', 'Title', 'trim|required');
            if ($this->form_validation->run() == FALSE)
            {
                $this->render('admin/page_content/edit_view');
            }else{
                $id = $this->input->post('id');
                $title = $this->input->post('title');
                $link = $this->input->post('link');
                $note = $this->input->post('note');
                $description = $this->input->post('description');
                $content = $this->input->post('content');
                $content2 = $this->input->post('content2');
                $content3 = $this->input->post('content3');
                $image = $this->input->post('image');

                $update_data = array('title' => $title, 'description' => $description, 'content' => $content, 'content2' => $content2, 'modified_date' => date('Y-m-d H:i:s'), 'image' => $image, 'link' => $link, 'note' => $note);
                if(!$this->page_content_model->update($id, $update_data))
                {             
                    $this->postal->add('Chỉnh sửa thất bại !','error');
                }else $this->postal->add('Chỉnh sửa thành công.','success');
                redirect('admin/page_content/edit/'.$id);
            }            
        }
        $this->render('admin/page_content/edit_view'); 
    }
}