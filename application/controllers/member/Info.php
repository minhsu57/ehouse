<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends Admin_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->library('postal');
        $this->load->helper('url');
        if (!$this->ion_auth->logged_in())
        {
            redirect('/login', 'refresh');
        }
        $this->current_user = $this->ion_auth->user()->row();
        $this->user_id = $this->current_user->id;
        $this->data['current_user'] = $this->current_user;
        $this->data['current_user_menu'] = '';
        $this->load->model('calendar_model');
        $this->load->model('course_model');
    }

    public function policy()
    {
        $this->load->model('page_content_model');
        $input['where'] = array('id' => 'policy');
        $this->data['item'] = $this->page_content_model->get_row($input);
        $this->load->view('member/index_view', $this->data);
    }

    public function profile()
    {        
        $this->data['item'] = $this->current_user;
        $this->load->view('member/profile_view', $this->data);
    }

    public function attendance(){
        // get data of calendar model
        $this->data['items'] = $this->calendar_model->get_list_canlendar_user($this->current_user->username);
        $this->load->view('member/attendance_view', $this->data);
    }

    public function calendar(){
        $this->data['user_name'] = $this->current_user->username;
        $this->data['full_name'] = $this->current_user->last_name.' '.$this->current_user->first_name;
        $this->data['course_id'] = $this->input->get('course_id');
        // get data of course table
        $input['where'] = array('id' => $this->data['course_id']);
        $this->data['course'] = $this->course_model->get_row($input);
        // get days spent
        $input['where'] = array('user_name' => $this->current_user->username, 'course_id' => $this->data['course_id'], 'color' => '#3a87ad');
        $this->data['days_spent'] = $this->calendar_model->get_total($input);
        // days remaining
        $this->data['days_remaining'] = $this->data['course']->total_day - $this->data['days_spent'];
        // get data of calendar model
        $this->load->view('member/calendar_view', $this->data);
    }

    public function process(){
        $type = $this->input->post('type');
        if($type == 'fetch')
        {
            $events = array();
            $user_name = $this->input->post('user_name');
            $course_id = $this->input->post('course_id');
            $input['where'] = array('user_name' => $user_name, 'course_id' => $course_id);
            $calendar = $this->calendar_model->get_list($input);
            foreach ($calendar as $fetch) {
                $e = array();
                $e['id'] = $fetch->id;
                $e['title'] = $fetch->title;
                $e['start'] = $fetch->start_date;
                $e['end'] = $fetch->end_date;
                $e['color'] = $fetch->color;

                $allday = ($fetch->all_day == "true") ? true : false;
                $e['allDay'] = $allday;

                array_push($events, $e);
            }            
            echo json_encode($events);
        }
    }

    public function document(){
        $this->load->model('files_model');
        $input['where'] = array('user_id' => $this->current_user->id);
        $this->data['items'] = $this->files_model->get_list($input);
        $this->load->view('member/document_view', $this->data);
    }

}