<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Defination_Model extends CI_Model {

	

	public function insert($t="",$value=array())
	{
	return $this->db->insert($t,$value);
	}


         public function getcontractorcnic($search)
{
   
    $query = $this->db->query("SELECT * FROM contractorinformation where cnic like '$search' ");
    return $query->row();
}


 public function getcontactorcontact($search)
{
   
    $query = $this->db->query("SELECT * FROM contractorinformation where cpnumber like '$search' ");
    return $query->row();
}
 



public function editgetemailagent($search,$id)
{
    $query = $this->db->query("SELECT * FROM agentinformation 
where email like '$search' && id!='$id'");
    return $query->row();
}


public function editgetcnicagent($search,$id)
{
    $query = $this->db->query("SELECT * FROM agentinformation
where cnic like '$search' && id!='$id'");
    return $query->row();
}


public function editgetphoneagent($search,$id)
{
    $query = $this->db->query("SELECT * FROM agentinformation where number like '$search' && id!='$id'");
    return $query->row();
}




    public function getagentcnic($search)
{
   
    $query = $this->db->query("SELECT * FROM agentinformation where cnic like '$search' ");
    return $query->row();
}
 

  public function getphoneagent($search)
{
    $query = $this->db->query("SELECT * FROM agentinformation where number like '%$search%' ");
    return $query->row();
}


  public function getphonecomapny($search)
{
    $query = $this->db->query("SELECT * FROM customerinformation where number like '$search' ");
    return $query->row();
}



  public function getphonecontractor($search)
{
    $query = $this->db->query("SELECT * FROM contractorinformation where number like '$search'");
    return $query->row();
}




public function editgetphonecontractor($search,$id)
{
    $query = $this->db->query("SELECT * FROM contractorinformation where number like '$search' && id!='$id'");
    return $query->row();
}




public function editgetemailcontractor($search,$id)
{
    $query = $this->db->query("SELECT * FROM contractorinformation where email like '$search' && id!='$id'");
    return $query->row();
}


public function editgetcniccontractor($search,$id)
{
    $query = $this->db->query("SELECT * FROM contractorinformation where cnic like '$search' && id!='$id'");
    return $query->row();
}




public function editgetcnichelper($search,$id)
{
    $query = $this->db->query("SELECT * FROM helperinformation 
where cnic like '$search' && id!='$id'");
    return $query->row();
}


public function editgetdriverhelper($search,$id)
{
    $query = $this->db->query("SELECT * FROM helperinformation 
where dl like '$search' && id!='$id'");
    return $query->row();
}


public function editgetphonehelper($search,$id)
{
    $query = $this->db->query("SELECT * FROM helperinformation where number like '$search' && id!='$id'");
    return $query->row();
}




 public function getphonehelper($search)
{
    $query = $this->db->query("SELECT * FROM helperinformation where number like '$search' ");
    return $query->row();
}


 public function gethelpercnic($search)
{
   
    $query = $this->db->query("SELECT * FROM helperinformation
 where cnic like '$search' ");
    return $query->row();
}







public function editgetcnicdriver($search,$id)
{
    $query = $this->db->query("SELECT * FROM driverinformation

where cnic like '$search' && id!='$id'");
    return $query->row();
}


public function editgetdriverdriver($search,$id)
{
    $query = $this->db->query("SELECT * FROM driverinformation

where dl like '$search' && id!='$id'");
    return $query->row();
}


public function editgetphonedriver($search,$id)
{
    $query = $this->db->query("SELECT * FROM driverinformation
where number like '$search' && id!='$id'");
    return $query->row();
}







public function getphonedriver($search)
{
    $query = $this->db->query("SELECT * FROM driverinformation
 where number like '$search' ");
    return $query->row();
}


 public function gethelperdriver($search)
{
   
    $query = $this->db->query("SELECT * FROM helperinformation
 where dl like '$search' ");
    return $query->row();
}



 public function getdriverdriver($search)
{
   
    $query = $this->db->query("SELECT * FROM driverinformation
 where dl like '$search' ");
    return $query->row();
}


 public function getagentcontact($search)
{
   
    $query = $this->db->query("SELECT * FROM agentinformation where cpnumber like '$search'");
    return $query->row();
}
 




	 public function getemail($search)
{
   
    $query = $this->db->query("SELECT * FROM agentinformation where email like '$search' ");
    return $query->result_array();
}

     public function getemailcontractor($search)
{
   
    $query = $this->db->query("SELECT * FROM contractorinformation where email like '$search' ");
    return $query->result_array();
}
    
    
    
    
    
    
public function editgetemailcompany($search,$id)
{
    $query = $this->db->query("SELECT * FROM customerinformation
where email like '$search' && id!='$id'");
    return $query->row();
}


public function editgetcniccompany($search,$id)
{
    $query = $this->db->query("SELECT * FROM customerinformation
where cnic like '$search' && id!='$id'");
    return $query->row();
}


public function editgetphonecompany($search,$id)
{
    $query = $this->db->query("SELECT * FROM customerinformation where number like '$search' && id!='$id'");
    return $query->row();
}


    
    
    
    
    
    
    
    
    
    
     public function getemailcompany($search)
{
   
    $query = $this->db->query("SELECT * FROM customerinformation where email like '$search' ");
    return $query->result_array();
}   


 public function getcompanycnic($search)
{
   
    $query = $this->db->query("SELECT * FROM customerinformation where cnic like '$search' ");
    return $query->row();
}
 
 public function getcompanycontact($search)
{
   
    $query = $this->db->query("SELECT * FROM customerinformation where cpnumber like '$search' ");
    return $query->row();
}
 


 public function getdrivercnic($search)
{
   
    $query = $this->db->query("SELECT * FROM driverinformation
where cnic like '$search' ");
    return $query->row();
}
 
   


	public function viewhelper()
	{
        return $this->db->select()->from('helperinformation')->where('is_deleted',0)->order_by("id", "desc")->get()->result_array();
	}	
        
        public function viewcustomer()
	{
        return $this->db->select()->from('customerinformation')->where('is_deleted',0)->order_by("id", "desc")->get()->result_array();
	}	
        
        
         public function viewagent()
	{
        return $this->db->select()->from('agentinformation')->where('is_deleted',0)->order_by("id", "desc")->get()->result_array();
	}	
    
        public function viewdriver()
	{
        return $this->db->select()->from('driverinformation')->where('is_deleted',0)->order_by("id", "desc")->get()->result_array();
	}	
	
         public function viewroute()
	{
        return $this->db->select()->from('routedefination')->where('is_deleted',0)->order_by("id", "desc")->get()->result_array();
	}	
        
         public function viewcontractor()
	{
        return $this->db->select()->from('contractorinformation')->where('is_deleted',0)->order_by("id", "desc")->get()->result_array();
	}	
        
        


}