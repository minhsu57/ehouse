<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page_content_model extends MY_Model
{

    function __construct()
    {
        parent::__construct();
        $this->table = 'page_content';
    }
}