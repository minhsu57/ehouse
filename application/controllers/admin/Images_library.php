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
        $input['order'] = array('id','DESC');
    }

    public function index()
    {
        $this->data['items'] = $this->images_model->get_list();
        $this->render('admin/Images_library/index_view');
    }

    public function create()
    {
        if($this->input->post('submit')){
            $this->form_validation->set_message('required', $this->lang->line('required'));
            $this->form_validation->set_rules('name', '', 'required');
            $this->form_validation->set_rules('image_link', 'lang:image_link', 'required');
            if ($this->form_validation->run() == FALSE)
            {
                 $this->render('admin/images_library/create_view');
            }else{                
                $name = $this->input->post('name');
                $image_link = $this->input->post('image_link');
                // get value of src img tag
                preg_match( '@src="([^"]+)"@' , $image_link, $match);
                $image = array_pop($match);
                $insert_data = array('name' => $name, 'image' => $image,'image_link' => $image_link, 'modified_date'=>date('Y-m-d H:i:s'));                
                if(!$this->images_model->create($insert_data))
                {             
                    $this->postal->add('Created fail !','error');
                }else $this->postal->add('Created successfully.','success');
                redirect('admin/images_library');
            }            
        }else{
            $this->render('admin/Images_library/create_view');
        }
    }

    public function edit($id)
    {
        $this->data['item'] = $this->slider_model->get_slider_category_by_id($id);
        if($this->input->post('submit')){            
            $category = $this->input->post('category');
            $link = $this->input->post('link');
            $description = $this->input->post('description');
            $description2 = $this->input->post('description2');
            $status = $this->input->post('status');
            $image = $this->input->post('image');
                // get value of src img tag
            $doc = new DOMDocument();
            $doc->loadHTML($image);
            $xpath = new DOMXPath($doc);
            $image_name = $xpath->evaluate("string(//img/@src)");
            $update_data = array('category_id' => $category,'link' => $link,'description' => $description, 'description2' => $description2, 
                'status'=>'status', 'image'=> $image, 'image_name'=> $image_name, 'status' => $status);
            if(!$this->slider_model->update($id , $update_data))
            {             
                $this->postal->add('Sửa slider thất bại !','error');
            }else $this->postal->add('Sửa slider thành công.','success');
            redirect('admin/slider');            
        }else{
            $this->render('admin/Images_library/edit_view');
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