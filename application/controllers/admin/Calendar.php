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
    }

    public function index()
    {
        $this->data['items'] = $this->calendar_model->get_list();
        $this->render('admin/calendar/index_view');
    }

    public function update()
    {
        $user_name = $this->input->get('user_name');
        $this->data['user_name'] = $user_name;
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
            $update_data = array('title' => $title, 'start_date' => $startdate, 'end_date' => $startdate, 'all_day' => false, 'color' => $color, 'user_name' => $user_name);
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
            $input['where'] = array('user_name' => $user_name);
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
}