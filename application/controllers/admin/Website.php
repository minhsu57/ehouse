<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends Admin_Controller
{

    function __construct()
    {
        parent::__construct();
        if(!$this->ion_auth->in_group('admin'))
        {
            $this->postal->add('You are not allowed to visit the Categories page','error');
            redirect('admin');
        }
        $this->load->model('website_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        date_default_timezone_set("Asia/Ho_Chi_Minh");
    }

    public function index()
    {
        $input_vi['where'] = array('language_slug'=>'vi');
        $this->data['item_vi'] = $this->website_model->get_row($input_vi);

        if($this->input->post('submit')){
            $id = $this->input->post('id');
            $website_name = $this->input->post('website_name');
            $favicon = $this->input->post('favicon');
            $facebook = $this->input->post('facebook');
            $youtube = $this->input->post('youtube');
            $google_plus = $this->input->post('google_plus');                
            $twitter = $this->input->post('twitter');
            $ad_video = $this->input->post('ad_video');
            $phone = $this->input->post('phone');
            $mobile_phone = $this->input->post('mobile_phone');
            $google_map = $this->input->post('google_map');
            $email = $this->input->post('email');
            $admin_email = $this->input->post('admin_email');
            $address = $this->input->post('address');
            $slogan = $this->input->post('slogan');            
            $keyword = $this->input->post('keyword');
            $update_data = array('website_name' => $website_name, 'favicon' => $favicon,'facebook' => $facebook, 'youtube' => $youtube, 'google_plus' => $google_plus, 'twitter' => $twitter, 'ad_video' => $ad_video, 'phone' => $phone, 'mobile_phone' => $mobile_phone, 'google_map' => $google_map, 'email' => $email, 'admin_email' => $admin_email, 'address' => $address, 'slogan' => $slogan, 'slogan' => $slogan, 'keyword'=>$keyword, 'modified_date'=>date('Y-m-d'));
            if(!$this->website_model->update($id, $update_data))
            {             
                $this->postal->add('Update failed !','error');
            }else $this->postal->add('Update successful.','success');
            redirect('admin/website');
        }else
            $this->render('admin/website/index_view');       
    }
}