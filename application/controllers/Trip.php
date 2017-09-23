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


		public function close_trip($id)
       {
            $data['menu'] = $this->load_model->menu();
            $data['base_url'] = base_url();
            $data['userInfo'] = $this->userInfo; 
			$data['tripid'] = $id;// print_r($id); die();
            
			$data["trip_info"]=$this->trip_model->GetSpecificTrip($id);
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
                $data["meter_reading"]=$this->input->post('meter_reading'); 
                $data["entry_date"]=$this->input->post('entry_date'); 
                $data["email_date"]=$this->input->post('email_date'); 
                $data["filling_date"]=$this->input->post('filling_date'); 
                $data["source"]=$this->input->post('source'); 
       /*         $data["product_id"]=$this->input->post('product_id'); 
                $data["quantity"]=$this->input->post('quantity'); 
                $data["temperature"]=$this->input->post('temperature'); 
                $data["gravity"]=$this->input->post('gravity');
                $data["destination"]=$this->input->post('destination'); 
                $data["freight_rate"]=$this->input->post('freight_rate'); 
                $data["carriage_commission"]=$this->input->post('carriage_commission'); 
                $data["withholding_tax"]=$this->input->post('withholding_tax');
                $data["company_comission"]=$this->input->post('company_commission'); 
         */   //    $data["remaining_commission"]=$this->input->post('remaining_commission'); 

                $tripid=$this->trip_model->save("tripmanagement",$data);
				
	
				  $c=$this->input->post();
//                    print_r($c); die();
					//    $createdat=$this->input->post('Y-m-d h:i:sa');
                     for ($i = 0; $i < count($c['remaining_commission']); $i++) {
			//			 print_r($c); die();
//                         $head = $c['heading'];
                        $dataa = array(
 //    'trip_id'=>$tripid[$i],
	   'remaining_commission'=>$c['remaining_commission'][$i],
      'company_comission'=>$c['company_comission'][$i],
       'withholding_tax'=>$c['withholding_tax'][$i],
       'carriage_commission'=>$c['carriage_commission'][$i],                    
       'freight_rate'=>$c['freight_rate'][$i],
	   'destination'=>$c['destination'][$i],
	   'product_gravity'=>$c['product_gravity'][$i],
	   'product_temperature'=>$c['product_temperature'][$i],
	   'product_quantity'=>$c['product_quantity'][$i],
	   'product_id'=>$c['product_id'][$i]
//	   'meter_reading'=>$c['meter_reading'][$i]
   
          );  
		             $dataa["trip_id"]=$tripid;
		      $this->generic_model->insert("tripproduct",$dataa);
                     }
	
		/*
//			 $remaining_commission=array();
$remaining_commissionn=$this->input->post('remaining_commission');  
$remaining_commissionn["product_id"]=$this->input->post('product_id');
//print_r($remaining_commission); die();
  foreach ($remaining_commissionn as $value1) {
                $remaining_commission[]=array(
                		'trip_id'=>$tripid,
		//				'remaining_commission'=>$remaining_commissionnn,
        //       		'remaining_commission'=>'driver',
             

                		);
                }
				$this->db->insert_batch('tripproduct',$remaining_commission);

*/

	//     $data["createdAt"]=date("Y-m-d");
     //      $data["createdBy"]=$idd;
    //      $data["sales_id"]=$id;
   //       $data["invoiceno"]=$id.date('ymd');
                  
	//			$remaining_commission=$this->input->post('remaining_commission');
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
public function all_close_trip()
       {
                if ($this->input->post()) {
                $data["type"]=$this->input->post('type');
                $data["company_id"]=$this->input->post('company_id'); 
                $data["contractor_id"]=$this->input->post('contractor_id'); 
                $data["vehicle_id"]=$this->input->post('vehicle_id'); 
                $data["meter_reading"]=$this->input->post('meter_reading'); 
                $data["entry_date"]=$this->input->post('entry_date'); 
                $data["email_date"]=$this->input->post('email_date'); 
                $data["filling_date"]=$this->input->post('filling_date'); 
                $data["source"]=$this->input->post('source'); 
                $data["product_id"]=$this->input->post('product_id'); 
                $data["quantity"]=$this->input->post('quantity'); 
                $data["temperature"]=$this->input->post('temperature'); 
                $data["gravity"]=$this->input->post('gravity');
                $data["destination"]=$this->input->post('destination'); 
                $data["freight_rate"]=$this->input->post('freight_rate'); 
                $data["carriage_commission"]=$this->input->post('carriage_commission'); 
                $data["withholding_tax"]=$this->input->post('withholding_tax');
                $data["company_comission"]=$this->input->post('company_commission'); 
                $data["remaining_commission"]=$this->input->post('remaining_commission'); 

                $this->db->where("id",$id);
                $this->db->update("tripmanagement",$data);


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


  




}
