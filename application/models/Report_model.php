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
    public function getReportData($params)
    {
//        var_dump($params); 
    $this->db->select()->from('get_all_trips');
            $this->db->where($params);
         $array = array('id' => "sadsad", 'unit' => "asdsadewvfv");
         foreach ($params as $key => $value) {
         //   $this->db->where($key,$value);
             # code...
         }
         // var_dump($this->db->get()); 
        return $this->db->get()->result_array();

    }

    }
 