<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	function __constructor(){

		parent::__constructor();
	}

	protected function render($the_view = NULL, $template = 'master')
	{
		if($template == 'json' || $this->input->is_ajax_request())
		{
			header('Content-Type: application/json');
			echo json_encode($this->data);
		}
		else if(is_null($template))
		{
			$this->load->view($the_view, $this->data);
		}else
		{
			$this->data['the_view_content'] = (is_null($the_view)) ? '' : $this->load->view($the_view, $this->data, TRUE);
			$this->load->view('templates/' . $template . '_view', $this->data);
		}
	}
}
class Public_Controller extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	protected function render($the_view = NULL, $template = 'public_master')
    {
    	parent::render($the_view, $template);
    }
}
class Admin_Controller extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
        $this->load->library('postal');
		$this->load->helper('url');
		if (!$this->ion_auth->logged_in())
		{
            $_SESSION['redirect_to'] = current_url();
			//redirect them to the login page
			redirect('admin/user/login', 'refresh');
		}
        $current_user = $this->ion_auth->user()->row();
        $this->user_id = $current_user->id;
		$this->data['current_user'] = $current_user;
		$this->data['current_user_menu'] = '';
		if($this->ion_auth->in_group('admin'))
		{
			$this->data['current_user_menu'] = $this->load->view('templates/_parts/user_menu_admin_view.php', NULL, TRUE);
		}
	}
	protected function render($the_view = NULL, $template = 'admin_master')
	{
		parent::render($the_view, $template);
	}
}
