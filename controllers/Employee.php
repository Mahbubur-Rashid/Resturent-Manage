<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
    
    
    function __construct()
    {
        parent::__construct();				
        if($this->session->email == "")
        {
            redirect('login');
        }
        if($this->session->is_admin == 0)
        {
            redirect('login');
        }
        $this->load->model('EmployeeModel','EmployeeModel');
    }   
	
}
