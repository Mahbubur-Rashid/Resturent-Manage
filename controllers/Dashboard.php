<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    
    function __construct()
    {
        parent::__construct();				
        if($this->session->email == "")
        {
            redirect('login');
        }
        $this->load->model('LoginModel','LoginModel');
    }    
    
    public function index()
    {     
            // $limit = 20;
            // $this->load->model('DatabaseModel');
            // $tbl_nam = 'cuisine';
            // $ord_col =  'cuisine_id';
            // $data['cuisine_list'] = $this->DatabaseModel->show( $tbl_nam, $limit, $ord_col);
            // $this->load->view('item',$data); 
        $data['left_nav'] = $this->load->view('header/left_nav','',true); 
        $data['main_content'] = $this->load->view('home_content','',true); 
       // print_r();die;
        $this->load->view('master',$data);
    }

      public function item()
    {     
            $limit = 20;
            $this->load->model('DatabaseModel');
            $tbl_nam = 'cuisine';
            $ord_col =  'cuisine_id';
            $data['cuisine_list'] = $this->DatabaseModel->show( $tbl_nam, $limit, $ord_col);
            $this->load->view('item',$data); 
        // $data['main_content'] = $this->load->view('home_content','',true); 
        // $t      his->load->view('master',$data);
    }


    //   public function merchant()
    // {    echo "hi afdas"; die;
    //     $this->load->model('admin_model');
    //     $data['merchant_list']=$this->admin_model->get_merchant_list();
    //     $this->load->view('admin_template/headerlink');
    //     $this->load->view('admin_template/leftnav');
    //     $this->load->view('admin_template/headermenu');
    //     $this->load->view('admin/merchant',$data);
    //     $this->load->view('admin_template/footerlink'); 


    // }
}
