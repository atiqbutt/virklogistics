<?php

if (!defined('BASEPATH'))
    exit('No direct script  allow');

class Report_model extends CI_Model {
           
     public function __construct()
    {
        parent::__construct();
    }


    public function get_all_trip()
    {

        return $this->db->select()->from('get_all_trips')->get()->result_array();

    }

    }
 