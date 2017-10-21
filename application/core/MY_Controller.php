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
		$this->load->model('website_model');
		$this->load->model('news_model');
		$input['where'] = array('language_slug'=>'vi');
		$this->data['website'] = $this->website_model->get_row($input);	
		$this->data['website']->page_title = $this->data['website']->website_name;
		$this->data['website']->meta_keyword = "";
		$this->data['website']->meta_description = "";
        // get 7 items of news model
		$input_news['limit'] = array('6' ,'0');
		$input_news['order'] = array('modified_date','DESC');
		$this->data['news'] = $this->news_model->get_list($input_news);
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
		$_SESSION['IsAuthorized'] = true;
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
