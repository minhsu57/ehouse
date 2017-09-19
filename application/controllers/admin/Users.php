<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends Admin_Controller
{

    function __construct()
    {
        parent::__construct();
        if(!$this->ion_auth->in_group('admin'))
        {
            $this->postal->add('You are not allowed to visit the Users page','error');
            redirect('admin');
        }
        $this->load->helper(array('url', 'form'));
        $this->load->model('users_model');
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $this->load->library('form_validation');
        $this->lang->load('form_validation', 'english');
    }

    public function index()
    {
        $this->data['items'] = $this->users_model->get_list();
        $this->render('admin/users/index_view');
    }

    public function create()
    {
        $this->form_validation->set_error_delimiters('<span class="form_error">','</span>');
        $this->form_validation->set_rules('username','Username','trim|required');
        $this->form_validation->set_rules('first_name','First name','trim|required');
        $this->form_validation->set_rules('last_name','Last name','trim|required');
        $this->form_validation->set_rules('phone','Phone','trim|required');
        $this->form_validation->set_rules('address','Address','trim');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('password','Password','min_length[6]|required');
        $this->form_validation->set_rules('password_confirm','Password confirmation','matches[password]|required');

        if($this->form_validation->run()===FALSE)
        {
            $this->render('admin/users/create_view');
        }else {
            $email_check = $this->ion_auth->email_check($this->input->post('email'));
            $input['where'] = array('username' => $this->input->post('username'));
            $username_check = $this->users_model->get_list($input);
            if(count($username_check) > 0){
                $this->postal->add('Username already exists !','error');
                $this->render('admin/users/create_view');
            }else if($email_check){
                $this->postal->add('Email already exists !','error');                
                $this->render('admin/users/create_view');
            }else{
                $username = $this->input->post('username');
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $group_ids = $this->input->post('groups');

                $additional_data = array(
                    'first_name' => $this->input->post('first_name'),
                    'last_name'  => $this->input->post('last_name'),
                    'birth_day'    => $this->input->post('birth_day'),
                    'address'    => $this->input->post('address'),
                    'phone'      => $this->input->post('phone')
                );
                $this->ion_auth->register($username, $password, $email, $additional_data, $group_ids);
                $this->postal->add($this->ion_auth->messages(),'success');
                redirect('admin/users');
            } 
        }
    }

    public function edit($user_id = NULL)
    {
        $user_id = $this->input->post('user_id') ? $this->input->post('user_id') : $user_id;
        if($this->data['current_user']->id == $user_id)
        {
            $this->postal->add('Use the profile page to change your own credentials.','error');
            redirect('admin/users');
        }
        $this->data['page_title'] = 'Edit user';

        $this->form_validation->set_error_delimiters('<span class="form_error">','</span>');
        $this->form_validation->set_rules('first_name','First name','trim|required');
        $this->form_validation->set_rules('last_name','Last name','trim|required');
        $this->form_validation->set_rules('phone','Phone','trim|required');
        $this->form_validation->set_rules('address','Address','trim');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('password','Password','min_length[6]');
        $this->form_validation->set_rules('password_confirm','Password confirmation','matches[password]');
        $this->form_validation->set_rules('user_id','User ID','trim|integer|required');

        if($this->form_validation->run() === FALSE)
        {
            if($user = $this->ion_auth->user((int) $user_id)->row())
            {
                $this->data['user'] = $user;
            }
            else
            {
                $this->postal->add('The user doesn\'t exist.','error');
                redirect('admin/users');
            }
            $this->render('admin/users/edit_view');
        }
        else
        {
            $email_check = $this->ion_auth->email_check($this->input->post('email'));
            if($email_check){
                $this->postal->add('Email already exists !','error');
                if($user = $this->ion_auth->user((int) $user_id)->row())
                {
                    $this->data['user'] = $user;
                }
                $this->render('admin/users/edit_view');
                return;
            }
            $user_id = $this->input->post('user_id');
            $new_data = array(
                'email' => $this->input->post('email'),
                'first_name' => $this->input->post('first_name'),
                'last_name'  => $this->input->post('last_name'),
                'birth_day'    => $this->input->post('birth_day'),
                'address'    => $this->input->post('address'),
                'phone'      => $this->input->post('phone')
                );
            if(strlen($this->input->post('password'))>=6) $new_data['password'] = $this->input->post('password');

            $this->ion_auth->update($user_id, $new_data);

            //Update the groups user belongs to
            $groups = $this->input->post('groups');
            if (isset($groups) && !empty($groups))
            {
                $this->ion_auth->remove_from_group('', $user_id);
                foreach ($groups as $group)
                {
                    $this->ion_auth->add_to_group($group, $user_id);
                }
            }
            $this->postal->add($this->ion_auth->messages(),'success');
            redirect('admin/users');
        }
    }

    public function delete($user_id = NULL, $user_name)
    {
        if(is_null($user_id))
        {
            $this->postal->add('There\'s no user to delete','error');
        }
        else
        {
            $this->load->model('calendar_model');
            $input['where'] = array('user_name' => $user_name);
            if(count($this->calendar_model->get_list($input)) >0){
                $this->postal->add('Delete User fail, please delete calendar of this user first !','error');
            }else{                
                $this->ion_auth->delete_user($user_id);
                $this->postal->add($this->ion_auth->messages(),'success');
            }
            
        }
        redirect('admin/users');
    }
}