<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends Admin_Controller
{

    function __construct()
    {
        parent::__construct();
        if(!$this->ion_auth->in_group('admin'))
        {
            $this->postal->add('You are not allowed to visit the Calendar page','error');
            redirect('admin');
        }
        $this->load->helper(array('url'));
        $this->load->model('calendar_model');
        $this->load->model('users_model');
        $this->load->model('course_model');
        $this->load->library('Ajax_pagination');
        $this->perPage = 2;
    }

    public function index()
    {
        //total rows count
        // $totalRec = $this->calendar_model->get_total();
        // //pagination configuration
        // $config['target']      = '#postList';
        // $config['base_url']    = base_url().'/admin/calendar';
        // $config['total_rows']  = $totalRec;
        // $config['per_page']    = $this->perPage;
        // $config['link_func']   = 'searchFilter';
        // $this->ajax_pagination->initialize($config);
        $email = $this->input->get('email');
        $phone = $this->input->get('phone');
        $course_id = $this->input->get('course_id');
        $start_date = $this->input->get('start_date');
        $start_date = strtotime($start_date);
        $start_date = date( 'Y-m-d', $start_date );
        $input['where'] = array('active' => 1);
        // get data of user model
        $this->data['users'] = $this->users_model->get_list($input);
        // get data of course model

        $this->data['courses'] = $this->course_model->get_list($input);
        // get data of calendar model
        $this->data['items'] = $this->calendar_model->get_list_canlendar_user_course($email, $phone, $course_id, $start_date);
        $this->render('admin/calendar/index_view');
    }

    public function update()
    {
        $this->data['user_name'] = $this->input->get('user_name');
        $this->data['course_id'] = $this->input->get('course_id');
        // get data of course table
        $input['where'] = array('id' => $this->data['course_id']);
        $this->data['course'] = $this->course_model->get_row($input);
        // get data of user table
        $input['where'] = array('username' => $this->data['user_name']);
        $this->data['user'] = $this->users_model->get_row($input);
        $this->render('admin/calendar/edit_view');
    }

    public function process()
    {
        $type = $this->input->post('type');

        if($type == 'new')
        {
            $startdate = $this->input->post('startdate').'+'.$this->input->post('zone');
            $title = $this->input->post('title');
            $color = $this->input->post('color');
            $user_name = $this->input->post('user_name');
            $course_id = $this->input->post('course_id');
            $update_data = array('title' => $title, 'start_date' => $startdate, 'end_date' => $startdate, 'all_day' => false, 'color' => $color, 'user_name' => $user_name, 'course_id' => $course_id);
            if($this->calendar_model->create($update_data))
            {   
                $lastid = $this->db->insert_id();
                echo json_encode(array('status'=>'success', 'eventid'=>$lastid));
            }else{
                echo json_encode(array('status'=>'error', 'responseText'=>'Error new event'));
            }
        }

        if($type == 'changetitle')
        {
            $eventid = $this->input->post('eventid');
            $title = $this->input->post('title');
            $update_data = array('title' => $title);
            if($this->calendar_model->update($eventid, $update_data))
            {   
                echo json_encode(array('status'=>'success'));
            }else{
                echo json_encode(array('status'=>'error', 'responseText'=>'Error update title'));
            }
        }

        if($type == 'resetdate')
        {
            $title = $this->input->post('title');
            $startdate = $this->input->post('start');
            $enddate = $this->input->post('end');
            $eventid = $this->input->post('eventid');
            $update_data = array('title' => $title, 'start_date' => $startdate, 'end_date' => $enddate);
            if($this->calendar_model->update($eventid, $update_data))
            {   
                echo json_encode(array('status'=>'success'));
            }else{
                echo json_encode(array('status'=>'error', 'responseText'=>'Error reset date'));
            }
        }

        if($type == 'remove')
        {
            $eventid = $this->input->post('eventid');
            if($this->calendar_model->delete($eventid))
            {   
                echo json_encode(array('status'=>'success'));
            }else{
                echo json_encode(array('status'=>'error', 'responseText'=>'Error remove event'));
            }
        }

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

    public function delete($course_id, $user_name){        
        if(!$this->calendar_model->delete_calendar_course_user($course_id, $user_name))
        {
            $this->postal->add("Calendar doesn't exist",'error');
            redirect('admin/Calendar');
        }else{
            $this->postal->add('Deleted calendar successfully','success');            
        }
        redirect('admin/Calendar');
    }
}