<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MerchantController extends CI_Controller {
    
    
    function __construct()
    {
        parent::__construct();				
        if($this->session->email == "")
        {
            redirect('login');
        }
        $this->load->model('MerchantModel');
    }   
	
    public function MerchantInfo(){
        $data=array();
        $id=$this->session->email;
        //echo $id;die;
         $data['result']=$this->MerchantModel->ListEdit($id); 
         //echo "<pre>";print_r($data);die;
        $data['left_nav'] = $this->load->view('header/left_nav','',true); 
        $data['main_content']=$this->load->view('merchant/merchant_info',$data,true); 
        $this->load->view('master',$data);
    }

    public function MerchantOrderStatus(){
        $data['left_nav'] = $this->load->view('header/left_nav','',true); 
        $data['main_content']=$this->load->view('merchant/merchant_orderstatus','',true); 
        $this->load->view('master',$data);
    }
	


	
}
