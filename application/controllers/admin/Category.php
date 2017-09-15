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
        $this->load->helper(array('form', 'url'));
        $this->load->model('slider_model');
        $this->load->model('category_model');
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $this->load->library('form_validation');
        $this->lang->load('form_validation', 'english');
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
            $this->form_validation->set_message('required', $this->lang->line('required'));
            $this->form_validation->set_error_delimiters('<span class="form_error">','</span>');
            $this->form_validation->set_rules('name', 'lang:name', 'required');
            if($this->form_validation->run() == FALSE)
            {
                $this->render('admin/category/create_view');
            }else{

                // check id is exist or not
                $name = ltrim($this->input->post('name'));
                $name = rtrim($name);
                $input['where'] = array('id' => create_slug($name));
                $total_category_id = $this->category_model->get_total($input);
                if($total_category_id >0){
                    $this->postal->add('Tên Category đã tồn tại !','error');
                    $this->render('admin/category/create_view');
                }else{
                    $parent = $this->input->post('parent') == "" ? NULL : $this->input->post('parent');
                    $description = $this->input->post('description');
                    $content = $this->input->post('content');
                    $content2 = $this->input->post('content2');
                    $content3 = $this->input->post('content3');
                    $this->data['content4'] = $this->input->post('content4');
                    $this->data['url'] = $this->input->post('url');
                    $meta_keyword = $this->input->post('meta_keyword');
                    $meta_description = $this->input->post('meta_description');
                    $update_data = array('id' => create_slug($name), 'name' => $name, 'description' => $description, 'content' => $content, 'content2' => $content2, 'content3' => $content3, 'content4' => $this->data['content4'], 'url' => $this->data['url'], 'parent' => $parent, 'meta_keyword' => $meta_keyword, 'meta_description' => $meta_description, 'modified_date'=>date('Y-m-d H:i:s'));
                    if(!$this->category_model->create($update_data))
                    {             
                        $this->postal->add('Thêm mới thất bại !','error');
                    }else { $this->postal->add('Thêm mới thành công.','success'); }
                    redirect('admin/category');
                }
            }
        }else{            
            $this->render('admin/category/create_view');
        }
    }

    public function edit($id)
    {
        $this->data['categories'] = $this->category_model->get_list();

        if($this->input->post('submit')){
            $this->data['parent'] = $this->input->post('parent');
            $this->data['description'] = $this->input->post('description');
            $this->data['content'] = $this->input->post('content');
            $this->data['content2'] = $this->input->post('content2');
            $this->data['content3'] = $this->input->post('content3');
            $this->data['content4'] = $this->input->post('content4');
            $this->data['url'] = $this->input->post('url');
            $this->data['meta_keyword'] = $this->input->post('meta_keyword');
            $this->data['meta_description'] = $this->input->post('meta_description');
            $update_data = array('description' => $this->data['description'], 'content' => $this->data['content'], 'content2' => $this->data['conten2'], 'content3' => $this->data['content3'], 'content4' => $this->data['content4'], 'url' => $this->data['url'], 'parent' => $this->data['parent'], 'meta_keyword' => $this->data['meta_keyword'], 'meta_description' => $this->data['meta_description'], 'modified_date'=>date('Y-m-d H:i:s'));
            if(!$this->category_model->update($id, $update_data))
            {             
                $this->postal->add('Chỉnh sửa thất bại !','error');
            }else $this->postal->add('Chỉnh sửa thành công.','success');
            redirect('admin/category');            
        }else{
            $input['where'] = array('id' => $id);
            $this->data['item'] = $this->category_model->get_row($input);            
            $this->render('admin/category/edit_view');
        }
    }

    public function delete($id){
        // get data for category index view
        $this->data['items'] = $this->category_model->get_list();
        $this->render('admin/category/index_view');
        // check exist slider relation with category
        $where = array('category_id' => $id);
        $is_existed_slider = $this->slider_model->check_exists($where);
        if($is_existed_slider){
            $this->postal->add('Không thể xóa, vui lòng xóa slider có liên quan đến Category này trước !','error');            
        }else{
            if(!$this->category_model->delete_category_id($id))
            {
                $this->postal->add('Xóa Category thất bại','error');
            }else{
                $this->postal->add('Xóa Category thành công','success');            
            }
        }
        redirect('admin/category');             
    }
}