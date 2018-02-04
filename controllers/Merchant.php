<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merchant extends CI_Controller {

    public function __construct()
    {
        parent::__construct();              
        if($this->session->email == " ")
        {
            redirect('login');
        }
        
    }
    public function merchant_list()
    {   //echo "hi model"; die;
        $this->load->model('MerchantModel');
        $data1['merchant_list'] = $this->MerchantModel->get_merchant_list();
        // echo "<pre>"; var_dump($data1);die;
        $data=array(); 
        $data['main_content']=$this->load->view('admin/merchant/list',$data1,true); 
        $this->load->view('master',$data);
    }
    public function merchant_add()
    {   echo "hi merchant_add"; die;
        $data=array(); 
        $data['main_content']=$this->load->view('admin/merchant/add',$data1,true); 
        $this->load->view('master',$data);
    }


}
