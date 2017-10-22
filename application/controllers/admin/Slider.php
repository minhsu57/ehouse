<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends Admin_Controller
{

    function __construct()
    {
        parent::__construct();
        if(!$this->ion_auth->in_group('admin'))
        {
            $this->postal->add('You are not allowed to visit the Categories page','error');
            redirect('admin');
        }
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $this->load->helper(array('form'));
        $this->lang->load('form_validation', 'english');
        $this->form_validation->set_error_delimiters('<span class="form_error">','</span>');

        $this->load->model('slider_model');
        $this->load->model('category_model');        
        $input['order'] = array('id','DESC');
        $this->data['categories'] = $this->category_model->get_list($input);
    }

    public function index()
    {
        $this->data['items'] = $this->slider_model->get_list_slider_category();
        $this->render('admin/slider/index_view');
    }

    public function create()
    {
        if($this->input->post('submit')){
            $this->form_validation->set_rules('description', 'Slogan 01', 'trim|required');
            $this->form_validation->set_rules('image', 'Image', 'trim|required');
            if ($this->form_validation->run() == FALSE)
            {
                $this->render('admin/slider/create_view');
            }else{
                $category = $this->input->post('category');
                $link = $this->input->post('link');
                $description = $this->input->post('description');
                $description2 = $this->input->post('description2');
                $status = $this->input->post('status');
                $image = $this->input->post('image');
                $insert_data = array('category_id' => $category,'link' => $link,'description' => $description, 'description2' => $description2, 'status'=>'status', 'image'=> $image, 'status' => $status, 'modified_date' => date('Y-m-d H:i:s'));
                if(!$this->slider_model->create($insert_data))
                {             
                    $this->postal->add('Thêm slider thất bại !','error');
                }else $this->postal->add('Thêm slider thành công.','success');
                redirect('admin/slider');
            }                     
        }else{
            $this->render('admin/slider/create_view');
        }
    }

    public function edit($id)
    {
        $this->data['item'] = $this->slider_model->get_slider_category_by_id($id);
            if($this->input->post('submit')){
            $this->form_validation->set_rules('description', 'Slogan 01', 'trim|required');
            $this->form_validation->set_rules('image', 'Image', 'trim|required');
            if ($this->form_validation->run() == FALSE)
            {
                $this->render('admin/slider/create_view');
            }else{                            
                $category = $this->input->post('category');
                $link = $this->input->post('link');
                $description = $this->input->post('description');
                $description2 = $this->input->post('description2');
                $status = $this->input->post('status');
                $image = $this->input->post('image');
                $update_data = array('category_id' => $category,'link' => $link,'description' => $description, 'description2' => $description2, 'status'=>'status', 'image'=> $image, 'status' => $status, 'modified_date' => date('Y-m-d H:i:s'));
                if(!$this->slider_model->update($id , $update_data))
                {             
                    $this->postal->add('Sửa slider thất bại !','error');
                }else $this->postal->add('Sửa slider thành công.','success');
                redirect('admin/slider');
            }            
        }else{
            $this->render('admin/slider/edit_view');
        }
    }

    public function delete($slider_id){
        if(!$this->slider_model->delete($slider_id))
        {
            $this->postal->add('Slider không tồn tại','error');
            redirect('admin/slider');
        }else{
            $this->postal->add('Xóa Slider thành công','success');            
        }
        redirect('admin/slider');
    }
}