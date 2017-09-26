<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicle_model extends CI_Model {

	

	public function get_vehicles()
	 {
		$this->db->select('*');
		$this->db->from('vehicle');
		$this->db->where('is_deleted',0);
		$result = $this->db->get()->result_array();
		return $result;

	 } 


//vehicles details bilal
	 public function vehicleDetails($id)
	 {
        
        $this->db->select('vehicle.*,vehicle.status as st,chambers.*');
	 	$this->db->from('vehicle');
	 	$this->db->join('chambers','vehicle.id=chambers.vehicle_id');
	 	$this->db->where('vehicle.id',$id);
	 	$this->db->where('vehicle.is_deleted',0);
	    return $query=$this->db->get()->row();
	   

	 }

//vehicles status details bilal
 public function vehiclestatusDetails($id)
	 { 	

	 	$this->db->select('vehiclestatus.*,vehiclestatus.status as st,
	 admin.first_name,admin.last_name,admin.first_name as first,admin.last_name as last');
	 	$this->db->from('vehiclestatus');
	 	$this->db->join('admin','vehiclestatus.createdBy=admin.id');
	 	$this->db->where('vehiclestatus.id', $id);
	 	$this->db->where('vehiclestatus.is_deleted', 0);
		$result = $this->db->get()->row();
		return $result;
	 	
	 }

	 //vehicles type details bilal
 public function vehiclestypeDetails($id)
	 { 	

	 	$this->db->select('vehicletype.*,
	 vehicletype.status as st, admin.first_name,admin.last_name,
	 admin.first_name as first,admin.last_name as last');
	 	$this->db->from('vehicletype');
	 	$this->db->join('admin','vehicletype.createdBy=admin.id');
	 	$this->db->where('vehicletype.id', $id);
	 	$this->db->where('vehicletype.is_deleted', 0);
		$result = $this->db->get()->row();
		return $result;
	 	
	 }




	 public function get_vehicleType()
	 {
	 	$this->db->select('*');
	 	$this->db->from('vehicletype');
	 	$this->db->where('is_deleted = ', 0);
		$result = $this->db->get()->result_array();
		return $result;
	 }
	 public function get_vehicle_by_id($id)
	 { 	

	 	$this->db->select('*');
	 	$this->db->from('vehicle');
	 	$this->db->where('id', $id);
	 	$this->db->where('is_deleted = ', 0);
		$result = $this->db->get()->result_array();
		return $result;
	 	
	 }




    public function save($table, $data) {
        $this->db->insert($table, $data);
        if ($this->db->insert_id() > 0)
            return $this->db->insert_id();
        else
            return FALSE;
    }

    public function delete($id)
    {
    	$this->db->where('id',$id)->update('vehicle',array('is_deleted'=>1));
    	redirect('Vehicle/show_vehicle');
    }





}

/* End of file vehicle_model.php */
/* Location: ./application/models/vehicle_model.php */