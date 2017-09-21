<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

    function __constructor(){
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->library('postal');
        $this->load->helper('url');
        if (!$this->ion_auth->logged_in())
        {
            redirect('/login', 'refresh');
        }
        $current_user = $this->ion_auth->user()->row();
        $this->user_id = $current_user->id;
        $this->data['current_user'] = $current_user;
        $this->data['current_user_menu'] = '';
        // if($this->ion_auth->in_group('admin'))
        // {
        //     $this->data['current_user_menu'] = $this->load->view('templates/_parts/user_menu_admin_view.php', NULL, TRUE);
        // }
    }

    public function index()
    {
        $this->load->view('admin/login_view');
    }

}