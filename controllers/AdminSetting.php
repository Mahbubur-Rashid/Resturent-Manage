<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminSetting extends CI_Controller {
    
    
    function __construct()
    {
        parent::__construct();				
        if($this->session->is_admin == 0)
        {
            redirect('login');
        }
        $this->load->model('AdminSettingModel');
    }   
	
    public function view(){
        $data['result']         = $this->AdminSettingModel->setResult();
        $data['left_nav'] = $this->load->view('header/left_nav','',true); 
        $data['main_content']   =$this->load->view('admin/adminsetting/setting_view',$data,true); 
        $this->load->view('master',$data);
    }

    public function dataAdd(){

        if(!empty($_FILES['picture']['name'])){ 

                $config['upload_path'] = 'uploads/images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['picture']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library( 'upload', $config );
                $this->upload->initialize( $config );
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }
                else{
                    $picture = '';
                }
        }
        else{

                // $data = $this->AdminSettingModel->setResult();
                // $path = $data->dlogo; 
                // echo $path;
                // echo '<pre>'; var_dump($data->dlogo);die;
                $picture = '';
        }






         $data['title'] = $this->input->post('title');  
         $data['country'] = $this->input->post('country');
         $data['address'] = $this->input->post('address'); 
         $data['phnum'] = $this->input->post('phnum'); 
         $data['email'] = $this->input->post('email');
         $data['gmail'] = $this->input->post('gmail');  
         $data['currency'] = $this->input->post('currency');
         $data['position'] = $this->input->post('position');  
         $data['decimal'] = $this->input->post('decimal');
          if (!empty($_FILES['picture']['name']))
            { $data['dlogo'] = $picture; }

        

        // $data['dlogo'] = $this->input->post('dlogo');
        //  $data['mlogo'] = $this->input->post('mlogo'); 

        //echo "<pre>";print_r($data);die;
        
        //$this->AdminSettingModel->dataAdd($data);  
        $this->AdminSettingModel->update($data);                 
        redirect('setting');
    }
	


	
}
