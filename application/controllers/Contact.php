<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Public_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
       	$this->load->database();
       	$this->load->library('session');
       	$this->load->model('page_content_model');
	}

	public function index()
	{
        // get content of contact page
        $input['where'] = array('class' => 'contact');
        $this->data['item'] = $this->page_content_model->get_row($input);
		$this->render('user/contact_view');
	}
}
