<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = 'calendar';
    }

    public function get_list_canlendar_user_course($email, $phone, $course_id, $start_date){
    	$rows = $this->db->query('select distinct u.last_name, u.first_name, u.email, MIN(DATE(c.start_date)) start_date, u.phone, u.username user_name, s.name course_name, c.course_id from calendar c, users u, course s  where c.user_name = u.username and c.course_id = s.id and ("'.$course_id.'" = "" or c.course_id = "'.$course_id.'") and email like "'.$email.'%" and phone like "'.$phone.'%" and  CAST(c.start_date AS DATE) >= "'.$start_date.'" GROUP BY u.username,c.course_id ');
        return $rows->result();
    }

    public function delete_calendar_course_user($course_id, $user_name){
        $this->db->where('course_id' , $course_id);
        $this->db->where('user_name', $user_name);
    	if($this->db->delete($this->table))      
            return TRUE;
        else 
            return FALSE;
    }
    
}