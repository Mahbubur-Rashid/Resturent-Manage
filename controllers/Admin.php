<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

// class Admin extends CI_Controller {

//     public function __construct()
//     {
//         parent::__construct();              
//         if($this->session->email == "")
//         {
//             redirect('login');
//         }
//         $this->load->model('LoginModel','LoginModel');
//     }
//     public function index()
//     {    echo "hi index"; die;
       
//     }

//     public function merchant()
//     {   //echo "hi model"; die;
//         $this->load->model('admin_model');
//         $data1['merchant_list']=$this->admin_model->get_merchant_list();
//         // echo "<pre>"; var_dump($data1);die;
//         $data=array(); 
//         $data['main_content']=$this->load->view('admin/merchant',$data1,true); 
//         $this->load->view('master',$data);
//     }

//     public function packages()
//     {    
//         //echo "hi packages"; die;

//         $this->load->model('admin_model');
//         $data1['packages_list']=$this->admin_model->get_packages_list();
//         //echo "<pre>"; var_dump($data1);die;
//         $data=array(); 
//         $data['main_content']=$this->load->view('admin/packages',$data1,true); 
//         $this->load->view('master',$data);

//     }

// }
