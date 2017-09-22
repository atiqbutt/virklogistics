<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trip_model extends CI_Model {

	
   function GetAllTrips() {
      $this->db->select('*')->from('get_all_trips');
        $w=$this->db->get();
        if ($w->num_rows() > 0){
        return $w->result_array();}
        else {return FALSE; }
    }
function GetSpecificTrip($id) {
      $this->db->select()
        ->from('get_all_trips')
        ->where('t.id',$id);
     //  ->order_by("id","DESC");
       $w=$this->db->get();
        if ($w->num_rows() > 0){
        return $w->result_array();}
        else {return FALSE; }
    }
 function GetAllTripsGeneralShort() {
  $this->db->select()
        ->from('get_all_trips')
        ->where('type',"General-Short");
     //  ->order_by("id","DESC");
        $w=$this->db->get();
        if ($w->num_rows() > 0){
        return $w->result_array();}
        else {return FALSE; }
    }
 function GetAllTripsGeneralLong() {
  $this->db->select()
        ->from('get_all_trips')
        ->where('type',"General-Long");
     //  ->order_by("id","DESC");
        $w=$this->db->get();
        if ($w->num_rows() > 0){
        return $w->result_array();}
        else {return FALSE; }
    }
 function GetAllTripsSelfLong() {
     $this->db->select()
        ->from('get_all_trips')
        ->where('type',"Self-Long");
     //  ->order_by("id","DESC");
        $w=$this->db->get();
        if ($w->num_rows() > 0){
        return $w->result_array();}
        else {return FALSE; }
    }
 function GetAllTripsSelfShort() {
  $this->db->select()
        ->from('get_all_trips')
        ->where('type',"Self-Short");
     //  ->order_by("id","DESC");
        $w=$this->db->get();
        if ($w->num_rows() > 0){
        return $w->result_array();}
        else {return FALSE; }
    }	



  public function getAllRecords($table,$where,$by,$order) {
        $this->db->select()->from($table)->where($where)->order_by($by,$order);
        $query=$this->db->get();
        if ($query->num_rows() > 0)
            return $query->result_array();
        else
            return FALSE;
    }


    public function save($table, $data) {
        $this->db->insert($table, $data);
        if ($this->db->insert_id() > 0)
            return $this->db->insert_id();
        else
            return FALSE;
    }



}

/* End of file Trip_model.php */
/* Location: ./application/models/Trip_model.php */

