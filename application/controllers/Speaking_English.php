<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Speaking_English extends Public_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
       	$this->load->database();
       	$this->load->library('session');
       	// $this->load->helper('language');
       	$this->load->model('slider_model');
       	$this->load->model('page_content_model');
	}

	public function english_45_member()
	{
        $input['where'] = array('status' => 1);
        $this->data['sliders'] = $this->slider_model->get_list($input);
        //get content of course consultant
        $input['where'] = array('id' => 'english_45_member');
        $this->data['item'] = $this->page_content_model->get_row($input);
		$this->render('user/speaking_view');
	}

    public function english_8_member()
    {
        $input['where'] = array('status' => 1);
        $this->data['sliders'] = $this->slider_model->get_list($input);
        //get content of course consultant
        $input['where'] = array('id' => 'english_8_member');
        $this->data['item'] = $this->page_content_model->get_row($input);
        $this->render('user/speaking_view');
    }
}
