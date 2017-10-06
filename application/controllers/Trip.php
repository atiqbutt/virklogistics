<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class trip extends CI_Controller {

        public function __construct() 
        {
            parent::__construct();
            $this->load->model('trip_model');
            $this->load->model('generic_model');
            $this->load->library('form_validation');
            $this->load->model('generic_model');
            $this->load->library('form_validation');
            $this->load->model('user_model');
            $this->load->model('load_model');
            $this->user_model->check_login("admin");
            $this->userInfo = $this->user_model->userInfo("first_name,last_name");
        }

        public function index()
        {
            $data['menu'] = $this->load_model->menu();
            $data['base_url'] = base_url();
            $data['userInfo'] = $this->userInfo;  
			$data["expensetype"]=$this->trip_model->getAllRecords("expensetype",array("is_delete"=>0),"id","DESC");	
			$data["tripmanagement"]=$this->trip_model->GetAllTrips();
			$data["page"]='Trip/trip_list';
            $this->load->view('Template/main',$data);

        }

        public function get_data($type1)
        {
                $data["expensetype"]=$this->trip_model->getAllRecords("expensetype",array("is_delete"=>0),"id","DESC"); 
        $data["tripmanagement"]=$this->trip_model->GetAllTrips($type1);
        return $this->load->view('Trip/trip_data',$data);

        }
/*
        public function self_long()
        {
            $data['menu'] = $this->load_model->menu();
            $data['base_url'] = base_url();
            $data['userInfo'] = $this->userInfo;  
			$data["tripmanagement"]=$this->trip_model->GetAllTripsSelfLong();
			$data["page"]='Trip/self_long';
            $this->load->view('Template/main',$data);

        }
		
        public function self_short()
        {
            $data['menu'] = $this->load_model->menu();
            $data['base_url'] = base_url();
            $data['userInfo'] = $this->userInfo;  
			$data["tripmanagement"]=$this->trip_model->GetAllTripsSelfShort();
			$data["page"]='Trip/self_short';
            $this->load->view('Template/main',$data);

        }
        public function general_long()
        {
            $data['menu'] = $this->load_model->menu();
            $data['base_url'] = base_url();
            $data['userInfo'] = $this->userInfo;  
			$data["tripmanagement"]=$this->trip_model->GetAllTripsGeneralLong();
			$data["page"]='Trip/general_long';
            $this->load->view('Template/main',$data);

        }
		   public function general_short()
        {
            $data['menu'] = $this->load_model->menu();
            $data['base_url'] = base_url();
            $data['userInfo'] = $this->userInfo;  
			$data["tripmanagement"]=$this->trip_model->GetAllTripsGeneralShort();
			$data["page"]='Trip/general_short';
            $this->load->view('Template/main',$data);

        }
*/

	public function close_trip($id)
       {

            $data["driver1"]=$this->trip_model->getAllRecords("driverinformation",array("is_deleted"=>0, "status"=>0),"id","DESC");
            $data['menu'] = $this->load_model->menu();
            $data['base_url'] = base_url();
            $data['userInfo'] = $this->userInfo; 
			$data['tripid'] = $id;
			$data["trip_info"]=$this->trip_model->GetSpecificTrip($id);
            $data["helper"]=$this->trip_model->GetTripHelper($id);
            $data["products"]=$this->trip_model->GetTripProducts($id);
            var_dump ($data["products"]);
            die();
			$data["expensetype"]=$this->trip_model->getAllRecords("expensetype",array("is_delete"=>0),"id","DESC");	
			$data['page'] = 'Trip/close_trip';
            $this->load->view('Template/main', $data);
       } 
       





        public function delete()
        {
        $id=$this->uri->segment(3);
        $done=$this->db->where('id',$id)->update('tripmanagement',array('is_deleted'=>1));
        if($done)
        {
        $this->session->set_flashdata('msg', 'trip is Deleted!');
        redirect('trip/index');
        }
        else 
        {
        $this->session->set_flashdata('msg',' Error: trip is not Deleted');
        redirect('trip/index');
        }

        }   
        public function states()
        {
        $id=$this->uri->segment(3);
        $done=$this->db->where('id',$id)->update('tripmanagement',array('status'=>1));
        if($done)
        {
        $this->session->set_flashdata('msg', 'trip is Deactive!');
        redirect('trip/index');
        }
        else 
        {
        $this->session->set_flashdata('msg',' Error: trip is not  Deactive');
        redirect('trip/index');
        }

        }  
        public function active()
        {
        $id=$this->uri->segment(3);
        $done=$this->db->where('id',$id)->update('tripmanagement',array('status'=>0));
        if($done)
        {
        $this->session->set_flashdata('msg', 'trip is active!');
        redirect('trip/index');
        }
        else 
        {
        $this->session->set_flashdata('msg',' Error: trip is not active');
        redirect('trip/index');
        }
        }


       public function add_trip()
	   {

        $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;  
        $data["driver1"]=$this->trip_model->getAllRecords("driverinformation",array("is_deleted"=>0, "status"=>0),"id","DESC");
        $data["source"]=$this->trip_model->getAllRecords("locationtype",array("is_delete"=>0),"id","DESC");	 
        $data["helperinformation"]=$this->trip_model->getAllRecords("helperinformation",array("is_deleted"=>0,"status"=>0),"id","DESC");	
        $data["vehicle"]=$this->trip_model->getAllRecords("vehicle",array("is_deleted"=>0,"status"=>0),"id","DESC");	
        $data["product"]=$this->trip_model->getAllRecords("product",array("is_deleted"=>0,"status"=>0),"id","DESC");	
        $data["contractor"]=$this->trip_model->getAllRecords("contractorinformation",array("is_deleted"=>0,"status"=>0),"id","DESC");	
        $data["customer"]=$this->trip_model->getAllRecords("customerinformation",array("is_deleted"=>0,"status"=>0),"id","DESC");
        $data["routedefination"]=$this->trip_model->getAllRecords("routedefination",array("is_deleted"=>0),"id","DESC");	
		$data["expensetype"]=$this->trip_model->getAllRecords("expensetype",array("is_delete"=>0),"id","DESC");	

        $data['page'] = "Trip/add_trip";
        $this->load->view('Template/main', $data);
	   }


	public function save_trip()
	   {

          if ($this->input->post()) {

            $data["type"]=$this->input->post('type');
            $data["company_id"]=$this->input->post('company_id'); 
            $data["contractor_id"]=$this->input->post('contractor_id'); 
            $data["vehicle_id"]=$this->input->post('vehicle_id'); 
            $data["start_meter_reading"]=$this->input->post('start_meter_reading');
            $data["end_meter_reading"]=$this->input->post('end_meter_reading');
            $data["fuel"]=$this->input->post('fuel'); 
            $data["entry_date"]=$this->input->post('entry_date'); 
            $data["email_date"]=$this->input->post('email_date'); 
            $data["filling_date"]=$this->input->post('filling_date'); 


            $this->db->insert("tripmanagement",$data);

            $tripid = $this->db->insert_id();

			
               //  $productid = $this->input->post('product-id');
               //  $productquantity = $this->input->post('product-quantity');
               //  $producttemperature = $this->input->post('product-temperature');
               //  $productgravity = $this->input->post('product-gravity');
               //  $destination1 = $this->input->post('destination1');
               //  $freightrate = $this->input->post('freight-rate');
               //  $carriagecommission = $this->input->post('carriage-commission');
               //  $withholdingtax = $this->input->post('withholding-tax');
               //  $companycommission = $this->input->post('company-commission');
               //  $remainingcommission = $this->input->post('remaining-commission');

     

               // if (!empty($productquantity AND $producttemperature AND $productgravity AND $destination1 AND $freightrate AND $carriagecommission AND $withholdingtax AND $companycommission AND $remainingcommission )) {
                    
               //      $data = array(
               //     'remaining_commission'=>$remainingcommission,
               //     'company_comission'=>$companycommission,
               //     'withholding_tax'=>$withholdingtax,
               //     'carriage_commission'=> $carriagecommission,           
               //     'freight_rate'=>$freightrate,
               //     'destination'=>$destination1,
               //     'product_gravity'=>$productgravity,
               //     'product_temperature'=>$producttemperature,
               //     'product_quantity'=>$productquantity,
               //     'product_id'=>$productid
               //     );
                    
               //      $dataa["trip_id"]=$tripid;
               //      $this->db->insert("tripproduct",$data);

               //  }
         
                $product_id = $this->input->post('product_id');
                $source = $this->input->post('source');
                $destination = $this->input->post('destination');
                $product_quantity = $this->input->post('product_quantity');
                $product_temperature = $this->input->post('product_temperature');
                $product_gravity = $this->input->post('product_gravity');
                $destination = $this->input->post('destination');
                $freight_rate = $this->input->post('freight_rate');
                $carriage_commission = $this->input->post('carriage_commission');
                $withholding_tax = $this->input->post('withholding_tax');
                $company_commission = $this->input->post('company_commission');
                $remaining_commission = $this->input->post('remaining_commission');


            if (!empty($product_quantity)) {


                    $insert_product=array();
                    for ($i=0;$i<count($product_id);$i++) {

                    $insert_product[]=array(
                   'trip_id'=>$tripid,
                   'source'=>$source[$i],
                   'destination'=>$destination[$i],
                   'remaining_commission'=>$remaining_commission[$i],
                   'company_comission'=>$company_commission[$i],
                   'withholding_tax'=>$withholding_tax[$i],
                   'carriage_commission'=> $carriage_commission[$i],           
                   'freight_rate'=>$freight_rate[$i],
                   'destination'=>$destination[$i],
                   'product_gravity'=>$product_gravity[$i],
                   'product_temperature'=>$product_temperature[$i],
                   'product_quantity'=>$product_quantity[$i],
                   'product_id'=>$product_id[$i]

                    );
                }
                                             
                $this->db->insert_batch('tripproduct', $insert_product);


                }

   	
                $driver_id=$this->input->post('driver'); 
                $helper_id=$this->input->post('helper'); 
                $insert_driver=array();
                foreach ($driver_id as $value) {
                $insert_driver[]=array(
                		'trip_id'=>$tripid,
                		'type'=>'driver',
                		'member_id'=>$value

                		);
                }
                  
	      		$this->db->insert_batch('trip_members', $insert_driver);

	           	$insert_helper=array();
				foreach ($helper_id as $value) {
				$insert_helper[]=array(
								'trip_id'=>$tripid,
								'type'=>'helper',
								'member_id'=>$value

							);
	           	}

	           	$this->db->insert_batch('trip_members', $insert_helper);
	            $this->session->set_flashdata('success', "Add tripmanagement, Information has been added successfully");
	            redirect('trip/index');
	   	 
	   		}else{
	   			$this->session->set_flashdata('Errors', "There are some errors !!");
	            redirect('trip/add_trip');
	   		}

	          
	   }


	public function saveexpense_trip()

	   {
	    $tripid=$this->uri->segment(3);
	   if ($this->input->post()) {
//	 print_r($tripid); die();
				  $cc=$this->input->post();
//                    print_r($c); die();
					//    $createdat=$this->input->post('Y-m-d h:i:sa');
                     for ($ii = 0; $ii < count($cc['amount']); $ii++) {
			//			 print_r($c); die();
//                         $head = $c['heading'];
                        $dataaa = array(

	   'expensetype_id'=>$cc['expensetype_id'][$ii],
      'amount'=>$cc['amount'][$ii]
   
          );  
		             $dataaa["trip_id"]=$tripid;
					 $dataaa["date"]=date("Y-m-d h:i:sa");
		      $this->generic_model->insert("expense",$dataaa);
                     }

	            $this->session->set_flashdata('success', "Add tripmanagement, Information has been added successfully");
	            redirect('trip/index');
	   	 
	   		}else{

	   			$this->session->set_flashdata('Errors', "There are some errors !!");
	            redirect('trip/add_trip');
	   		}

	          
	   }







// public function all_close_trip()
//        {
//                 if ($this->input->post()) {
//                 $data["type"]=$this->input->post('type');
//                 $data["company_id"]=$this->input->post('company_id'); 
//                 $data["contractor_id"]=$this->input->post('contractor_id'); 
//                 $data["vehicle_id"]=$this->input->post('vehicle_id'); 
//                 $data["meter_reading"]=$this->input->post('meter_reading'); 
//                 $data["entry_date"]=$this->input->post('entry_date'); 
//                 $data["email_date"]=$this->input->post('email_date'); 
//                 $data["filling_date"]=$this->input->post('filling_date'); 
//                 $data["source"]=$this->input->post('source'); 
//                 $data["product_id"]=$this->input->post('product_id'); 
//                 $data["quantity"]=$this->input->post('quantity'); 
//                 $data["temperature"]=$this->input->post('temperature'); 
//                 $data["gravity"]=$this->input->post('gravity');
//                 $data["destination"]=$this->input->post('destination'); 
//                 $data["freight_rate"]=$this->input->post('freight_rate'); 
//                 $data["carriage_commission"]=$this->input->post('carriage_commission'); 
//                 $data["withholding_tax"]=$this->input->post('withholding_tax');
//                 $data["company_comission"]=$this->input->post('company_commission'); 
//                 $data["remaining_commission"]=$this->input->post('remaining_commission'); 

//                 $this->db->where("id",$id);
//                 $this->db->update("tripmanagement",$data);


//                 $driver_id=$this->input->post('driver'); 
//                 $helper_id=$this->input->post('helper'); 
//                 $insert_driver=array();
//                 foreach ($driver_id as $value) {
//                 $insert_driver[]=array(
//                         'trip_id'=>$tripid,
//                         'type'=>'driver',
//                         'member_id'=>$value

//                         );
//                 }
             
//                 $this->db->insert_batch('trip_members', $insert_driver);


//                 $insert_helper=array();
//                 foreach ($helper_id as $value) {
//                 $insert_helper[]=array(
//                                 'trip_id'=>$tripid,
//                                 'type'=>'helper',
//                                 'member_id'=>$value

//                             );
//                 }

//                 $this->db->insert_batch('trip_members', $insert_helper);
        
//                 $this->session->set_flashdata('success', "Add tripmanagement, Information has been added successfully");
//                 redirect('trip/index');
         
//             }else{

//                 $this->session->set_flashdata('Errors', "There are some errors !!");
//                 redirect('trip/add_trip');
//             }

              
//        }


  



}
