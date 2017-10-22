<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends Public_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
       	$this->load->database();
       	$this->load->library('session');
        
        $this->load->model('category_model');
        $this->load->model('search_model');
        $this->load->model('slider_model');
        // slider
        $input['where'] = array('status' => 1, "category_id" => 'tim-kiem');
        $this->data['sliders'] = $this->slider_model->get_list($input);
        $this->load->library('pagination');
    }
    
	public function index()
	{
        $id = $this->input->post('id');
        // get content of category
        $input['where'] = array("id" => 'tim-kiem');
        $page = $this->category_model->get_row($input);
        $this->data['website']->meta_keyword = $page->meta_keyword;
        $this->data['website']->meta_description = $page->meta_description;
        //pagination settings
        $config["per_page"] = $this->pagination->per_page;
        $config['base_url'] = site_url('tim-kiem');
        $config['total_rows'] = $this->search_model->get_total_list_search($id);
        $this->data['total'] = $config['total_rows'];
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = $choice;       
        
        // pagination
        $page = ($this->input->get('page')) ? $this->input->get('page') : 1;
        $this->pagination->initialize($config);        
        $this->data['pagination'] = $this->pagination->create_links();
        $offset = ($page  == 1) ? 0 : ($page * $config['per_page']) - $config['per_page'];
        // get list data	
        $this->data['items'] = $this->search_model->get_list_search($id, $config["per_page"], $offset);
		$this->render('user/search_view');
	}
}
