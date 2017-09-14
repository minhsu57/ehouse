<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News extends Admin_Controller
{

    function __construct()
    {
        parent::__construct();
        if(!$this->ion_auth->in_group('admin'))
        {
            $this->postal->add('You are not allowed to visit the Categories page','error');
            redirect('admin');
        }
        $this->load->model('news_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        date_default_timezone_set("Asia/Ho_Chi_Minh");
    }

    public function index()
    {
        $input['order'] = array('modified_date','DESC');
        $this->data['items'] = $this->news_model->get_list($input);
        //$this->data['next_previous_pages'] = $this->menu_item_model->all_pages;
        $this->render('admin/news/index_view');
    }

    public function create()
    {        
        $this->data["title"] = '';
        $this->data["content"] = '';
        $this->data["short_content"] = '';
        if($this->input->post('submit')){
            // $this->form_validation->set_rules('title', 'Bạn chưa nhập tiêu đề', 'required');
            // $this->form_validation->set_rules('content', 'Bạn chưa nhập nội dung', 'required');
            // $this->form_validation->set_rules('short_content', 'Bạn chưa nhập tóm tắt nội dung', 'required');
            $this->data["title"] = $this->input->post('title');
            $this->data["content"] = $this->input->post('content');
            $this->data["short_content"] = $this->input->post('short_content');
            // if ($this->form_validation->run() == FALSE)
            // {
            //      $this->render('admin/news/create_view');
            // }else{
                $title = $this->input->post('title');
                $content = $this->input->post('content');
                $short_content = $this->input->post('short_content');
                $keyword = $this->input->post('keyword');
                $meta_description = $this->input->post('meta_description');
                $insert_data = array('title' => $title,'short_content' => $short_content,'status' => 1, 'content' => $content, 'keyword' => $keyword, 'meta_description' => $meta_description, 'modified_date'=>date('Y-m-d H:i:s'));
                if(!$this->news_model->create($insert_data))
                {             
                    $this->postal->add('Thêm bài viết thất bại !','error');
                }else $this->postal->add('Thêm bài viết thành công.','success');
                redirect('admin/news'); 
            //}
            
        }else $this->render('admin/news/create_view');
    }

    public function edit($item_id)
    {
        $input['where'] = array('id' => $item_id);
        $this->data['item'] = $this->news_model->get_row($input);        
        if($this->input->post('submit')){
            $this->form_validation->set_rules('title', 'Bạn chưa nhập tiêu đề', 'required');
            $this->form_validation->set_rules('content', 'Bạn chưa nhập nội dung', 'required');
            $this->form_validation->set_rules('short_content', 'Bạn chưa nhập tóm tắt nội dung', 'required');
            if ($this->form_validation->run() == FALSE)
            {
                 $this->render('admin/news/edit_view');
            }else{
                $title = $this->input->post('title');
                $content = $this->input->post('content');
                $short_content = $this->input->post('short_content');
                $insert_data = array('title' => $title,'short_content' => $short_content, 'content' => $content, 'created_date'=>date('Y-m-d h:i:s'));
                if(!$this->news_model->update($item_id, $insert_data))
                {             
                    $this->postal->add('Chỉnh sửa bài viết thất bại !','error');
                }else $this->postal->add('Chỉnh sửa bài viết thành công.','success');
                redirect('admin/tintuc');
            }
        }else $this->render('admin/news/edit_view');
    }

    public function delete($item_id){
        $where = array('item_id' => $item_id);
        
        if(!$this->news_model->delete($item_id))
        {
            $this->postal->add('Tin tức không tồn tại','error');
            redirect('admin/tintuc');
        }else{
            $this->postal->add('Xóa tin tức thành công','success');            
        }
        redirect('admin/tintuc');
    }

    public function changeStatus($item_id, $status){
        $update_data = array('status' => $status == 0 ? 1 : 0);
        if(!$this->news_model->update($item_id, $update_data))
        {
            $this->postal->add('Thông tin không tồn tại','error');
        } else{            
            $this->postal->add('Cập nhật Trạng thái thành công - mã Tin tức : '.$item_id,'success');        
        }
        redirect('admin/tintuc');
    }
    public function adda(){
        if($this->input->post('submit')){
            $fileName = strtolower($_FILES['sliderUpload']['name']);
            $config = array('upload_path' => './public/images/slider/', 'allowed_types' => 'gif|jpg|png', 'max_size' => 800, 'file_name' => $fileName);                                        
            // Define file rules
            $this->load->library('upload', $config);
            if(!isset($_FILES['sliderUpload']['name']) || empty($_FILES['sliderUpload']['name'])){
                $this->postal->add('Bạn chưa chọn file !','error');
            }else if($this->upload->do_upload("sliderUpload")){
                $upload = $this->upload->data();
                $insert_data = array('name' => $upload['file_name'], 'url' => $upload['file_name'], 'status' => 1, 'created_date' => date('Y-m-d H:i:s'));
                if(!$this->slider_model->create($insert_data))
                {             
                    $this->postal->add('Thêm slider thất bại !','error');
                }else $this->postal->add('Thêm slider thành công.','success');                      
            }else $this->postal->add('Thêm slider thất bại.','error');
            redirect('admin/slider');
        // Exit to avoid further execution
            exit();
        }
    }
}