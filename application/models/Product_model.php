<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

	

	

//product details bilal
 public function productDetails($id)
	 { 	

	 	//SELECT `producttype`.`name` as `na`, `product`.*, `admin`.`first_name` as `first`, `admin`.`last_name` as `last` FROM `product` JOIN `admin` ON `product`.`createdBy`=`admin`.`id` JOIN `producttype` ON product.id=producttype.id

	 	$this->db->select('`producttype`.`name` as `na`,unit.name as n,`product`.*,product.status as st, `admin`.`first_name` as `first`, `admin`.`last_name` as `last`');
	 	$this->db->from('product');
	 	$this->db->join('admin','product.createdBy=admin.id');
	 	$this->db->join('producttype','product.id=producttype.id');
	 	$this->db->join('unit','product.unit_id=unit.id');
	 	$this->db->where('product.id', $id);
	 	$this->db->where('product.is_deleted',0);
		$result = $this->db->get()->row();
		return $result;
	 	
	 }


public function unitDetails($id)
	 {
		$this->db->select('unit.*,unit.status as st,admin.first_name as first,admin.last_name as last');
		$this->db->from('unit');
	    $this->db->join('admin','unit.createdBy=admin.id');
	    $this->db->where('unit.id', $id);
		$this->db->where('is_deleted',0);
		$result = $this->db->get()->row();
		return $result;

	 } 



public function producttypeDetails($id)
	 {
		$this->db->select('producttype.*,producttype.status as st,admin.first_name as first,admin.last_name as last');
		$this->db->from('producttype');
	    $this->db->join('admin','producttype.createdBy=admin.id');
	    $this->db->where('producttype.id', $id);
		$this->db->where('is_deleted',0);
		$result = $this->db->get()->row();
		return $result;

	 } 






}
