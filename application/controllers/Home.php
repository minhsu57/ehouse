<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller {
	function __construct() {
		parent::__construct();
		$this->data["web"] = null;
	}

	public function index()
	{
		$this->render('user/home_view');
	}
}
