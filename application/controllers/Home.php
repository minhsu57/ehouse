<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
        $this->load->database();
        $this->load->library('session');
        $this->load->helper('language');
        $this->load->model('category_model');
        $this->load->model('slider_model');
        $this->load->model('page_content_model');
    }

    public function index()
    {
        // get content of category
        $input['where'] = array("id" => 'home');
        $page = $this->category_model->get_row($input);
        $this->data['website']->meta_keyword = $page->meta_keyword;
        $this->data['website']->meta_description = $page->meta_description;
        // get content of slider
        $input['where'] = array('status' => 1, "category_id" => 'home');
        $this->data['sliders'] = $this->slider_model->get_list($input);
        // get content of home page
        $input['where'] = array('class' => 'course');
        $input['order'] = array('id','ASC');
        $this->data['content_course'] = $this->page_content_model->get_list($input);
        // get content of course consultant
        $input_consultant['where'] = array('id' => 'course_consultant');
        $this->data['course_consultant'] = $this->page_content_model->get_row($input_consultant);
        // get content of registering test level
        $input_resgiter['where'] = array('id' => 'resgiter_test_level');
        $this->data['note_rtl'] = $this->page_content_model->get_row($input_resgiter);

        $this->render('user/home_view');
    }
}
