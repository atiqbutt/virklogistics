<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {

        public function __construct() 
        {
        parent::__construct();
        
         $this->load->model('generic_model');
        $this->load->model('Generic_model');
        $this->load->model('user_model');
        $this->load->model('load_model');
        $this->load->model('Report_model');
        $this->user_model->check_login("admin");
        $this->userInfo = $this->user_model->userInfo("first_name,last_name");

        }
		
		
		
		
		
        public function index()
        {
        $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;      
       

        $data['page']='product/list';
        $this->load->view('Template/main',$data);

        }

        public function trip_reports()
        {
        $data['menu'] = $this->load_model->menu();
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo; 
        $data['data']=$this->Report_model->get_all_trip();
        
        $data['page']='report/list';
        $this->load->view('Template/main',$data);

        }

    }

       