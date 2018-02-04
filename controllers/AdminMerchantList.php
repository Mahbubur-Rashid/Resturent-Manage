<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminMerchantList extends CI_Controller {
    
    
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
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('AdminMerchantListModel');
    } 


	
   public function AdminMerchantList(){
        $data=array();
        $data['getOrderStatus'] = $this->AdminMerchantListModel->AdminOrderStatusview();
           //echo "<pre>";print_r($data);die;
        $data['left_nav'] = $this->load->view('header/left_nav','',true); 
        $data['main_content']=$this->load->view('admin/adminmerchantlist/admin_merchant_list',$data,true); 
        $this->load->view('master',$data);
    }

    public function AdminMerchantListDataInput(){
        
          //if(!$this->session->unset_userdata('ins_id'))echo "unset";  
        $this->session->unset_userdata('ins_id');
        $data['left_nav'] = $this->load->view('header/left_nav','',true); 
        $data['main_content']=$this->load->view('admin/adminmerchantlist/admin_merchantlist_datainput','',true); 
        $this->load->view('master',$data);
    }

     public function view(){
        
         $data['left_nav'] = $this->load->view('header/left_nav','',true); 
        $data['main_content']=$this->load->view('admin/adminmerchantlist/admin_merchantlist_datainput','',true); 
        $this->load->view('master',$data);
    }
    

     public function AdminResInfoDataAdd(){

        if($this->session->ins_id){

            if(!empty($_POST)){
                   
                $this->form_validation->set_rules('rtsulg','rtsulg','trim|required');
                $this->form_validation->set_rules('rtname','rtname','trim|required');
                $this->form_validation->set_rules('rtphone','rtphone','trim|required');
                $this->form_validation->set_rules('contactname','contactname','trim|required');

                 if($this->form_validation->run()==FALSE){
                    $this->view();
                 }

                else{
                     $data['rtsulg'] = $this->input->post('rtsulg');  
                     $data['rtname'] = $this->input->post('rtname');
                     $data['rtphone'] = $this->input->post('rtphone');  
                     $data['contactname'] = $this->input->post('contactname');
                     $data['contactphone'] = $this->input->post('contactphone');  
                     $data['contactemail'] = $this->input->post('contactemail');
                     $data['country'] = $this->input->post('country');  
                     $data['city'] = $this->input->post('city');
                     $data['postcode'] = $this->input->post('postcode');  
                     $data['state'] = $this->input->post('state');
                     $data['pickup'] = $this->input->post('pickup');
                     //
                      $data['staddress'] = $this->input->post('staddress');  

                    
                     $tbl_update='tbl_list';
                     if($this->AdminMerchantListModel->resUpdate($tbl_update,$data)){                    
                     $this->view();
                     }
                      
                }     

            }
        }    

        else{    
             if(!empty($_POST)){
                   
                $this->form_validation->set_rules('rtsulg','rtsulg','trim|required');
                $this->form_validation->set_rules('rtname','rtname','trim|required');
                $this->form_validation->set_rules('rtphone','rtphone','trim|required');
                $this->form_validation->set_rules('contactname','contactname','trim|required');

                 if($this->form_validation->run()==FALSE){
                    $this->view();
                }

                else{
                   
                      $data['rtsulg'] = $this->input->post('rtsulg');  
                     $data['rtname'] = $this->input->post('rtname');
                     $data['rtphone'] = $this->input->post('rtphone');  
                     $data['contactname'] = $this->input->post('contactname');
                     $data['contactphone'] = $this->input->post('contactphone');  
                     $data['contactemail'] = $this->input->post('contactemail');
                     $data['country'] = $this->input->post('country');
                      $data['staddress'] = $this->input->post('staddress');    
                     $data['city'] = $this->input->post('city');
                     $data['postcode'] = $this->input->post('postcode');  
                     $data['state'] = $this->input->post('state');
                     $data['pickup'] = $this->input->post('pickup');
                    //$this->session->set_flashdata('SUCCESS','Input Successfully');
                     //print_r($data);die;
                    
                     
                     $tbl='tbl_list';

                      $ins_id=$this->AdminMerchantListModel->AdminLoginInformationDataAdd($tbl,$data);
                   
                      $this->session->ins_id=$ins_id;
                      //echo $ins_id;
                       //redirect('merchantlist/do');
                       //echo $ins_id;die;
                    
                        if($ins_id)$this->view();
                
                }
            }
       }
    }

      public function loginInfo(){

       

            if(!empty($_POST)){
                   
                $this->form_validation->set_rules('username','username','trim|required');
                $this->form_validation->set_rules('email','email','trim|required');
                 $this->form_validation->set_rules('password','password','trim|required');

                 if($this->form_validation->run()==FALSE){
                    $this->view();
                 }

                else{
                     $data['username'] = $this->input->post('username');  
                     $data['email'] = $this->input->post('email'); 
                     $data['password'] = md5($this->input->post('password'));
                      //print_r($data);die;
                    
                     if($this->AdminMerchantListModel->loginInfo($data)){                    
                     $this->view();
                     }
                      
                }     

            }
           

       
    }
     public function memberShip(){

        if($this->session->ins_id){

            if(!empty($_POST)){
                   
               
                     $data['pkgname'] = $this->input->post('pkgname');  
                     $data['expdate'] = $this->input->post('expdate');
                      //print_r($data);die;
                     $tbl_update='tbl_list';
                     if($this->AdminMerchantListModel->memUpdate($tbl_update,$data)){                    
                     $this->view();
                     }
                      
                }     

            }
           

        else{    
             if(!empty($_POST)){
                   
                
                     $data['pkgname'] = $this->input->post('pkgname');  
                     $data['expdate'] = $this->input->post('expdate');
                    //$this->session->set_flashdata('SUCCESS','Input Successfully');
                     //print_r($data);die;
                    
                     $tbl='tbl_list';

                      $ins_id=$this->AdminMerchantListModel->AdminLoginInformationDataAdd($tbl,$data);
                   
                      $this->session->ins_id=$ins_id;
                      //echo $ins_id;
                       //redirect('merchantlist/do');
                       //echo $ins_id;die;
                    
                        if($ins_id)$this->view();
                
                }
            }
       
    }

     public function featuredAdd(){

        if($this->session->ins_id){

            if(!empty($_POST)){
                   
                

                
                     $data['check5'] = $this->input->post('check5');  
                     //print_r($data);die;
                    
                     if($this->AdminMerchantListModel->featuredUpdate($data)){                    
                     $this->view();
                     }
                      
                }     

            
        }    

        else{    
             if(!empty($_POST)){
                   
                 $data['check5'] = $this->input->post('check5');  
                    
                     $tbl='tbl_list';

                      $ins_id=$this->AdminMerchantListModel->AdminLoginInformationDataAdd($tbl,$data);
                   
                      $this->session->ins_id=$ins_id;
                      //echo $ins_id;
                       //redirect('merchantlist/do');
                       //echo $ins_id;die;
                    
                        if($ins_id)$this->view();
                
                }
            
       }
    }

     public function AdminListMapDataAdd(){

        if($this->session->ins_id){

            if(!empty($_POST)){
                   
                $this->form_validation->set_rules('latitude','latitude','trim|required');
                $this->form_validation->set_rules('longitude','longitude','trim|required');

                 if($this->form_validation->run()==FALSE){
                    $this->view();
                 }

                else{
                     $data['latitude'] = $this->input->post('latitude');  
                     $data['longitude'] = $this->input->post('longitude');
                     $tbl_update='tbl_list';
                     if($this->AdminMerchantListModel->listUpdate($tbl_update,$data)){                    
                     $this->view();
                     }
                      
                }     

            }
        }    

        else{    
             if(!empty($_POST)){
                   
                $this->form_validation->set_rules('latitude','latitude','trim|required');
                $this->form_validation->set_rules('longitude','longitude','trim|required');

                 if($this->form_validation->run()==FALSE){
                    $this->view();
                }

                else{
                   
                     $data['latitude'] = $this->input->post('latitude');  
                     $data['longitude'] = $this->input->post('longitude');
                    //$this->session->set_flashdata('SUCCESS','Input Successfully');
                     //print_r($data);die;
                    
                     $tbl='tbl_list';

                      $ins_id=$this->AdminMerchantListModel->AdminLoginInformationDataAdd($tbl,$data);
                   
                      $this->session->ins_id=$ins_id;
                      //echo $ins_id;
                       //redirect('merchantlist/do');
                       //echo $ins_id;die;
                    
                        if($ins_id)$this->view();
                
                }
            }
       }
    }
    public function AdminListComDataAdd(){
         
       
         $data['check1'] = $this->input->post('check1');  
         $data['check2'] = $this->input->post('check2');
          $data['check3'] = $this->input->post('check3');  
         $data['check4'] = $this->input->post('check4');
        //$this->session->set_flashdata('SUCCESS','Input Successfully');
         //print_r($data);die;

         $tbl='admin_list_com';
        if($this->AdminMerchantListModel->AdminLoginInformationDataAdd($tbl,$data))
            $this->AdminMerchantListDataInput();
        
          
      
    }

     public function ListEdit($id){
       // echo $id;
         $data['result']=$this->AdminMerchantListModel->ListEdit($id); 
         //echo "<pre>";print_r($data);die;
        $data['main_content']=$this->load->view('admin/adminmerchantlist/admin_merchant_list_edit',$data,true); 
        $this->load->view('master',$data);
    }

     public function listDelete($id){
       // echo $id;
       if($this->AdminMerchantListModel->listDelete($id)){
        redirect('merchantlist');
       }

        
    }
	
    

	
}
