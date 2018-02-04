<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
    {
        parent::__construct();				
        $this->load->model('LoginModel','LoginModel');
    }    
	
	public function index()
	{
        		
          if($this->session->email == '')  {

                if(!empty($_POST))
                {
                    $email = $this->input->post('email');
                    $password = $this->input->post('password');
                    $result = $this->LoginModel->login($email,$password);
                    if($result -> num_rows() > 0)
                    {
                        foreach ($result->result() as $row)
                        {
                            $this->session->userid = $row->id;
                            $this->session->email =  $row->email;
                            $this->session->is_admin =  $row->is_admin;
                            redirect('dashboard');
                        }
                    }
                    else
                    {   
                        $this->session->set_flashdata('ERR_MSG','Email and Password is Wrong');
                        $this->load->view('login');
                    }
                }
        		else
        		{
        			$this->load->view('login');
        		}

        } 
        else
        {
          redirect('dashboard');
        }     
	}


	
	public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
