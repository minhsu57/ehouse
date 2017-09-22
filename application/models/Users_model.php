<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends MY_Model
{

    function __construct()
    {
        parent::__construct();
        $this->table = 'users';
    }

    public function get_list_where($limit, $offset, $first_name, $last_name, $email, $phone, $active){
    	$rows = $this->db->query('select * from users where first_name like "'.$first_name.'%" and last_name like "'.$last_name.'%" and email like "'.$email.'%" and phone like "'.$phone.'%" and active like "'.$active.'%"  order by modified_date desc limit '.$limit.' offset '.$offset);
        return $rows->result();
    }
}