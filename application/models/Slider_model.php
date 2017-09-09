<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Slider_model extends MY_Model
{

    function __construct()
    {
        parent::__construct();
        // pct change
        //$this->table = 'slider';
        $this->table = 'banner';
        // end pct change
    }
}