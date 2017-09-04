<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends Public_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
       	$this->load->database();
	}

	public function index()
	{
        // get content of contact page
        $this->data['item'] = "";
		$this->render('user/account_view');
	}
}
