<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Search_model extends MY_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function get_list_search($input, $limit, $offset){
    	$rows = $this->db->query('(select id, title name, "tin-tuc" slug from news where title like "%'.$input.'%" limit '.$limit.' offset '.$offset.') UNION (select id, name name, "english" slug from category where name like "%'.$input.'%" and level<>-1 and (description <> "" and description is not null) limit '.$limit.' offset '.$offset.')');
        return $rows->result();
    }

    public function get_total_list_search($input){
        $rows = $this->db->query('select title name from news where title like "%'.$input.'%"');
        return $rows->num_rows();;
    }
}