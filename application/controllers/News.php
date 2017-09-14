<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends Public_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
       	$this->load->database();
       	$this->load->library('session');
        $this->load->model('slider_model');
       	$this->load->model('news_model');
        // slider
        $input['where'] = array('status' => 1, "category_id" => 'tin-tuc');
        $this->data['sliders'] = $this->slider_model->get_list($input);
    }
    
	public function index()
	{	
        $this->data['items'] = $this->news_model->get_list();
		$this->render('user/news_view');
	}
	public function detail($id)
	{	
		$input["where"] = array('id' => $id);
        $this->data['item'] = $this->news_model->get_row($input);
        if($this->data['item']->keyword != "")
        	$this->data['website']->meta_keyword = $this->data['item']->keyword;
        if($this->data['item']->meta_description != "")
        	$this->data['website']->meta_description = $this->data['item']->meta_description;
        if($this->data['item']->title != "")
        	$this->data["page_title"] = $this->data['item']->title;
        
		$this->render('user/news_detail_view');
	}
}
