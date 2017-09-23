<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Public_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
       	$this->load->database();
       	$this->load->library('ion_auth');
       	$this->load->model('slider_model');
       	$this->load->library('postal');
	}

	public function index()
	{
		if($this->ion_auth->logged_in())
        {
            redirect('/member/info/profile','refresh');
        }
        // get content of slider
        $input['where'] = array('status' => 1, "category_id" => 'login');
        $this->data['sliders'] = $this->slider_model->get_list($input);

        $this->load->library('form_validation');
        $this->form_validation->set_rules('user_name', 'Tài khoản', 'required');
        $this->form_validation->set_rules('password', 'Mật khẩu', 'required');
        if($this->form_validation->run()===TRUE)
        {
            $remember = (bool) $this->input->post('remember');
            if ($this->ion_auth->login($this->input->post('user_name'), $this->input->post('password'), $remember))
            {
                if(isset($_SESSION['redirect_to'])) redirect($_SESSION['redirect_to']);
                else redirect('/admin');
            }
            else
            {
                $this->session->set_flashdata('redirect_to',$this->input->post('redirect_to'));
                $this->postal->add($this->ion_auth->errors(),'error');
                redirect('/login');
            }
        }
        else{
            $this->render('user/login_view');
        }
	}
}
