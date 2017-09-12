<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
    $this->load->database();
    $this->load->library('session');
    $this->load->helper('language');
    $this->load->model('slider_model');
    $this->load->model('page_content_model');
  }

  public function index()
  {
    $input['where'] = array('status' => 1);
    $this->data['sliders'] = $this->slider_model->get_list($input);
        // get content of home page
    $input['where'] = array('class' => 'course');
    $input['order'] = array('id','ASC');
    $this->data['content_course'] = $this->page_content_model->get_list($input);
        // get content of course consultant
    $input['where'] = array('id' => 'course_consultant');
    $this->data['course_consultant'] = $this->page_content_model->get_row($input);
        // get content of registering test level
    $input['where'] = array('id' => 'resgiter_test_level');
    $this->data['note_rtl'] = $this->page_content_model->get_row($input);
    $this->render('user/home_view');
  }
}
