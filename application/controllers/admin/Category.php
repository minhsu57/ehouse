<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends Admin_Controller
{

    function __construct()
    {
        parent::__construct();
        if(!$this->ion_auth->in_group('admin'))
        {
            $this->postal->add('You are not allowed to visit the Categories page','error');
            redirect('admin');
        }
        $this->load->model('category_model');
    }

    public function index()
    {
        $this->data['items'] = $this->category_model->get_list();
        $this->render('admin/category/index_view');
    }

    public function create()
    {
        $this->data['categories'] = $this->category_model->get_list();
        if($this->input->post('submit')){
            // check id is exist or not
            $name = ltrim($this->input->post('name'));
            $name = rtrim($name);
            $input['where'] = array('id' => create_slug($name));
            $total_category_id = $this->category_model->get_total($input);
            if($total_category_id >0){
                $this->postal->add('Tên Category đã tồn tại !','error');
                $this->render('admin/category/create_view');
            }else{
                $parent = $this->input->post('parent');
                $description = $this->input->post('description');
                $content = $this->input->post('content');
                $content2 = $this->input->post('content2');
                $content3 = $this->input->post('content3');
                $update_data = array('id' => create_slug($name), 'name' => $name, 'description' => $description, 'content' => $content, 'content2' => $content2, 'content3' => $content3, 'parent' => $parent);
                if(!$this->category_model->create($update_data))
                {             
                    $this->postal->add('Thêm mới thất bại !','error');
                }else $this->postal->add('Thêm mới thành công.','success');
                redirect('admin/category');
            }
            
        }else{            
            $this->render('admin/category/create_view');
        }
    }

    public function edit($id)
    {
        $this->data['categories'] = $this->category_model->get_list();
        $input['where'] = array('id' => $id);
        $this->data['item'] = $this->category_model->get_row($input);
        if($this->input->post('submit')){
            // check id is exist or not
            $name = ltrim($this->input->post('name'));
            $name = rtrim($name);
            $input['where'] = array('id' => create_slug($name));
            $total_category_id = $this->category_model->get_total($input);
            if($total_category_id >0){
                $this->postal->add('Tên Category đã tồn tại !','error');
                $this->render('admin/category/edit_view');
            }else{
                $parent = $this->input->post('parent');
                $description = $this->input->post('description');
                $content = $this->input->post('content');
                $content2 = $this->input->post('content2');
                $content3 = $this->input->post('content3');
                $update_data = array('id' => create_slug($name), 'name' => $name, 'description' => $description, 'content' => $content, 'content2' => $content2, 'content3' => $content3, 'parent' => $parent);
                if(!$this->category_model->update($id, $update_data))
                {             
                    $this->postal->add('Chỉnh sửa thất bại !','error');
                }else $this->postal->add('Chỉnh sửa thành công.','success');
                redirect('admin/category/index/'.$id);
            }
            
        }else{            
            $this->render('admin/category/edit_view');
        }
    }

    public function delete($slider_id){
        $where = array('slider_id' => $slider_id);

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