<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trip_model extends CI_Model {

	
function GetAllTrips($type="") {
    $w;
    if($type==""){
      $this->db->select('*')->from('get_all_trips');
      $w=$this->db->get();
      }
      else{
        $this->db->select()
        ->from('get_all_trips')
        ->where('type',$type);
        $w=$this->db->get();
/*      var_dump($w->result_array());die();*/
      }
       // var_dump ($w->result_array());die;
        if ($w->num_rows() > 0){

         // die();
        return $w->result_array();}
        else {return FALSE; }
    }
function GetSpecificTrip($id) {
      $this->db->select()
        ->from('get_all_trips')
        ->where('id',$id);
     //  ->order_by("id","DESC");
       $w=$this->db->get();
        if ($w->num_rows() > 0){
        return $w->result_array();}
        else {return FALSE; }
    }
/*function GetAllTripsGeneralShort() {
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
    }	*/


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


    public function GetTripHelper($id)
    {
        $this->db->select('member_id')->from('trip_members')->where('trip_id', $id);
        $query=$this->db->get()->result_array();
      
        $member_id = array_column($query, 'member_id');


        $name = $this->db->select('name')->from('helperinformation')->where_in('id', $member_id);

        $q=$this->db->get()->result_array()[0];
        return $q;
    
    }


    public function GetTripProducts($id)
    {
       $this->db->select('*')->from('tripproduct')->where('trip_id', $id);
        $query=$this->db->get()->result_array();
        return $query;
      
    }



}

/* End of file Trip_model.php */
/* Location: ./application/models/Trip_model.php */

