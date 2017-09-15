<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Public_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
       	$this->load->database();
       	$this->load->model('slider_model');
	}

	public function index()
	{

        // get content of slider
        $input['where'] = array('status' => 1, "category_id" => 'login');
        $this->data['sliders'] = $this->slider_model->get_list($input);
		$this->render('user/login_view');
	}
}
