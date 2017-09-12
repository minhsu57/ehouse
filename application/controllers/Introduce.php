<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Introduce extends Public_Controller {
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
        $input['where'] = array('class' => 'Introduce');
        $this->data['item'] = $this->page_content_model->get_row($input);
		$this->render('user/introduce_view');
	}
}
