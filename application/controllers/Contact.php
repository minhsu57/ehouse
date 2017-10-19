<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Public_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
       	$this->load->database();
       	$this->load->library('session');
       	$this->load->model('category_model');
       	$this->load->model('slider_model');
	}

	public function index()
	{
		// get content of category
        $input['where'] = array("id" => 'lien-he');
        $page = $this->category_model->get_row($input);
        $this->data['website']->meta_keyword = $page->meta_keyword;
        $this->data['website']->meta_description = $page->meta_description;
        // get list slider
		    $input['where'] = array('status' => 1, 'category_id' => 'lien-he');
    	 $this->data['sliders'] = $this->slider_model->get_list($input);
        // get content of contact page
        $this->data['item'] = $page;
		$this->render('user/contact_view');
	}
}
