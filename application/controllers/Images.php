<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Images extends Public_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
       	$this->load->database();
       	$this->load->library('session');
        
        $this->load->model('category_model');
        $this->load->model('slider_model');
       	$this->load->model('images_model');
        // slider
        $input['where'] = array('status' => 1, "category_id" => 'hinh-anh');
        $this->data['sliders'] = $this->slider_model->get_list($input);
        $this->load->library('pagination');
    }
    
	public function index()
	{
        // get content of category
        $input['where'] = array("id" => 'hinh-anh');
        $page = $this->category_model->get_row($input);
        $this->data['website']->meta_keyword = $page->meta_keyword;
        $this->data['website']->meta_description = $page->meta_description;
        //pagination settings
        $config["per_page"] = $this->pagination->per_page;
        $config['base_url'] = site_url('thu-vien-hinh-anh');
        $config['total_rows'] = $this->images_model->get_total();
        $this->data['total'] = $config['total_rows'];
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = $choice;       
        
        // pagination
        $page = ($this->input->get('page')) ? $this->input->get('page') : 1;
        $this->pagination->initialize($config);        
        $this->data['pagination'] = $this->pagination->create_links();
        $offset = ($page  == 1) ? 0 : ($page * $config['per_page']) - $config['per_page'];
        // get list data
        $input_images['limit'] = array($config["per_page"], $offset);
        // get list news	
        $this->data['items'] = $this->images_model->get_list($input_images);
		$this->render('user/images_view');
	}
}
