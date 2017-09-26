<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Speaking_english extends Public_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
        $this->load->database();
        $this->load->library('session');
       	$this->load->helper('language');
        $this->load->model('slider_model');
        $this->load->model('category_model');
        
        // title for button in view
        $this->data['tab1_title'] = "Thông tin khóa học";
        $this->data['tab2_title'] = "Lịch khai giảng";
        $this->data['tab3_title'] = "Đăng ký";
    }

    public function index($id)
    {
        // get content of category
        $input['where'] = array("id" => $id);
        $page = $this->category_model->get_row($input);
        $this->data['website']->meta_keyword = $page->meta_keyword;
        $this->data['website']->meta_description = $page->meta_description;
        // get list slider
        $input['where'] = array('status' => 1, 'category_id' => $id);
        $this->data['sliders']  = $this->slider_model->get_list($input);
        //get content of this page
        $input['where'] = array('id' => $id);
        $this->data['item'] = $this->category_model->get_row($input);
        $this->render('user/speaking_view');
    }
}
