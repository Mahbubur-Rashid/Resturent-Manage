<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminLanguage extends CI_Controller {

    public function __construct()
    {
        //$this->load->library('form_validation');
        parent::__construct();
        
        if($this->session->is_admin == 0)
        {
            redirect('login');
        }
    }
    public function language_list()
    {   
        // echo "hi AdminCuisine";die;
        // die; 
      $data['left_nav'] = $this->load->view('header/left_nav','',true);  
      $data['main_content']=$this->load->view('admin/language/list','',true); 
      $this->load->view('master',$data);




    }

 

}
