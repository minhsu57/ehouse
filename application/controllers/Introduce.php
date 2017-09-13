<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Introduce extends Public_Controller {
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
		$input['where'] = array('status' => 1, 'category_id' => 'gioi-thieu');
    	$this->data['sliders'] = $this->slider_model->get_list($input);
        // get content of contact page
        $input['where'] = array('id' => 'gioi-thieu');
        $this->data['item'] = $this->category_model->get_row($input);
		$this->render('user/introduce_view');
	}
}
