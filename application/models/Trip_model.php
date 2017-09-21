<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trip_model extends CI_Model {

	
   function GetAllTrips() {
      $this->db->select('t.id as id,t.type as type,p.heading as productname,t.meter_reading as meter_reading,t.filling_date as filling_date,tp.product_gravity as gravity,tp.carriage_commission as carriage,tp.withholding_tax as withholdingtax,tp.product_temperature as temperature,tp.freight_rate as freight_rate,tp.product_quantity as quantity,tp.servicecharges as servicecharges,tp.remaining_commission as remaining_commission,t.status as status,v.registerationno as vehicleregisterationno,v.chassisno as chassisno,v.heading as vehiclename,v.engineno as vehicleengineno,lt.name as source,ltd.name as destination,com.name as comname,con.name as conname')
        ->from('tripmanagement as t')
                ->join('tripproduct as tp','tp.trip_id=t.id','left')
               ->join('vehicle as v','t.vehicle_id=v.id')
			   ->join('product as p','tp.product_id=p.id')
			   ->join('locationtype as lt','t.source=lt.id')
			   ->join('locationtype as ltd','tp.destination=ltd.id')
			   ->join('customerinformation as com','t.company_id=com.id')
			   ->join('contractorinformation as con','t.contractor_id=con.id')
        ->where(array('t.is_deleted'=>0))
       ->order_by("id","DESC","GROUP BY t.id"); 
	  $this->db->group_by('t.id');
        $w=$this->db->get();
        if ($w->num_rows() > 0){
        return $w->result_array();}
        else {return FALSE; }
    }
function GetSpecificTrip($id) {
      $this->db->select('t.id as id,t.type as type,p.heading as productname,t.meter_reading as meter_reading,t.filling_date as filling_date,tp.product_gravity as gravity,tp.carriage_commission as carriage,tp.withholding_tax as withholdingtax,tp.product_temperature as temperature,tp.freight_rate as freight_rate,tp.product_quantity as quantity,tp.servicecharges as servicecharges,tp.remaining_commission as remaining_commission,t.status as status,v.registerationno as vehicleregisterationno,v.chassisno as chassisno,v.heading as vehiclename,v.engineno as vehicleengineno,lt.name as source,com.name as comname,con.name as conname')
        ->from('tripmanagement as t')
                ->join('tripproduct as tp','tp.trip_id=t.id','left')
               ->join('vehicle as v','t.vehicle_id=v.id')
			   ->join('product as p','tp.product_id=p.id')
			   ->join('locationtype as lt','t.source=lt.id')
			   ->join('customerinformation as com','t.company_id=com.id')
			   ->join('contractorinformation as con','t.contractor_id=con.id')
        ->where(array('t.is_deleted'=>0,'t.id'=>$id));
     //  ->order_by("id","DESC");
       $w=$this->db->get();
        if ($w->num_rows() > 0){
        return $w->result_array();}
        else {return FALSE; }
    }
 function GetAllTripsGeneralShort() {
  $this->db->select('t.id as id,t.type as type,p.heading as productname,t.meter_reading as meter_reading,t.filling_date as filling_date,tp.product_gravity as gravity,tp.carriage_commission as carriage,tp.withholding_tax as withholdingtax,tp.product_temperature as temperature,tp.freight_rate as freight_rate,tp.product_quantity as quantity,tp.servicecharges as servicecharges,tp.remaining_commission as remaining_commission,t.status as status,v.registerationno as vehicleregisterationno,v.chassisno as chassisno,v.heading as vehiclename,v.engineno as vehicleengineno,lt.name as source,com.name as comname,con.name as conname')
        ->from('tripmanagement as t')
                ->join('tripproduct as tp','tp.trip_id=t.id','left')
               ->join('vehicle as v','t.vehicle_id=v.id')
			   ->join('product as p','tp.product_id=p.id')
			   ->join('locationtype as lt','t.source=lt.id')
			   ->join('customerinformation as com','t.company_id=com.id')
			   ->join('contractorinformation as con','t.contractor_id=con.id')
        ->where(array('t.is_deleted'=>0,'t.type'=>"General-Short"));
     //  ->order_by("id","DESC");
        $w=$this->db->get();
        if ($w->num_rows() > 0){
        return $w->result_array();}
        else {return FALSE; }
    }
 function GetAllTripsGeneralLong() {
  $this->db->select('t.id as id,t.type as type,p.heading as productname,t.meter_reading as meter_reading,t.filling_date as filling_date,tp.product_gravity as gravity,tp.carriage_commission as carriage,tp.withholding_tax as withholdingtax,tp.product_temperature as temperature,tp.freight_rate as freight_rate,tp.product_quantity as quantity,tp.servicecharges as servicecharges,tp.remaining_commission as remaining_commission,t.status as status,v.registerationno as vehicleregisterationno,v.chassisno as chassisno,v.heading as vehiclename,v.engineno as vehicleengineno,lt.name as source,com.name as comname,con.name as conname')
        ->from('tripmanagement as t')
                ->join('tripproduct as tp','tp.trip_id=t.id','left')
               ->join('vehicle as v','t.vehicle_id=v.id')
			   ->join('product as p','tp.product_id=p.id')
			   ->join('locationtype as lt','t.source=lt.id')
			   ->join('customerinformation as com','t.company_id=com.id')
			   ->join('contractorinformation as con','t.contractor_id=con.id')
        ->where(array('t.is_deleted'=>0,'t.type'=>"General-Long"));
     //  ->order_by("id","DESC");
        $w=$this->db->get();
        if ($w->num_rows() > 0){
        return $w->result_array();}
        else {return FALSE; }
    }
 function GetAllTripsSelfLong() {
     $this->db->select('t.id as id,t.type as type,p.heading as productname,t.meter_reading as meter_reading,t.filling_date as filling_date,tp.product_gravity as gravity,tp.carriage_commission as carriage,tp.withholding_tax as withholdingtax,tp.product_temperature as temperature,tp.freight_rate as freight_rate,tp.product_quantity as quantity,tp.servicecharges as servicecharges,tp.remaining_commission as remaining_commission,t.status as status,v.registerationno as vehicleregisterationno,v.chassisno as chassisno,v.heading as vehiclename,v.engineno as vehicleengineno,lt.name as source,com.name as comname,con.name as conname')
        ->from('tripmanagement as t')
                ->join('tripproduct as tp','tp.trip_id=t.id','left')
               ->join('vehicle as v','t.vehicle_id=v.id')
			   ->join('product as p','tp.product_id=p.id')
			   ->join('locationtype as lt','t.source=lt.id')
			   ->join('customerinformation as com','t.company_id=com.id')
			   ->join('contractorinformation as con','t.contractor_id=con.id')
        ->where(array('t.is_deleted'=>0,'t.type'=>"Self-Long"));
     //  ->order_by("id","DESC");
        $w=$this->db->get();
        if ($w->num_rows() > 0){
        return $w->result_array();}
        else {return FALSE; }
    }
 function GetAllTripsSelfShort() {
  $this->db->select('t.id as id,t.type as type,p.heading as productname,t.meter_reading as meter_reading,t.filling_date as filling_date,tp.product_gravity as gravity,tp.carriage_commission as carriage,tp.withholding_tax as withholdingtax,tp.product_temperature as temperature,tp.freight_rate as freight_rate,tp.product_quantity as quantity,tp.servicecharges as servicecharges,tp.remaining_commission as remaining_commission,t.status as status,v.registerationno as vehicleregisterationno,v.chassisno as chassisno,v.heading as vehiclename,v.engineno as vehicleengineno,lt.name as source,com.name as comname,con.name as conname')
        ->from('tripmanagement as t')
                ->join('tripproduct as tp','tp.trip_id=t.id','left')
               ->join('vehicle as v','t.vehicle_id=v.id')
			   ->join('product as p','tp.product_id=p.id')
			   ->join('locationtype as lt','t.source=lt.id')
			   ->join('customerinformation as com','t.company_id=com.id')
			   ->join('contractorinformation as con','t.contractor_id=con.id')
        ->where(array('t.is_deleted'=>0,'t.type'=>"Self-Short"));
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

