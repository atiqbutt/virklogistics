<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicle extends CI_Controller {

	
	public function __construct()
	{
	parent::__construct();
	$this->load->model('vehicle_model');
	$this->load->model('generic_model');
	$this->load->library('form_validation');
	$this->load->library('image_lib');
    $this->load->model('user_model');
    $this->load->model('load_model');
    $this->user_model->check_login("admin");
    $this->userInfo = $this->user_model->userInfo("first_name,last_name");
	}


	public function show_vehicle()
	{
	$data['menu'] = $this->load_model->menu();
    $data['base_url'] = base_url();
    $data['userInfo'] = $this->userInfo; 
	$data['vehicles']=$this->vehicle_model->get_vehicles();	
	$data['page'] = "Vehicle/show";
	$this->load->view('Template/main', $data);
	}


	public function add_vehicle()
	{       
	$data['base_url'] = base_url();
    $data['userInfo'] = $this->userInfo; 
    $data['menu'] = $this->load_model->menu();	
	$data['vehicletype'] = $this->vehicle_model->get_vehicleType();
	$data['page'] = "Vehicle/add_vehicle";
	$this->load->view('Template/main', $data);	
	}


    public function save_vehicle()
     {


		if ($this->input->post()) {
					
		    $data["registerationno"] = $this->input->post('registerationno');
	            $data["vehicle_type"] = $this->input->post('vehicle_type');
	            $data["chassisno"] = $this->input->post('chassisno');
	            $data["engineno"] = $this->input->post('engineno');
	            $data["numberofchamber1"] = $this->input->post('numberofchamber');
	            $data["totalfuelcapacity"] = $this->input->post('totalfuelcapacity');
	            $data["color"] = $this->input->post('color');
	            $data["company"] = $this->input->post('company');
	            $data["model"] = $this->input->post('model');
	            $data["vehicleimage"]=$this->do_upload();
	            $data["scanimage"]=$this->do_upload2();
	            $data["createdAt"] = date("Y-m-d h:i:sa");
	            //$data["createdBy"] = $this->session->userdata('dekho_userId');

		   $vehicle_id = $this->vehicle_model->save('vehicle', $data);
				
		   $c=$this->input->post();

		   for ($i = 0; $i < count($c['numberofchamber']); $i++) {
				$data1 = array(
					'numberofchamber'=>$c['numberofchamber'][$i],
					'capacityofchamber'=>$c['totalfuelcapacity'][$i],
				); 
					
	            $data1['vehicle_id'] = $vehicle_id;
	            $data1["createdAt"] = date("Y-m-d h:i:sa");
	            //$data1["createdBy"] = $this->session->userdata('dekho_userId');
	            $this->vehicle_model->save("chambers", $data1); 

	          } 

	            $this->session->set_flashdata('msg', "Information has been added successfully");
		    redirect('Vehicle/show_vehicle');

	        }else{

	            $this->session->set_flashdata('error', "There are some errors. Please check and fill again");
	            redirect('Vehicle/show_vehicle');

	        }

	
        }
	
      
        public function edit_vehicle_show($id)
    	{
    		$data['base_url'] = base_url();
            $data['userInfo'] = $this->userInfo; 
            $data['menu'] = $this->load_model->menu();
    		$data['vehicle']=$this->vehicle_model->get_vehicle_by_id($id);
    	    //    $data['vehicletype'] = $this->vehicle_model->get_vehicleType();
    	
    		$data['page'] = "Vehicle/edit_vehicle";
    		$this->load->view('Template/main', $data);

    		
    	}


        public function edit_vehicle_save()
         {


		if ($this->input->post()) {
					
		    $data["registerationno"] = $this->input->post('registerationno');
	            $data["vehicle_type"] = $this->input->post('vehicle_type');
	            $data["chassisno"] = $this->input->post('chassisno');
	            $data["engineno"] = $this->input->post('engineno');
	            $data["numberofchamber1"] = $this->input->post('numberofchamber');
	            $data["totalfuelcapacity"] = $this->input->post('totalfuelcapacity');
	            $data["color"] = $this->input->post('color');
	            $data["company"] = $this->input->post('company');
	            $data["model"] = $this->input->post('model');
	            $data["vehicleimage"]=$this->do_upload();
	            $data["scanimage"]=$this->do_upload2();
	            $data["createdAt"] = date("Y-m-d h:i:sa");
	            //$data["createdBy"] = $this->session->userdata('dekho_userId');

		   $vehicle_id = $this->vehicle_model->save('vehicle', $data);
				
		   $c=$this->input->post();

		   for ($i = 0; $i < count($c['numberofchamber']); $i++) {
				$data1 = array(
					'numberofchamber'=>$c['numberofchamber'][$i],
					'capacityofchamber'=>$c['totalfuelcapacity'][$i],
				); 
					
	            $data1['vehicle_id'] = $vehicle_id;
	            $data1["createdAt"] = date("Y-m-d h:i:sa");
	            //$data1["createdBy"] = $this->session->userdata('dekho_userId');
	            $this->vehicle_model->save("chambers", $data1); 

	          } 

	            $this->session->set_flashdata('msg', "Information has been Updated successfully");
		    redirect('Vehicle/show_vehicle');

	        }else{

	            $this->session->set_flashdata('error', "There are some errors. Please check and fill again");
	            redirect('Vehicle/show_vehicle');

	        }

	
        }
	



    	public function do_upload() {
    	        $type = explode('.', $_FILES["vehicleimage"]["name"]);
    	        $type = $type[count($type) - 1];
    	        $url = "./Uploads/" . uniqid(rand()) . '.' . $type;

    	        if (in_array($type, array("png", "jpg", "jpeg", "gif", "PNG")))
    	            if (move_uploaded_file($_FILES["vehicleimage"]["tmp_name"], $url)) {
    	                $config = array('image_library' => "gd2",
    	                    'source_image' => $url,
    	                    'maintain_ratio' => true,
    	                );
    	                $this->image_lib->initialize($config);
    	                if ($this->image_lib->resize()) {
    	                    return $url;
    	                }
    	            }
    	        return null;
    	    }

        public function do_upload2() {
            $type = explode('.', $_FILES["scanimage"]["name"]);
            $type = $type[count($type) - 1];
            $url = "./Uploads/" . uniqid(rand()) . '.' . $type;

            if (in_array($type, array("png", "jpg", "jpeg", "gif", "PNG")))
                if (move_uploaded_file($_FILES["scanimage"]["tmp_name"], $url)) {
                    $config = array('image_library' => "gd2",
                        'source_image' => $url,
                        'maintain_ratio' => true,
                    );
                    $this->image_lib->initialize($config);
                    if ($this->image_lib->resize()) {
                        return $url;
                    }
                }
            return null;
        }


	
    	public function Vehicle_delete()
    	{

            $id=$this->uri->segment(3);
            $done=$this->db->where('id',$id)->update('vehicle',array('is_deleted'=>1));
            if($done)
            {
            $this->session->set_flashdata('msg', 'vechicles is Deleted!');
            redirect('Vehicle/show_vehicle');
            }
            else 
            {
            $this->session->set_flashdata('msg',' Error: vechicles is not Deleted');
            redirect('Vehicle/show_vehicle');
            }


	   }


       public function get_vehicle_by_id($id)
       {
        $vehicle = $this->db->query("SELECT * FROM `vehicle` WHERE `id` = $id")->row_array();
        header("Content-Type: application/json");
        echo json_encode($vehicle);
       }


       public function get_productprice_by_id($id)
       {
        $productprice = $this->db->query("SELECT * FROM `product` WHERE `id` = $id")->row_array();
        header("Content-Type: application/json");
        echo json_encode($productprice);
       }



//==============================Vehicle_Status work starts from here===============
     public function Vehicle_Status_list()
     {
     $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo; 
        $data["vehiclestatus"]=$this->generic_model->getAllRecords("vehiclestatus",array("is_deleted"=>0),"id","DESC");
        $data["page"]='Vehicle/list_vechicles';
        $this->load->view('Template/main',$data);
     }

     public function List_delete()
        {
        $id=$this->uri->segment(3);
        $done=$this->db->where('id',$id)->update('vehiclestatus',array('is_deleted'=>1));
        if($done)
        {
        $this->session->set_flashdata('msg', 'vechicles is Deleted!');
        redirect('Vehicle/Vehicle_Status_list');
        }
        else 
        {
        $this->session->set_flashdata('msg',' Error: vechicles is not Deleted');
        redirect('Vehicle/Vehicle_Status_list');
        }

        }   
        public function List_states()
        {
        $id=$this->uri->segment(3);
        $done=$this->db->where('id',$id)->update('vehiclestatus',array('status'=>1));
        if($done)
        {
        $this->session->set_flashdata('msg', 'vechicles is DeActive!');
        redirect('Vehicle/Vehicle_Status_list');
        }
        else 
        {
        $this->session->set_flashdata('msg',' Error: vechicles is not DeActive');
        redirect('Vehicle/Vehicle_Status_list');
        }

        }  
        public function List_active()
        {
        $id=$this->uri->segment(3);
        $done=$this->db->where('id',$id)->update('vehiclestatus',array('status'=>0));
        if($done)
        {
        $this->session->set_flashdata('msg', 'vechicles is Active!');
        redirect('Vehicle/Vehicle_Status_list');
        }
        else 
        {
        $this->session->set_flashdata('msg',' Error: vechicles is not Active');
        redirect('Vehicle/Vehicle_Status_list');
        }

        } 

        public function add_Vehicle_states()
        {
        $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo; 
        $data["page"]='Vehicle/add_list_vechicles';
        $this->load->view('Template/main',$data);

        }  

         public function Vehicle_status_save()
        {
        if ($_POST )
        {

        $this->load->model('generic_model');
        $data["heading"]=$this->input->post('name');
        $data["createdAt"]=date("Y-m-d h:i:sa");
        // $data["createdBy"]=$this->session->userdata('dekho_userId');

        $this->db->insert('vehiclestatus', $data);
        // $this->generic_model->insert("producttype",$data,array("id"=>$id));


        $this->session->set_flashdata('msg', "Add vehicle status, Information has been added successfully");
        redirect('Vehicle/add_Vehicle_states');

        }

        else{
        $this->session->set_flashdata('msg', "Add vehicle status,id reference is missing or incorrect");
        redirect('Vehicle/add_Vehicle_states');
        }

        } 

        public function List_edit()
        {
        $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo; 
        $id=$this->uri->segment(3);
        $data['vehiclestatus'] = $this->db->select()->from('vehiclestatus')->where('id',$id)
        ->get()->row();
        	$data["page"]='Vehicle/edit_list_vechicles';
        $this->load->view('Template/main',$data);

        }

          public function Vehicle_status_update()
        {
        if ($_POST )
        {
        $id=$this->input->post('id');
        $data["heading"]=$this->input->post('name');
        $data["modifiedAt"]=date("Y-m-d h:i:sa");
        // $data["createdBy"]=$this->session->userdata('dekho_userId');

          $this->db->where('id',$id);
        $this->db->update('vehiclestatus',$data);

        


        $this->session->set_flashdata('msg', "Add vehicle status, Information has been added successfully");
        redirect('Vehicle/Vehicle_Status_list');

        }

        else{
        $this->session->set_flashdata('msg', "Add vehicle status,id reference is missing or incorrect");
        redirect('Vehicle/Vehicle_Status_list');
        }

        } 

       
        //==============================Vehicle_Type work starts from here===============
     public function Vehicle_type_list()
     {
     $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo; 
        $data["vehicletype"]=$this->generic_model->getAllRecords("vehicletype",array("is_deleted"=>0),"id","DESC");
        
        $data["page"]='Vehicle/type_vechicles';
        $this->load->view('Template/main',$data);
     }

     public function type_delete()
        {
        $id=$this->uri->segment(3);
        $done=$this->db->where('id',$id)->update('vehicletype',array('is_deleted'=>1));
        if($done)
        {
        $this->session->set_flashdata('msg', 'vechicles Type is Deleted!');
        redirect('Vehicle/Vehicle_type_list');
        }
        else 
        {
        $this->session->set_flashdata('msg',' Error: vechicles type is not Deleted');
        redirect('Vehicle/Vehicle_type_list');
        }

        }   
        public function type_states()
        {
        $id=$this->uri->segment(3);
        $done=$this->db->where('id',$id)->update('vehicletype',array('status'=>1));
        if($done)
        {
        $this->session->set_flashdata('msg', 'vechicles is DeActive!');
        redirect('Vehicle/Vehicle_type_list');
        }
        else 
        {
        $this->session->set_flashdata('msg',' Error: vechicles is not DeActive');
        redirect('Vehicle/Vehicle_type_list');
        }

        }  
        public function type_active()
        {
        $id=$this->uri->segment(3);
        $done=$this->db->where('id',$id)->update('vehicletype',array('status'=>0));
        if($done)
        {
        $this->session->set_flashdata('msg', 'vechicles Type is Active!');
        redirect('Vehicle/Vehicle_type_list');
        }
        else 
        {
        $this->session->set_flashdata('msg',' Error: vechicles Type is not Active');
        redirect('Vehicle/Vehicle_type_list');
        }

        } 

        public function add_Vehicle_type()
        {
        $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo; 
        	$data["page"]='Vehicle/add_vehicletype';
        $this->load->view('Template/main',$data);
        }  

         public function Vehicle_type_save()
        {
        if ($_POST )
        {

        $this->load->model('generic_model');
        $data["heading"]=$this->input->post('name');
        $data["createdAt"]=date("Y-m-d h:i:sa");
        // $data["createdBy"]=$this->session->userdata('dekho_userId');

        $this->db->insert('vehicletype', $data);
        // $this->generic_model->insert("producttype",$data,array("id"=>$id));


        $this->session->set_flashdata('msg', "Add vehicle type, Information has been added successfully");
        redirect('Vehicle/add_Vehicle_type');

        }

        else{
        $this->session->set_flashdata('msg', "Add vehicle type,id reference is missing or incorrect");
        redirect('Vehicle/add_Vehicle_type');
        }

        } 

        public function type_edit()
        {
        $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo; 
        $id=$this->uri->segment(3);
        $data['vehicletype']=$this->db->select()->from('vehicletype')->where('id',$id)
        ->get()->row();
       // var_dump($data['vehicletype']);
        //die();
        	$data["page"]='Vehicle/edit_type_vechicles';
        $this->load->view('Template/main',$data);

        }

          public function Vehicle_type_update()
        {
        if ($_POST )
        {
        $id=$this->input->post('id');
        $data["heading"]=$this->input->post('name');
        $data["modifiedAt"]=date("Y-m-d h:i:sa");
        // $data["createdBy"]=$this->session->userdata('dekho_userId');

          $this->db->where('id',$id);
        $this->db->update('vehicletype',$data);

        


        $this->session->set_flashdata('msg', "Add vehicle type, Information has been added successfully");
        redirect('Vehicle/Vehicle_type_list');

        }

        else{
        $this->session->set_flashdata('msg', "Add vehicle Type,id reference is missing or incorrect");
        redirect('Vehicle/Vehicle_type_list');
        }

        } 


























        








}

/* End of file Vehicle.php */
/* Location: ./application/controllers/Vehicle.php */

