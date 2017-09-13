<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Speaking_English extends Public_Controller {
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
        $this->data['tab2_title'] = "Đăng kí khóa học";
        $this->data['tab3_title'] = "Nội dung khóa học";
    }

    public function index($id)
    {
        $input['where'] = array('status' => 1, 'category_id' => $id);
        $this->data['sliders']  = $this->slider_model->get_list($input);
        //get content of this page
        $input['where'] = array('id' => $id);
        $this->data['item'] = $this->category_model->get_row($input);
        $this->render('user/speaking_view');
    }

    // public function english_8_member()
    // {
    //     //get content of english_8_member
    //     $input['where'] = array('id' => 'english_8_member');
    //     $this->data['item'] = $this->page_content_model->get_row($input);
    //     $this->render('user/speaking_view');
    // }

    // public function ielts_speaking_writting()
    // {
    //     //get content of ielts_speaking_writting
    //     $input['where'] = array('id' => 'ielts_speaking_writting');
    //     $this->data['item'] = $this->page_content_model->get_row($input);
    //     $this->render('user/speaking_view');
    // }

    // public function ielts_reading_listening()
    // {
    //     //get content of ielts_reading_listening
    //     $input['where'] = array('id' => 'ielts_reading_listening');
    //     $this->data['item'] = $this->page_content_model->get_row($input);
    //     $this->render('user/speaking_view');
    // }

    // public function ielts_4_skills()
    // {
    //     //get content of ielts_4_skills
    //     $input['where'] = array('id' => 'ielts_4_skills');
    //     $this->data['item'] = $this->page_content_model->get_row($input);
    //     $this->render('user/speaking_view');
    // }

    // public function speaking_company()
    // {
    //     //get content of ielts_4_skills
    //     $input['where'] = array('id' => 'speaking_company');
    //     $this->data['item'] = $this->page_content_model->get_row($input);
    //     $this->render('user/speaking_view');
    // }

    // public function ielts_testing()
    // {
    //     $this->data['tab1_title'] = "Thông tin thi thử IELTS";
    //     $this->data['tab2_title'] = "Lịch thi thử IELTS 2017";
    //     $this->data['tab3_title'] = "Đăng ký thi thử ITELS";
    //     //get content of ielts_4_skills
    //     $input['where'] = array('id' => 'ielts_testing');
    //     $this->data['item'] = $this->page_content_model->get_row($input);
    //     $this->render('user/speaking_view');
    // }
}
