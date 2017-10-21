<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends Admin_Controller
{

    function __construct()
    {
        parent::__construct();
        if(!$this->ion_auth->in_group('admin')){
            $this->postal->add('You are not allowed to visit the Users page','error');
            redirect('admin');
        }
        $this->load->helper(array('url', 'form', 'file'));
        $this->load->model('users_model');
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $this->load->library('form_validation');
        $this->lang->load('form_validation', 'english');
        $this->form_validation->set_error_delimiters('<span class="form_error">','</span>');
        $this->load->library('pagination'); 
    }

    public function index()
    {
        // condition for get users data
        $first_name = str_replace('"', "'", $this->input->get('first_name'));
        $last_name  = str_replace('"', "'", $this->input->get('last_name'));
        $email      = str_replace('"', "'", $this->input->get('email'));
        $phone      = str_replace('"', "'", $this->input->get('phone'));
        $active     = $this->input->get('active');
        
        //pagination settings
        $config["per_page"] = $this->pagination->per_page;
        $config['base_url'] = site_url('admin/users?active='.$this->input->get('active').'&first_name='.$this->input->get('first_name').'&last_name='.$this->input->get('last_name').'&email='.$this->input->get('email').'&phone='.$this->input->get('phone'));
        $input['where'] = array('first_name'=>$first_name,'last_name'=>$last_name,'email'=>$email,'phone'=>$phone);
        //$input['like'] = array('active' , $active);
        $config['total_rows'] = $this->users_model->get_list_record($first_name, $last_name, $email, $phone, $active);
        $this->data['total'] = $config['total_rows'];
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = $choice;       
        
        // pagination
        $page = ($this->input->get('page')) ? $this->input->get('page') : 1;
        $this->pagination->initialize($config);        
        $this->data['pagination'] = $this->pagination->create_links();
        $offset = ($page  == 1) ? 0 : ($page * $config['per_page']) - $config['per_page'];
        // record number for each page
        $this->data['record_number'] = ($config["per_page"] * ($page - 1) ) + 1;
        // get list data

        $this->data['items'] = $this->users_model->get_list_where($config["per_page"], $offset, $first_name, $last_name, $email, $phone, $active);
        $this->render('admin/users/index_view');
    }

    public function create()
    {
        $this->form_validation->set_rules('username','Username','trim|required|regex_match[/^[a-z A-Z0-9%._\-@]+$/]|min_length[2]|max_length[30]');
        $this->form_validation->set_rules('first_name','First name','trim|required');
        $this->form_validation->set_rules('last_name','Last name','trim|required');
        $this->form_validation->set_rules('phone','Phone','trim|required');
        $this->form_validation->set_rules('address','Address','trim');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('password','Password','min_length[6]|required');
        $this->form_validation->set_rules('password_confirm','Password confirmation','matches[password]|required');

        if($this->form_validation->run()===FALSE){
            $this->render('admin/users/create_view');
        }else{
            $email_check = $this->ion_auth->email_check($this->input->post('email'));
            $input['where'] = array('username' => $this->input->post('username'));
            $username_check = $this->users_model->get_list($input);
            $phone_check = $this->users_model->check_exists(array('phone' => $this->input->post('phone')));
            if(count($username_check) > 0){
                $this->postal->add('Username already exists !','error');
                $this->render('admin/users/create_view');
            }else if($email_check){
                $this->postal->add('Email already exists !','error');                
                $this->render('admin/users/create_view');
            }else if($phone_check){
                $this->postal->add('Phone already exists !','error');                
                $this->render('admin/users/create_view');
            }else{
                $username = $this->input->post('username');
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $group_ids = $this->input->post('groups');

                $additional_data    = array(
                    'first_name'    => $this->input->post('first_name'),
                    'last_name'     => $this->input->post('last_name'),
                    'birth_day'     => $this->input->post('birth_day'),
                    'address'       => $this->input->post('address'),
                    'phone'         => $this->input->post('phone'),
                    'profile'         => $this->input->post('profile'),
                    'modified_date' =>date('Y-m-d H:i:s')
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
        
        $this->form_validation->set_rules('first_name','First name','trim|required');
        $this->form_validation->set_rules('last_name','Last name','trim|required');
        $this->form_validation->set_rules('phone','Phone','trim|required');
        $this->form_validation->set_rules('address','Address','trim');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('password','Password','min_length[6]');
        $this->form_validation->set_rules('password_confirm','Password confirmation','matches[password]');
        $this->form_validation->set_rules('user_id','User ID','trim|integer|required');

        if($this->form_validation->run() === FALSE){
            if($user = $this->ion_auth->user((int) $user_id)->row()){
                $this->data['user'] = $user;
            }else{
                $this->postal->add('The user doesn\'t exist.','error');
                redirect('admin/users');
            }
            $this->render('admin/users/edit_view');
        }
        else
        {
            // email check
            $input_email['where'] = array('email' => $this->input->post('email'), 'id <>' =>$user_id);
            $email_check = $this->users_model->get_list($input_email);
            // phone check
            $input_phone['where'] = array('phone' => $this->input->post('phone'), 'id <>' =>$user_id);
            $phone_check = $this->users_model->get_list($input_phone);
            if(count($email_check) > 0 ){
                $this->postal->add('Email already exists !','error');
                if($user = $this->ion_auth->user((int) $user_id)->row())
                {
                    $this->data['user'] = $user;
                }
                $this->render('admin/users/edit_view');
            }else if(count($phone_check) > 0 ){
                $this->postal->add('Phone already exists !','error');
                if($user = $this->ion_auth->user((int) $user_id)->row())
                {
                    $this->data['user'] = $user;
                }
                $this->render('admin/users/edit_view');
            }else{
                $user_id = $this->input->post('user_id');
                $new_data           = array(
                    'email'         => $this->input->post('email'),
                    'first_name'    => $this->input->post('first_name'),
                    'last_name'     => $this->input->post('last_name'),
                    'birth_day'     => $this->input->post('birth_day'),
                    'address'       => $this->input->post('address'),
                    'phone'         => $this->input->post('phone'),
                    'profile'         => $this->input->post('profile'),
                    'modified_date' => date('Y-m-d H:i:s')
                    );
                if(strlen($this->input->post('password'))>=6) $new_data['password'] = $this->input->post('password');

                $this->ion_auth->update($user_id, $new_data);

                //Update the groups user belongs to
                $groups = $this->input->post('groups');
                if (isset($groups) && !empty($groups)){
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
    }

    public function delete($user_id = NULL, $user_name)
    {
        $this->load->model('files_model');
        if(is_null($user_id)){
            $this->postal->add('There\'s no user to delete','error');
        }else{
            $this->load->model('calendar_model');
            $input['where'] = array('user_name' => $user_name);
            // get total media file of this user
            $input_files['where'] = array('user_id' => $user_id);
            $total_media = $this->files_model->get_total($input_files);
            if(count($this->calendar_model->get_list($input)) >0){
                $this->postal->add('Delete User fail, please delete calendar of this user first !','error');
            }else if($total_media >0){
                $this->postal->add('Delete User fail, please delete media of this user first !','error');
            }else{                
                $this->ion_auth->delete_user($user_id);
                $this->postal->add($this->ion_auth->messages(),'success');
            }
            
        }
        redirect('admin/users');
    }

    public function lock($item_id, $status){
        $status = $status == 1 ? 0 : 1;
        $data = array('active' => $status);
        if(!$this->users_model->update($item_id, $data))
        {             
            $this->postal->add('Edited fail !','error');
        }else{ $this->postal->add('Edited successfully ','success'); }
        redirect('admin/users');
    }

    public function media($user_id)
    {   
        $input['where'] = array('id' => $user_id);
        $this->data['user'] = $this->users_model->get_row($input);
        $this->load->model('files_model');
        if($this->input->post('submit')){
            $name     = $this->input->post('name');
            $type     = $this->input->post('type');
            $this->load->helper(array('url', 'form', 'file'));
            $this->form_validation->set_rules('name','Description','trim|required');
            if($type == "audio"){
                if(empty($_FILES['audio_file']['name']))
                {
                    $this->form_validation->set_rules('audio_file','Audio file','required');
                }          
                
                if($this->form_validation->run() == FALSE){
                    $this->postal->add(form_error('audio_file',''),'error');
                    $this->postal->add(form_error('name',''),'error');
                }else{
                    $config['upload_path']          = './public/upload/media/';
                    $config['allowed_types']        = 'mp3|ogg';
                    $config['max_size']             = 20480;
                    
                    $this->load->library('upload', $config);
                    if($this->upload->do_upload('audio_file'))
                    {
                        $file_ppt = $this->upload->data();
                        $file_name = $file_ppt['file_name'];

                        $insert_data = array('name' => $name, 'link' => $file_name, 'user_id' => $user_id, 'type' => $type, 'created_date'=>date('Y-m-d H:i:s'));
                        if($this->files_model->create($insert_data)){             
                            $this->postal->add('Created successfully ','success');                    
                        }else{
                            $this->postal->add('Created fail because uploading fail','error');
                        }
                    }else{
                        $this->postal->add('Uploaded fail '.$this->upload->display_errors(),'error');
                    }
                }                
            }else{
                $this->form_validation->set_rules('video','Video','trim|required');
                if($this->form_validation->run() == FALSE){
                    $this->postal->add(form_error('video',''),'error');
                    $this->postal->add(form_error('name',''),'error');
                }else{
                   $video = $this->input->post('video');
                   $insert_data = array('name' => $name, 'link' => $video, 'user_id' => $user_id, 'type' => $type, 'created_date'=>date('Y-m-d H:i:s'));
                   if($this->files_model->create($insert_data)){             
                    $this->postal->add('Created successfully','success');                     
                }else{
                    $this->postal->add('Created fail','error');
                } 
            }
        }            
    }

    $input['where'] = array('user_id' => $user_id);
    $this->data['user_id'] = $user_id;
    $this->data['items'] = $this->files_model->get_list($input);
    $this->render('admin/users/media_view');
}

public function delete_media($id)
{
    $this->load->model('files_model');
            // get row from media id
    $input['where'] = array('id' => $id);
    $row = $this->files_model->get_row($input);

    if(is_null($id)){
        $this->postal->add('There\'s no media to delete','error');
    }else{
        if($row->type == "audio"){
            if(file_exists('./public/upload/media/'.$row->link)){
                if(!unlink('./public/upload/media/'.$row->link)){
                    $this->postal->add('Deleted file fail'.public_helper('upload/media/'.$row->link), 'error');
                    redirect('admin/users/media/'.$row->user_id);
                }
            }
        } 

        if(!$this->files_model->delete($id)){
            $this->postal->add('Deleted fail','error');
        }else{
            $this->postal->add('Deleted successfully','success');            
        }

    }
    redirect('admin/users/media/'.$row->user_id);
}
}