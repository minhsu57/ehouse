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
        $input['order'] = array('sort_order', 'ASC');
        $this->data['items'] = $this->category_model->get_list($input);
        $this->render('admin/category/index_view');
    }

    public function create()
    {
        $input_categories['where'] = array('level' => 0);
        $this->data['categories'] = $this->category_model->get_list($input_categories);
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
                    $level = $parent != NULL && $parent != "" ? 1 : 0;
                    $this->data['sort_order'] = $this->input->post('sort_order');
                    $description = $this->input->post('description');
                    $content = $this->input->post('content');
                    $content2 = $this->input->post('content2');
                    $content3 = $this->input->post('content3');
                    $this->data['content4'] = $this->input->post('content4');
                    $this->data['url'] = $this->input->post('url');
                    $meta_keyword = $this->input->post('meta_keyword');
                    $meta_description = $this->input->post('meta_description');
                    $update_data = array('id' => create_slug($name), 'name' => $name, 'sort_order' => $this->data['sort_order'], 'description' => $description, 'content' => $content, 'content2' => $content2, 'content3' => $content3, 'content4' => $this->data['content4'], 'url' => $this->data['url'], 'parent' => $parent, 'level' => $level, 'meta_keyword' => $meta_keyword, 'meta_description' => $meta_description, 'modified_date'=>date('Y-m-d H:i:s'));
                    if(!$this->category_model->create($update_data))
                    {             
                        $this->postal->add('Save fail !','error');
                    }else { $this->postal->add('Save successfully.','success'); }
                    redirect('admin/category');
                }
            }
        }else{            
            $this->render('admin/category/create_view');
        }
    }

    public function edit($id)
    {
        $input_categories['where'] = array('level' => 0, 'id <>' => $id);
        $this->data['categories'] = $this->category_model->get_list($input_categories);
        // get level of this $id
        $input_level['where'] = array('id' => $id);
        $level_id = $this->category_model->get_row($input_level);

        if($this->input->post('submit')){
            $this->data['parent'] = $this->input->post('parent');
            $level = $level_id->level == -1 ? -1 : ($this->data['parent'] != NULL && $this->data['parent']  != "" ? 1 : 0);
            $this->data['sort_order'] = $this->input->post('sort_order');
            $this->data['description'] = $this->input->post('description');
            $this->data['content'] = $this->input->post('content');
            $this->data['content2'] = $this->input->post('content2');
            $this->data['content3'] = $this->input->post('content3');
            $this->data['content4'] = $this->input->post('content4');
            $this->data['url'] = $this->input->post('url');
            $this->data['meta_keyword'] = $this->input->post('meta_keyword');
            $this->data['meta_description'] = $this->input->post('meta_description');
            $update_data = array('sort_order' => $this->data['sort_order'], 'description' => $this->data['description'], 'content' => $this->data['content'], 'content2' => $this->data['content2'], 'content3' => $this->data['content3'], 'content4' => $this->data['content4'], 'url' => $this->data['url'], 'parent' => $this->data['parent'], 'level' => $level, 'meta_keyword' => $this->data['meta_keyword'], 'meta_description' => $this->data['meta_description'], 'modified_date'=>date('Y-m-d H:i:s'));
            if(!$this->category_model->update($id, $update_data))
            {             
                $this->postal->add('Save fail !','error');
            }else $this->postal->add('Save successfully.','success');
            redirect('admin/category/edit/'.$id);            
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
        // check exist children category of this category
        $where = array('parent' => $id);
        $is_existed_child_category = $this->category_model->check_exists($where);
        if($is_existed_slider){
            $this->postal->add('Không thể xóa, vui lòng xóa slider có liên quan đến Category này trước !','error');          
        }else if($is_existed_child_category){
            $this->postal->add('Không thể xóa, vui lòng xóa category con của category này trước !','error');
        }
        else{
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