<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Defination extends CI_Controller {

    
    public function __construct() {
        parent::__construct();
        $this->load->model('Defination_Model');
        $this->load->model('user_model');
        $this->load->library('form_validation');
        $this->load->model('load_model');
        $this->user_model->check_login("admin");
        $this->userInfo = $this->user_model->userInfo("first_name,last_name");
        
    }

    /*********************************** Helper    ***********************************/
 
   public function image_upload_by()
    {
    
    if(isset($_FILES['imagee']['name']))
    {
    
    $config['upload_path']='./Upload/';
    $config['allowed_types']='jpg|jpeg|png|gif';
    $this->load->library('upload',$config);
   if(!$this->upload->do_upload('imagee'))
    {
    
    echo $this->upload->display_errors();
    }
   
   else
    {
    $data=$this->upload->data();
    echo '<img src="'.base_url().'upload/'.$data["file_name"].'"/>';
    }
    }
    
    }

   
 
 public function editexistcnichelper()
          {
       
       $id=$this->input->post('id');
        
  $search=  $this->input->post('cnic');
  
  
  
     $query = $this->Defination_Model->editgetcnichelper($search,$id);
     if($query) {
        $data['valid']=false;
        echo json_encode($data);die;
      
  
  }
  
  $data['valid']=true;
  echo json_encode($data);
   }
   
   
 
 public function editexistdriverhelper()
          {
       
       $id=$this->input->post('id');
        
  $search=  $this->input->post('driver');
  
  
  
     $query = $this->Defination_Model->editgetdriverhelper($search,$id);
     if($query) {
        $data['valid']=false;
        echo json_encode($data);die;
      
  
  }
  
  $data['valid']=true;
  echo json_encode($data);
   }
 
   
   
 public function editexistphonehelper()
          {
       
       $id=$this->input->post('id');
        
  $search=  $this->input->post('phone');
  
  
  foreach ($search as $key => $value) {
     $query = $this->Defination_Model->editgetphonehelper($value,$id);
     if($query) {
        $data['valid']=false;
        echo json_encode($data);die;
      }
  
  }
  
  $data['valid']=true;
  echo json_encode($data);
   }

    
    
    
    
    public function index()
	{
      	$data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
	$data['helper']=$this->Defination_Model->viewhelper();
        $data['page']='helper/list';
        $this->load->view('Template/main',$data);
           
	}
	 public function priint($p="")
        {
     
           $data['view']=$this->db->where('id',$p)->get('agentinformation')->row();
           $this->load->view('Agent/agent_p',$data);
        }
        
        
        public function printcontracttor($p="")
        {
     
           $data['view']=$this->db->where('id',$p)->get('contractorinformation
')->row();
           $this->load->view('Contractor/contractor_p',$data);
        }


 public function printcompany($p="")
        {
     
           $data['view']=$this->db->where('id',$p)->get('customerinformation

')->row();
           $this->load->view('Company/company_p',$data);
        }

public function printdriver($p="")
        {
     
           $data['view']=$this->db->where('id',$p)->get('driverinformation

')->row();
           $this->load->view('Driver/driver_p',$data);
        }
        

public function printhelper($p="")
        {
     
           $data['view']=$this->db->where('id',$p)->get('helperinformation


')->row();
           $this->load->view('helper/helper_p',$data);
        }        
        



	  public function existhelpercnic()
          {
  $search=  $this->input->post('cnic');
  $query = $this->Defination_Model->gethelpercnic($search);
  

      if($query) {
        $data['valid']=false;
        echo json_encode($data);
      }else{
        $data['valid']=true;
        echo json_encode($data);
      }
   }          
        
         public function existhelperdriver()
          {
  $search=  $this->input->post('driver');
  $query = $this->Defination_Model->gethelperdriver($search);
  

      if($query) {
        $data['valid']=false;
        echo json_encode($data);
      }else{
        $data['valid']=true;
        echo json_encode($data);
      }
   }          
        
        
        
        
          public function existphonehelper()
          {
  $search=  $this->input->post('phone');
  foreach ($search as $key => $value) {
     $query = $this->Defination_Model->getphonehelper($value);
     if($query) {
        $data['valid']=false;
        echo json_encode($data);die;
      }
  }
  
  $data['valid']=true;
  echo json_encode($data);
   }






        
          public function savehelper()
        {
           
            if($this->input->post())
            {
                $url=$this->do_upload();
                 $url2=$this->do_upload2();
                $field=$this->input->post();
                $data=array(
                    'name'=>$field['name'],
                   
                     'number'=>implode(',',$field['phone']),
                    'address'=>$field['address'],
                     'religion'=>$field['religion'],
                    'cnic'=>$field['cnic'],
                     'doj'=>$field['doj'],
                     'doc'=>$url2,
                    'dob'=>$field['dob'],
                    'dl'=>$field['driver'],
                    'status'=>0,
                    'image1'=>$url,
                    'type'=>$type['type'],
                    'createdAt'=>date("Y-m-d h:i:sa"),
                    'createdBy'=>1,
                    'modifiedAt'=>date("Y-m-d h:i:sa"),
                    'modifiedBy'=>1
                 
                );
           
                $done=$this->Defination_Model->insert('helperinformation',$data);
                if($done)
                {
                    $this->session->set_flashdata('msg','Record has been Added Successfully');
                    redirect('Defination/addhelper');
                
        }
                }
        }
        
     
        public function addhelper()
	{
       $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
	$data['page']='helper/add';
        $this->load->view('Template/main',$data);
           
	}
        
        public function eyehelper()
        {
            $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
          $id=$this->uri->segment(3);
          $data['view']=$this->db->where('id',$id)->get('helperinformation')->row();
          $data['page']='helper/view';
          $this->load->view('Template/main',$data);
          
          
        }

        
        public function edithelper()
        {
       $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
        $id=$this->uri->segment(3);
        $data['edit']=$this->db->where('id',$id)->get('helperinformation')->row();
        $data['page']='helper/edit';
        $this->load->view('Template/main',$data);
          
        }
        
        public function updatehelper()
        {
            if($this->input->post())
		{
                    $field=$this->input->post();
                    
               $url=$this->do_upload();
               $url2=$this->do_upload2();   
              $data=array(
                    'name'=>$field['name'],
                     'number'=>implode(',',$field['phone']),
                    'address'=>$field['address'],
                     'religion'=>$field['religion'],
                    'cnic'=>$field['cnic'],
                     'doj'=>$field['doj'],
                    'dob'=>$field['dob'],
                    'dl'=>$field['driver'],
                    
                   
                    'modifiedAt'=>date("Y-m-d h:i:sa"),
                    'modifiedBy'=>1
                 
                );
       
       
       		if($url!='')
                    {
                   	$data['image1']=$url;
                    }
                    
                    if($url2!='')
                    {
                   $data['doc']=url2;
                    }
       
                $done=$this->db->where('id',$field['id'])->update('helperinformation',$data);
                    if($done)
                       {
                       $this->session->set_flashdata('msg', 'Record is  Updated');
                       redirect('Defination/index');
                       }
                 }  
          
        }
        
        public function status_helper($id)
				{
					$query=$this->db->where('id',$id)->get('helperinformation')->row();
					
					$new=($query->status==0) ? 1:0;
					$data=array(
						'status'=>$new
						);
                                        $query=  $this->db->where('id',$id)->update('helperinformation',$data);
					
					if($query)
					{
						redirect('Defination/index');
					}
                                }
        
         public function deletehelper()
    {
            $id=$this->uri->segment(3);
        $done=$this->db->where('id',$id)->update('helperinformation',array('is_deleted'=>1));
        if($done)
         {
          $this->session->set_flashdata('msg', 'Record is Deleted!');
          redirect('Defination/index');
                       }
                       
    }  
        
    
    
     /****************************************** End of Helper    **********************************************************************/  
    
    
    
     public function do_upload2()
     { 
          $type = explode('.', $_FILES["doc"]["name"]);
         $type = $type[count($type)-1];
          $url2 = "Uploads/".$_FILES["doc"]["name"];
            
            
           
             if (in_array($type, array("png","jpg","jpeg","gif","doc","docx","Doc","Docx","pdf","xlsx","xls","ppt","pptx","rar","zip","csv","txt","avi","mp4","3gp","mpeg","mp3","iso")))
             if(move_uploaded_file($_FILES["doc"]["tmp_name"], $url2)){
              $this->load->library('image_lib');
              $config= array('image_library' =>"gd2" ,
                                'source_image'=>$url2,
                                'maintain_ratio'=>true,
                                 );
              $this->image_lib->initialize($config);
              if($this->image_lib->resize()){
                    return $url2;
                }
            }
             return null;

    }
    
    public function do_upload()
     { 
          $type = explode('.', $_FILES["image"]["name"]);
          $type = $type[count($type)-1];
          $url = "Uploads/".uniqid(rand()).'.'.$type;
            
             if (in_array($type, array("png","jpg","jpeg","gif")))
             if(move_uploaded_file($_FILES["image"]["tmp_name"], $url)){
              $this->load->library('image_lib');
              $config= array('image_library' =>"gd2" ,
                                'source_image'=>$url,
                                'maintain_ratio'=>true,
                                 );
              $this->image_lib->initialize($config);
              if($this->image_lib->resize()){
                    return $url;
                }
            }
             return null;

    }
     
    
    
   
    
   
    
       /****************************************** Company ************************************************************/
                                
     
      public function editexistemailcompany()
          {
       
       $id=$this->input->post('id');
        
  $search=  $this->input->post('email');
  
  
  
     $query = $this->Defination_Model->editgetemailcompany($search,$id);
     if($query) {
        $data['valid']=false;
        echo json_encode($data);die;
      
  
  }
  
  $data['valid']=true;
  echo json_encode($data);
   }
 
 
 public function editexistcniccompany()
          {
       
       $id=$this->input->post('id');
        
  $search=  $this->input->post('cnic');
  
  
  
     $query = $this->Defination_Model->editgetcniccompany($search,$id);
     if($query) {
        $data['valid']=false;
        echo json_encode($data);die;
      
  
  }
  
  $data['valid']=true;
  echo json_encode($data);
   }
 
   
   
 public function editexistphonecompany()
          {
       
       $id=$this->input->post('id');
        
  $search=  $this->input->post('phone');
  
  
  foreach ($search as $key => $value) {
     $query = $this->Defination_Model->editgetphonecompany($value,$id);
     if($query) {
        $data['valid']=false;
        echo json_encode($data);die;
      }
  
  }
  
  $data['valid']=true;
  echo json_encode($data);
   }

     
     
     
     
     
     
     
     
     
     
     
     
     
     
     public function existemailcompany()
          {
  $search=  $this->input->post('email');
  $query = $this->Defination_Model->getemailcompany($search);

      if($query) {
        $data['valid']=false;
        echo json_encode($data);
      }else{
        $data['valid']=true;
        echo json_encode($data);
      }
   }
   
    public function existcontactcompany()
          {
  $search=  $this->input->post('contactnumber');
  $query = $this->Defination_Model->getcompanycontact($search);
  

      if($query) {
        $data['valid']=false;
        echo json_encode($data);
      }else{
        $data['valid']=true;
        echo json_encode($data);
      }
   }

         public function existcompanycnic()
          {
  $search=  $this->input->post('cnic');
  $query = $this->Defination_Model->getcompanycnic($search);
  

      if($query) {
        $data['valid']=false;
        echo json_encode($data);
      }else{
        $data['valid']=true;
        echo json_encode($data);
      }
   }          
                                
        public function existphonecompany()
          {
  $search=  $this->input->post('phone');
  foreach ($search as $key => $value) {
     $query = $this->Defination_Model->getphonecomapny($value);
     if($query) {
        $data['valid']=false;
        echo json_encode($data);die;
      }
  }
  
  $data['valid']=true;
  echo json_encode($data);
   }
   
   
        public function savecompany()
        {
           
           if($this->input->post())
            {
                $field=$this->input->post();
//                if(!($field['image']=="" || $field['image']==null))
                $url=$this->do_upload();
                $url2=$this->do_upload2();
                $data=array(
                    'name'=>$field['name'],
                    
                    'number'=>implode(',',$field['phone']),
                    'address'=>$field['address'], 
                    'cnic'=>$field['cnic'],
                    'doc'=>$url2,
                    'cpname'=>$field['contactname'],
                    'cpnumber'=>$field['contactnumber'],
                    'email'=>$field['email'],
                    'image1'=>$url,
                    'status'=>0,
                    'createdAt'=>date("Y-m-d h:i:sa"),
                    'createdBy'=>1,
                    'modifiedAt'=>date("Y-m-d h:i:sa"),
                    'modifiedBy'=>1
                 
                );
               
                $done=$this->Defination_Model->insert(' customerinformation',$data);
                if($done)
                {
                    $this->session->set_flashdata('msg','Record has been Added Successfully');
                    redirect('Defination/addcompany');
                
        }
                }
         
        }
        
        
        

        
         public function companypage()
        {
        $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
         $data['customer']=$this->Defination_Model->viewcustomer();
	$data['page']='Company/list';
        $this->load->view('Template/main',$data);
            
            
        }
        
        
        public function addcompany()
	{
       $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
	$data['page']='Company/add';
        $this->load->view('Template/main',$data);
           
	}
        
        
      

         public function eyecompany()
        {
            $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
          $id=$this->uri->segment(3);
          $data['view']=$this->db->where('id',$id)->get('customerinformation')->row();
          $data['page']='Company/view';
          $this->load->view('Template/main',$data);
          
          
        }
        
        
         public function editcompany()
        {
            $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
          $id=$this->uri->segment(3);
          $data['edit']=$this->db->where('id',$id)->get('customerinformation')->row();
          $data['page']='Company/edit';
          $this->load->view('Template/main',$data);
          
        }
        
        
        public function updatecompany()
        {
            if($this->input->post())
		{
                 $field=$this->input->post();
                    
               $url=$this->do_upload();
               $url2=$this->do_upload2(); 
              $data=array(
                    'name'=>$field['name'],
                    
                   'number'=>implode(',',$field['phone']),
                    'address'=>$field['address'],
                    
                    'cnic'=>$field['cnic'],
                     'cpname'=>$field['contactname'],
                    'cpnumber'=>$field['contactnumber'],
                    'email'=>$field['email'],
                    'image1'=>$url,
                   
                    'modifiedAt'=>date("Y-m-d h:i:sa"),
                    'modifiedBy'=>1
                  
                );
                if($url!='')
                    {
                   	$data['image1']=$url;
                    }
                    
                    if($url2!='')
                    {
                   $data['doc']=url2;
                    }
               
                    $done=$this->db->where('id',$field['id'])->update('customerinformation',$data);
                    if($done)
                       {
                       $this->session->set_flashdata('msg', 'Record is  Updated');
                       redirect('Defination/companypage');
                       }
                
                
                }  
          
        }
        
         public function status_company($id)
				{
					$query=$this->db->where('id',$id)->get('customerinformation')->row();
					
					$new=($query->status==0) ? 1:0;
					$data=array(
						'status'=>$new
						);
                                        $query=  $this->db->where('id',$id)->update('customerinformation',$data);
					
					if($query)
					{
						redirect('Defination/companypage');
					}
                                }
        
        
            public function deletecompany()
    {
            $id=$this->uri->segment(3);
            $done=$this->db->where('id',$id)->update('customerinformation',array('is_deleted'=>1));
            if($done)
                {
          $this->session->set_flashdata('msg', 'Record is Deleted!');
           redirect('Defination/companypage');
               }
                       
    }  
         /****************************************** End of Customer   *****************************************/
    
        
     /****************************************** Start Agent    ************************************************/
       
       
       
       
       public function editexistemailagent()
          {
       
       $id=$this->input->post('id');
        
  $search=  $this->input->post('email');
  
  
  
     $query = $this->Defination_Model->editgetemailagent($search,$id);
     if($query) {
        $data['valid']=false;
        echo json_encode($data);die;
      
  
  }
  
  $data['valid']=true;
  echo json_encode($data);
   }
 
 
 public function editexistcnicagent()
          {
       
       $id=$this->input->post('id');
        
  $search=  $this->input->post('cnic');
  
  
  
     $query = $this->Defination_Model->editgetcnicagent($search,$id);
     if($query) {
        $data['valid']=false;
        echo json_encode($data);die;
      
  
  }
  
  $data['valid']=true;
  echo json_encode($data);
   }
 
   
   
 public function editexistphoneagent()
          {
       
       $id=$this->input->post('id');
        
  $search=  $this->input->post('phone');
  
  
  foreach ($search as $key => $value) {
     $query = $this->Defination_Model->editgetphoneagent($value,$id);
     if($query) {
        $data['valid']=false;
        echo json_encode($data);die;
      }
  
  }
  
  $data['valid']=true;
  echo json_encode($data);
   }

       
       
       
       
       
       
       
       
       
       
       
       
       
        public function agentpage()
        {
        $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
        $data['agent']=$this->Defination_Model->viewagent();
	      $data['page']='Agent/list';
        $this->load->view('Template/main',$data);
      
        }
        
        
          public function existagentcnic()
          {
  $search=  $this->input->post('cnic');
  $query = $this->Defination_Model->getagentcnic($search);
  

      if($query) {
        $data['valid']=false;
        echo json_encode($data);
      }else{
        $data['valid']=true;
        echo json_encode($data);
      }
   }
   
     public function existcontactagent()
          {
  $search=  $this->input->post('contactnumber');
  $query = $this->Defination_Model->getagentcontact($search);
  

      if($query) {
        $data['valid']=false;
        echo json_encode($data);
      }else{
        $data['valid']=true;
        echo json_encode($data);
      }
   }

 public function existphoneagent()
   {
  $search=  $this->input->post('phone');
  foreach ($search as $key => $value) {
     $query = $this->Defination_Model->getphoneagent($value);
     if($query) {
        $data['valid']=false;
        echo json_encode($data);die;
      }
  }
  
  $data['valid']=true;
  echo json_encode($data);
   }
        
        
        
          public function existemail()
          {
  $search=  $this->input->post('email');
  $query = $this->Defination_Model->getemail($search);

      if($query) {
        $data['valid']=false;
        echo json_encode($data);
      }else{
        $data['valid']=true;
        echo json_encode($data);
      }
   }



        public function saveagent()
        {
        

           if($this->input->post())
            {
                $url=$this->do_upload();
                 $url2=$this->do_upload2();
                $field=$this->input->post();
                $data=array(
                    'name'=>$field['name'],
                     'number'=>implode(',',$field['phone']),
                    'address'=>$field['address'],
                     'doc'=>$url2,
                    'cnic'=>$field['cnic'],
                    'cpname'=>$field['contactname'],
                    'cpnumber'=>$field['contactnumber'],
                    'email'=>$field['email'],
                    'image1'=>$url,
                    'createdAt'=>date("Y-m-d h:i:sa"),
                    'createdBy'=>1,
                    'status'=>0,
                    'modifiedAt'=>date("Y-m-d h:i:sa"),
                    'modifiedBy'=>1
                 
                );
               
                $done=$this->Defination_Model->insert('agentinformation',$data);
                if($done)
                {
                    $this->session->set_flashdata('msg','Record has been Added Successfully');
                    redirect('Defination/addagent');
                }
        }
                }
        
        
          public function eyeagent()
        {
            $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
          $id=$this->uri->segment(3);
          $data['view']=$this->db->where('id',$id)->get('agentinformation')->row();
          $data['page']='Agent/view';
          $this->load->view('Template/main',$data);
          
          
        }
        
        public function addagent()
	{
      $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
	$data['page']='Agent/add';
        $this->load->view('Template/main',$data);
           
	}
        
        
         public function editagent()
        {
            $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
          $id=$this->uri->segment(3);
          $data['edit']=$this->db->where('id',$id)->get('agentinformation')->row();
        
          $data['page']='Agent/edit';
          $this->load->view('Template/main',$data);
          
        }
        
        public function updateagent()
        {
            if($this->input->post())
		{
                 $field=$this->input->post();
                $url=$this->do_upload();
               if($url=='')
                    {
                   $q=$this->db->select('image1')->where('id',$field['id'])->get('agentinformation')->row();
                   $url=$q->image1;
                    }
              $data=array(
                    'name'=>$field['name'],
                  'number'=>implode(',',$field['phone']),
                    
                    'address'=>$field['address'],
                     'cnic'=>$field['cnic'],
                     'cpname'=>$field['contactname'],
                    'cpnumber'=>$field['contactnumber'],
                    'email'=>$field['email'],
                    'image1'=>$url,
                    'modifiedAt'=>date("Y-m-d h:i:sa"),
                    'modifiedBy'=>1
                  
                );
               
                    $done=$this->db->where('id',$field['id'])->update('agentinformation',$data);
                    if($done)
                       {
                       $this->session->set_flashdata('msg', 'Record is  Updated');
                       redirect('Defination/agentpage');
                       }
                
                }  
          
        }
        
         public function status_agent($id)
				{
					$query=$this->db->where('id',$id)->get('agentinformation')->row();
					
					$new=($query->status==0) ? 1:0;
					$data=array(
						'status'=>$new
						);
                                        $query=  $this->db->where('id',$id)->update('agentinformation',$data);
					
					if($query)
					{
						redirect('Defination/agentpage');
					}
                                }
        
        
        
        
         public function deleteagent()
    {
            $id=$this->uri->segment(3);
            $done=$this->db->where('id',$id)->update('agentinformation',array('is_deleted'=>1));
            if($done)
                {
          $this->session->set_flashdata('msg', 'Record is Deleted!');
           redirect('Defination/agentpage');
               }
                       
    }  
    
        
         /****************************************** End Agent    ************************************************/
        
    
    
    
         /****************************************** Start Contractor    ******************************/
    
        public function contractorpage()
        {
        $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
      $data['contractor']=$this->Defination_Model->viewcontractor();
	$data['page']='Contractor/list';
        $this->load->view('Template/main',$data);
            
            
        }
        
         public function existemailcontractor()
          {
  $search=  $this->input->post('email');
  $query = $this->Defination_Model->getemailcontractor($search);

      if($query) {
        $data['valid']=false;
        echo json_encode($data);
      }else{
        $data['valid']=true;
        echo json_encode($data);
      }
   }
          public function existcontactcontractor()
          {
  $search=  $this->input->post('contactnumber');
  $query = $this->Defination_Model->getcontactorcontact($search);
  

      if($query) {
        $data['valid']=false;
        echo json_encode($data);
      }else{
        $data['valid']=true;
        echo json_encode($data);
      }
   }

         public function existcontractorcnic()
          {
  $search=  $this->input->post('cnic');
  $query = $this->Defination_Model->getcontractorcnic($search);
  

      if($query) {
        $data['valid']=false;
        echo json_encode($data);
      }else{
        $data['valid']=true;
        echo json_encode($data);
      }
   }
        
     

        
        
        function file_selected_test(){

    $this->form_validation->set_message('file_selected_test', 'Please select file.');
    if (empty($_FILES['image']['name'])) {
            return false;
        }else{
            return true;
        }
}
        

 public function existphonecontractor()
          {
  $search=  $this->input->post('phone');
  foreach ($search as $key => $value) {
     $query = $this->Defination_Model->getphonecontractor($value);
     if($query) {
        $data['valid']=false;
        echo json_encode($data);die;
      }
  }
  
  $data['valid']=true;
  echo json_encode($data);
   }
   
  
  
  
  
  
  
   
  
 
   
   
 public function editexistemailcontractor()
          {
       
       $id=$this->input->post('id');
        
  $search=  $this->input->post('email');
  
  
  
     $query = $this->Defination_Model->editgetemailcontractor($search,$id);
     if($query) {
        $data['valid']=false;
        echo json_encode($data);die;
      
  
  }
  
  $data['valid']=true;
  echo json_encode($data);
   }
 
 
 public function editexistcniccontractor()
          {
       
       $id=$this->input->post('id');
        
  $search=  $this->input->post('cnic');
  
  
  
     $query = $this->Defination_Model->editgetcniccontractor($search,$id);
     if($query) {
        $data['valid']=false;
        echo json_encode($data);die;
      
  
  }
  
  $data['valid']=true;
  echo json_encode($data);
   }
 
   
   
 public function editexistphonecontractor()
          {
       
       $id=$this->input->post('id');
        
  $search=  $this->input->post('phone');
  
  
  foreach ($search as $key => $value) {
     $query = $this->Defination_Model->editgetphonecontractor($value,$id);
     if($query) {
        $data['valid']=false;
        echo json_encode($data);die;
      }
  
  }
  
  $data['valid']=true;
  echo json_encode($data);
   }


         public function savecontractor()
        {
               if($this->input->post())
            {
                $field=$this->input->post();
//                if(!($field['image']=="" || $field['image']==null))
                $url=$this->do_upload();
                 $url2=$this->do_upload2();
                $data=array(
                    'name'=>$field['name'],
                   
                    'number'=>implode(',',$field['phone']),
                    'address'=>$field['address'],
                    'doc'=>$url2, 
                    'cnic'=>$field['cnic'],
                    'cpname'=>$field['contactname'],
                    'cpnumber'=>$field['contactnumber'],
                    'email'=>$field['email'],
                    'image1'=>$url,
                    'createdAt'=>date("Y-m-d h:i:sa"),
                    'createdBy'=>1,
                    'modifiedAt'=>date("Y-m-d h:i:sa"),
                    'modifiedBy'=>1
                 
                );
               
               
                $done=$this->Defination_Model->insert('contractorinformation',$data);
                if($done)
                {
                    $this->session->set_flashdata('msg','Record has been Added Successfully');
                    redirect('Defination/addcontractor');
                }
        
                }
         
        }
        
         public function editcontractor()
        {
            $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
          $id=$this->uri->segment(3);
          $data['edit']=$this->db->where('id',$id)->get('contractorinformation')->row();
          $data['page']='Contractor/edit';
          $this->load->view('Template/main',$data);
          
        }
        
        
         public function updatecontractor()
        {
            if($this->input->post())
		{
                 $field=$this->input->post();
                    
               $url=$this->do_upload();
                $url2=$this->do_upload2();
               
              $data=array(
                    'name'=>$field['name'],
                    
                   'number'=>implode(',',$field['phone']),
                    'address'=>$field['address'],
                    'cnic'=>$field['cnic'],
                     'cpname'=>$field['contactname'],
                    'cpnumber'=>$field['contactnumber'],
                    'email'=>$field['email'],                  
                    'modifiedAt'=>date("Y-m-d h:i:sa"),
                    'modifiedBy'=>1
                  
                );
               if($url!='')
                    {
                   	$data['image1']=$url;
                    }
                    
                    if($url2!='')
                    {
                   $data['doc']=url2;
                    }
                    $done=$this->db->where('id',$field['id'])->update('contractorinformation',$data);
                    if($done)
                       {
                       $this->session->set_flashdata('msg', 'Record is  Updated');
                       redirect('Defination/contractorpage');
                       }
                
                
                }  
          
        }
        
          public function eyecontractor()
        {
            $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
          $id=$this->uri->segment(3);
          $data['view']=$this->db->where('id',$id)->get('contractorinformation')->row();
          $data['page']='Contractor/view';
          $this->load->view('Template/main',$data);
          
          
        }
        
        
         public function deletecontractor()
    {
            $id=$this->uri->segment(3);
            $done=$this->db->where('id',$id)->update('contractorinformation',array('is_deleted'=>1));
            if($done)
                {
          $this->session->set_flashdata('msg', 'Record is Deleted!');
           redirect('Defination/contractorpage');
               }
                       
    }  
     public function status_contractor($id)
				{
					$query=$this->db->where('id',$id)->get('contractorinformation')->row();
					
					$new=($query->status==0) ? 1:0;
					$data=array(
						'status'=>$new
						);
                                        $query=  $this->db->where('id',$id)->update('contractorinformation',$data);
					
					if($query)
					{
						redirect('Defination/contractorpage');
					}
                                }
        
        
        public function addcontractor()
	{
	$data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
      
	$data['page']='Contractor/add';
        $this->load->view('Template/main',$data);
           
	}
        
        
        
         /****************************************** End Contractor    ************************************************/
        
        
        
         /****************************************** Start Driver    ************************************************/
        
         
         
 public function editexistcnicdriver()
          {
       
       $id=$this->input->post('id');
        
  $search=  $this->input->post('cnic');
  
  
  
     $query = $this->Defination_Model->editgetcnicdriver($search,$id);
     if($query) {
        $data['valid']=false;
        echo json_encode($data);die;
      
  
  }
  
  $data['valid']=true;
  echo json_encode($data);
   }
   
   
 
 public function editexistdriverdriver()
          {
       
       $id=$this->input->post('id');
        
  $search=  $this->input->post('driver');
  
  
  
     $query = $this->Defination_Model->editgetdriverdriver($search,$id);
     if($query) {
        $data['valid']=false;
        echo json_encode($data);die;
      
  
  }
  
  $data['valid']=true;
  echo json_encode($data);
   }
 
   
   
 public function editexistphonedriver()
          {
       
       $id=$this->input->post('id');
        
  $search=  $this->input->post('phone');
  
  
  foreach ($search as $key => $value) {
     $query = $this->Defination_Model->editgetphonedriver($value,$id);
     if($query) {
        $data['valid']=false;
        echo json_encode($data);die;
      }
  
  }
  
  $data['valid']=true;
  echo json_encode($data);
   }

         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
          public function existphonedriver()
          {
  $search=  $this->input->post('phone');
  foreach ($search as $key => $value) {
     $query = $this->Defination_Model->getphonedriver($value);
     if($query) {
        $data['valid']=false;
        echo json_encode($data);die;
      }
  }
  
  $data['valid']=true;
  echo json_encode($data);
   }


  public function existdriverdriver()
          {
  $search=  $this->input->post('driver');
  $query = $this->Defination_Model->getdriverdriver($search);
  

      if($query) {
        $data['valid']=false;
        echo json_encode($data);
      }else{
        $data['valid']=true;
        echo json_encode($data);
      }
   }          
        
        
        
        
        
         public function driverpage()
        {
        $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
        $data['driver']=$this->Defination_Model->viewdriver();
	$data['page']='Driver/list';
        $this->load->view('Template/main',$data);
            
            
        }
        
         public function existdrivercnic()
          {
  $search=  $this->input->post('cnic');
  $query = $this->Defination_Model->getdrivercnic($search);
  

      if($query) {
        $data['valid']=false;
        echo json_encode($data);
      }else{
        $data['valid']=true;
        echo json_encode($data);
      }
   }
        
        public function savedriver()
        {
           
           if($this->input->post())
            {
                $url=$this->do_upload();
                $url2=$this->do_upload2();
                
                $field=$this->input->post();
             
                $data=array(
                     'name'=>$field['name'],
                     'number'=>implode(',',$field['phone']),
                    'address'=>$field['address'],
                     'religion'=>$field['religion'],
                    'cnic'=>$field['cnic'],
                     'doj'=>$field['doj'],
                    'dob'=>$field['dob'],
                    'dl'=>$field['driver'],
                     'status'=>0,
                    'image1'=>$url,
                    'doc'=>$url2,
                     'type'=>$field['type'],
                    'createdAt'=>date("Y-m-d h:i:sa"),
                    'createdBy'=>1,
                    'modifiedAt'=>date("Y-m-d h:i:sa"),
                    'modifiedBy'=>1
                );
               
                $done=$this->Defination_Model->insert('driverinformation',$data);
                if($done)
                {
                    $this->session->set_flashdata('msg','Record has been Added Successfully');
                    redirect('Defination/adddriver');
                }
        
         
        }
        }
           public function eyedriver()
        {
        $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
            
          $id=$this->uri->segment(3);
          $data['view']=$this->db->where('id',$id)->get('driverinformation')->row();
          $data['page']='Driver/view';
          $this->load->view('Template/main',$data);
          
          
        }
        
            public function editdriver()
        {
            $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
          $id=$this->uri->segment(3);
          $data['edit']=$this->db->where('id',$id)->get('driverinformation')->row();
          $data['page']='Driver/edit';
          $this->load->view('Template/main',$data);
          
        }
        
        
        public function adddriver()
	{
	$data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
        
	$data['page']='Driver/add';
        $this->load->view('Template/main',$data);
           
	}
        
          public function updatedriver()
        {
            if($this->input->post())
		{
                 $field=$this->input->post();
                   
                $url=$this->do_upload();
                $url2=$this->do_upload2();
               
              $data=array(
                   'name'=>$field['name'],
                    'number'=>implode(',',$field['number']),
                    'address'=>$field['address'],
                     'religion'=>$field['religion'],
                    'cnic'=>$field['cnic'],
                     'doj'=>$field['doj'],
                    'dob'=>$field['dob'],
                    'dl'=>$field['driver'],
                    'type'=>$field['type'],
                    'createdAt'=>date("Y-m-d h:i:sa"),
                    'createdBy'=>1,
                    'modifiedAt'=>date("Y-m-d h:i:sa"),
                    'modifiedBy'=>1
                  
                );
                if($url!='')
                    {
                   	$data['image1']=$url;
                    }
                    
                    if($url2!='')
                    {
                   $data['doc']=url2;
                    }
                    $done=$this->db->where('id',$field['id'])->update('driverinformation',$data);
                    if($done)
                       {
                       $this->session->set_flashdata('msg', 'Record is  Updated');
                       redirect('Defination/driverpage');
                       }
                
                }  
          
        }
        
          public function deletedriver()
    {
            $id=$this->uri->segment(3);
            $done=$this->db->where('id',$id)->update('driverinformation',array('is_deleted'=>1));
            if($done)
                {
          $this->session->set_flashdata('msg', 'Record is Deleted!');
           redirect('Defination/driverpage');
               }
               
               
               
                       
    } 
    
    
    
    public function status_driver($id)
				{
					$query=$this->db->where('id',$id)->get('driverinformation')->row();
					
					$new=($query->status==0) ? 1:0;
					$data=array(
						'status'=>$new
						);
                                        $query=  $this->db->where('id',$id)->update('driverinformation',$data);
					
					if($query)
					{
						redirect('Defination/driverpage');
					}
                                }
        
    
    
    
        
         /****************************************** End Driver    ************************************************/
        
        
    
     /****************************************** Start Route    ************************************************/
          
         public function routepage()
        {
        $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
        $data['route']=$this->Defination_Model->viewroute();
	$data['page']='Route/list';
        $this->load->view('Template/main',$data);
         
        }
        
          public function saveroute()
        {
       
           if($this->input->post())
            {
              
                
                $field=$this->input->post();
                $data=array(
                     'source'=>$field['source'],
                     'destination'=>$field['dest'],
                    'km'=>$field['km'],
                    'description'=>$field['remarks'],
                    'createdAt'=>date("Y-m-d h:i:sa"),
                    'createdBy'=>1,
                    'modifiedAt'=>date("Y-m-d h:i:sa"),
                    'modifiedBy'=>1
                );
                
                $done=$this->Defination_Model->insert('routedefination',$data);
                if($done)
                {
                    $this->session->set_flashdata('msg','Record has been Added Successfully');
                    redirect('Defination/addroute');
                }
        }
         
        }
        
        
        
        public function addroute()
	{
       $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
	$data['page']='Route/add';
        $this->load->view('Template/main',$data);
           
	}
        
          public function editroute()
        {
            $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
          $id=$this->uri->segment(3);
          $data['edit']=$this->db->where('id',$id)->get('routedefination')->row();
          $data['page']='Route/edit';
          $this->load->view('Template/main',$data);
          
        }
        
          public function updateroute()
        {
            if($this->input->post())
		{
                 $field=$this->input->post();
               
              $data=array(
                    'source'=>$field['source'],
                     'destination'=>$field['dest'],
                    'km'=>$field['km'],
                    'description'=>$field['remarks'],
                    'createdAt'=>date("Y-m-d h:i:sa"),
                    'createdBy'=>1,
                    'modifiedAt'=>date("Y-m-d h:i:sa"),
                    'modifiedBy'=>1
                    
                );
               
                    $done=$this->db->where('id',$field['id'])->update('routedefination',$data);
                    if($done)
                       {
                       $this->session->set_flashdata('msg', 'Record is  Updated');
                       redirect('Defination/routepage');
                       }
                
                }  
          
        }
        
              public function deleteroute()
    {
            $id=$this->uri->segment(3);
            $done=$this->db->where('id',$id)->update('routedefination',array('is_deleted'=>1));
            if($done)
                {
          $this->session->set_flashdata('msg', 'Record is Deleted!');
           redirect('Defination/routepage');
               }
                       
    }  
         /****************************************** End Route    ************************************************/
   







public function view_expense()
  {
        $data['userInfo'] = $this->userInfo;
        $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['expense']= $this->db->query("SELECT * FROM expense WHERE is_delete='0'")->result_array();
        //var_dump($data['office']);die;
        $data['page']='expense/view';
        $this->load->view('Template/main',$data);        
  }



public function add_expense()
  {


        $data['userInfo'] = $this->userInfo;
        $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['page']='expense/add';
        $this->load->view('Template/main',$data);        
  }


public function edit_expense()
  {
            $data['userInfo'] = $this->userInfo;
            
        $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
       $data['page']='expense/edit';
        $this->load->view('Template/main',$data);        
  }


public function save_expense()
  {
       if ($this->input->post()) {
        $data =array(
          'date'=>$this->input->post("date",true),
          'title'=>$this->input->post("title",true),
          'amount'=>$this->input->post("amount",true),
          'payee'=>$this->input->post("payee",true),
          'remarks'=>$this->input->post("remarks",true),
          );

          $this->db->insert('expense', $data);
          redirect('Defination/view_expense','refresh');

       }
           
  }
  
  
public function update_expense($id)
  {
   
         if ($this->input->post()) {
          $data =array(
          'date'=>$this->input->post("date",true),
          'title'=>$this->input->post("title",true),
          'amount'=>$this->input->post("amount",true),
          'payee'=>$this->input->post("payee",true),
          'remarks'=>$this->input->post("remarks",true),
          );
                  $this->db->where('id', $id);
            $this->db->update('expense', $data);
            redirect('Definition/view_expense','refresh');
  
         }
           
  }


public function delete_expense($id)
  {

  $this->db->where('id', $id);
  $this->db->delte('expense', $data);
  redirect('Definition/view_expense','refresh');

    }
  



   
 /****************************************** Start Expense Type   ************************************************/
                                
                                
       public function addexpensetype()
  {
       $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
  $data['page']='expensetype/add';
        $this->load->view('Template/main',$data);
           
  }
        
        public function savexpensetype()
  {
       $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
        if($this->input->post()){
            $data=$this->input->post();
            $field=array(
                 'name'=>$data['name'],
                 'remarks'=>$data['remarks']
                );
                $done=$this->Defination_Model->insert('expensetype',$field);
                     if($done)
                       {
                       $this->session->set_flashdata('msg', 'Record is  Added');
                       redirect('Defination/addexpensetype');
                       }
               
        }
  $data['page']='expensetype/add';
        $this->load->view('Template/main',$data);
           
  }
        
        
        
        
          public function view_expensetype()
  {
       $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
  $data['page']='expensetype/view';
        $this->load->view('Template/main',$data);
           
  }
        
        
         public function editexpensetype()
        {
         $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
          $id=$this->uri->segment(3);
          $data['edit']=$this->db->where('id',$id)->get('expensetype')->row();
          $data['page']='expensetype/edit';
          $this->load->view('Template/main',$data);
          
        }
        
         public function updateexpensetype()
        {
         $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;

            if($this->input->post())
    {
                 $field=$this->input->post();
               
              $data=array(
                    'name'=>$field['name'],
                    'remarks'=>$field['remarks']
                );
                
               
                    $done=$this->db->where('id',$field['id'])->update('expensetype',$data);
                    if($done)
                       {
                       $this->session->set_flashdata('msg', 'Record is  Updated');
                       redirect('Defination/view_expensetype');
                       }
                
                }  
          
        }
        
              public function deleteexpensetype()
    {
                  
         $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
            $id=$this->uri->segment(3);
            $done=$this->db->where('id',$id)->update('expensetype',array('is_delete'=>1));
            if($done)
                {
          $this->session->set_flashdata('msg', 'Record is Deleted!');
           redirect('Defination/view_expensetype');
               }
                       
    }  
                                
                                
                                
/****************************************** End Expense Type    ************************************************/
                                
                                
                                
  /****************************************** Start Location Type   ************************************************/
                                
                                                       
       public function addlocationtypetype()
  {
       $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
  $data['page']='locationtype/add';
        $this->load->view('Template/main',$data);
           
  }
        
        public function savelocationtype()
  {
       $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
        if($this->input->post()){
            $data=$this->input->post();
            $field=array(
                 'name'=>$data['name'],
				 'address'=>$data['address'],
				 'latitude'=>$data['latitude'],
				 'longitude'=>$data['longitude'],
                 'remarks'=>$data['remarks']
                );
                $done=$this->Defination_Model->insert('locationtype',$field);
                     if($done)
                       {
                       $this->session->set_flashdata('msg', 'Record is  Added');
                       redirect('Defination/addlocationtypetype');
                       }
               
        }
  $data['page']='locationtype/add';
        $this->load->view('Template/main',$data);
           
  }
        
        
        
        
          public function view_locationtype()
  {
       $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
  $data['page']='locationtype/view';
        $this->load->view('Template/main',$data);
           
  }
        
        
         public function eyelocation()
        {
         $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
          $id=$this->uri->segment(3);
          $data['edit']=$this->db->where('id',$id)->get('locationtype')->row();
          $data['page']='locationtype/mapview';
          $this->load->view('Template/main',$data);
          
        }
		 public function editlocationtype()
        {
         $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
          $id=$this->uri->segment(3);
          $data['edit']=$this->db->where('id',$id)->get('locationtype')->row();
          $data['page']='locationtype/edit';
          $this->load->view('Template/main',$data);
          
        }
        
         public function updatelocationtype()
        {
         $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;

            if($this->input->post())
    {
                 $field=$this->input->post();
               
              $data=array(
                    'name'=>$field['name'],
                    'remarks'=>$field['remarks']
                );
                
               
                    $done=$this->db->where('id',$field['id'])->update('locationtype',$data);
                    if($done)
                       {
                       $this->session->set_flashdata('msg', 'Record is  Updated');
                       redirect('Defination/view_locationtype');
                       }
                
                }  
          
        }
        
    public function deletelocationtype()
    {
                  
        $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;
            $id=$this->uri->segment(3);
            $done=$this->db->where('id',$id)->update('locationtype',array('is_delete'=>1));
            if($done)
                {
          $this->session->set_flashdata('msg', 'Record is Deleted!');
           redirect('Defination/view_locationtype');
               }
                       
    }          
                            
                                
                                
                                
/****************************************** End Location Type     ************************************************/
                                

















}
 
?>