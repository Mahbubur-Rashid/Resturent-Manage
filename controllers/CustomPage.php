<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomPage extends CI_Controller {
    
    
    function __construct()
    {
        parent::__construct();				
        if($this->session->is_admin == 0)
        {
            redirect('login');
        }
        $this->load->model('CustomPageModel');
    }   
	
    public function pageView(){
        $data['res']=$this->CustomPageModel->pageView();
        $data['left_nav'] = $this->load->view('header/left_nav','',true); 
        $data['main_content']=$this->load->view('admin/custompage/page_view',$data,true); 
        $this->load->view('master',$data);
    }

     public function addPageView(){
         $this->session->unset_userdata('ins_id');
        $data['left_nav'] = $this->load->view('header/left_nav','',true); 
        $data['main_content']=$this->load->view('admin/custompage/add_page_view','',true); 
        $this->load->view('master',$data);
    }

  

     public function addData(){

        if($this->session->ins_id){

            if(!empty($_POST)){
                   
                  $this->form_validation->set_rules('pageName','pageName','trim|required');
                $this->form_validation->set_rules('content','content','trim|required');
                 $this->form_validation->set_rules('metaDes','metaDes','trim|required');
                 $this->form_validation->set_rules('metaKey','metaKey','trim|required');


                 if($this->form_validation->run()==FALSE){
                    $this->pageView();
                 }

                else{
                      $data['pageName'] = $this->input->post('pageName');  
                     $data['icon'] = $this->input->post('icon');
                     $data['content'] = $this->input->post('content');  
                     $data['seoTi'] = $this->input->post('seoTi');
                     $data['metaDes'] = $this->input->post('metaDes');  
                     $data['metaKey'] = $this->input->post('metaKey');
                     $data['status'] = $this->input->post('status');                   
                    //print_r($data);die;   
                     if($this->CustomPageModel->resUpdate($data)){                    
                     $this->pageView();
                     }
                      
                }     

            }
        }    

        else{    
             if(!empty($_POST)){
                   
                 $this->form_validation->set_rules('pageName','pageName','trim|required');
                $this->form_validation->set_rules('content','content','trim|required');
                 $this->form_validation->set_rules('metaDes','metaDes','trim|required');
                 $this->form_validation->set_rules('metaKey','metaKey','trim|required');


                 if($this->form_validation->run()==FALSE){
                    $this->pageView();
                }

                else{
                   
                      $data['pageName'] = $this->input->post('pageName');  
                     $data['icon'] = $this->input->post('icon');
                     $data['content'] = $this->input->post('content');  
                     $data['seoTi'] = $this->input->post('seoTi');
                     $data['metaDes'] = $this->input->post('metaDes');  
                     $data['metaKey'] = $this->input->post('metaKey');
                     $data['status'] = $this->input->post('status');
                     //print_r($data);die;                  
                      $ins_id=$this->CustomPageModel->addData($data);
                   
                      $this->session->ins_id=$ins_id;
                     
                        if($ins_id)$this->pageView();
                
                }
            }
       }
    }

    public function addPageViews(){
        $data=array();
        //echo $this->session->ins_id;
        $data['left_nav'] = $this->load->view('header/left_nav','',true); 
        $data['main_content']=$this->load->view('admin/custompage/custom_link','',true); 
        $this->load->view('master',$data);
    }
/*
    public function addLinkData(){
         $data['linkName'] = $this->input->post('linkName');  
         $data['link'] = $this->input->post('link');
         $data['statuss'] = $this->input->post('statuss'); 
         $this->CustomPageModel->addData1($data); 
         redirect('custom-page');
        
    }*/

   public function addLinkData(){

        if($this->session->ins_id){

            if(!empty($_POST)){
                   
                  $this->form_validation->set_rules('linkName','linkName','trim|required');
                $this->form_validation->set_rules('link','link','trim|required');
                 $this->form_validation->set_rules('statuss','statuss','trim|required');
                


                 if($this->form_validation->run()==FALSE){
                    $this->pageView();
                 }

                else{
                      $data['linkName'] = $this->input->post('linkName');  
                     $data['link'] = $this->input->post('link');
                     $data['statuss'] = $this->input->post('statuss');                    
                    //print_r($data);die;   
                     if($this->CustomPageModel->linkUpdate($data)){                    
                     $this->pageView();
                     }
                      
                }     

            }
        }    

        else{    
             if(!empty($_POST)){
                 $this->form_validation->set_rules('linkName','linkName','trim|required');
                $this->form_validation->set_rules('link','link','trim|required');
                 $this->form_validation->set_rules('statuss','statuss','trim|required');

                 if($this->form_validation->run()==FALSE){
                    $this->pageView();
                }

                else{
                   
                      $data['linkName'] = $this->input->post('linkName');  
                     $data['link'] = $this->input->post('link');
                     $data['statuss'] = $this->input->post('statuss'); 
                     //print_r($data);die;                  
                      $ins_id=$this->CustomPageModel->addData($data);
                   
                      $this->session->ins_id=$ins_id;
                     
                        if($ins_id)$this->pageView();
                
                }
            }
       }
    }


    public function deleteData($id){
        //echo $id;die;
       if($this->CustomPageModel->deleteData($id)){
        redirect('custom-page');
       }
    
     }

     public function editData($id){
       // echo $id;
         $data['result']=$this->CustomPageModel->dataEdit($id); 
         //echo "<pre>";print_r($data);die;
         $data['left_nav'] = $this->load->view('header/left_nav','',true); 
        $data['main_content']=$this->load->view('admin/custompage/page_edit',$data,true); 
        $this->load->view('master',$data);
    }
	

    public function saveData(){

       

            if(!empty($_POST)){
                   
                $this->form_validation->set_rules('pageName','pageName','trim|required');
                $this->form_validation->set_rules('content','content','trim|required');
                $this->form_validation->set_rules('metaDes','metaDes','trim|required');
                $this->form_validation->set_rules('metaKey','metaKey','trim|required');


                 if($this->form_validation->run()==FALSE){
                    $this->pageView();
                 }

                else{
                      $data['pageName'] = $this->input->post('pageName');  
                     $data['icon'] = $this->input->post('icon');
                     $data['content'] = $this->input->post('content');  
                     $data['seoTi'] = $this->input->post('seoTi');
                     $data['metaDes'] = $this->input->post('metaDes');  
                     $data['metaKey'] = $this->input->post('metaKey');
                     $data['status'] = $this->input->post('status');
                      $data['linkName'] = $this->input->post('linkName');  
                     $data['link'] = $this->input->post('link');                   
                    //print_r($data);die;   
                     if($this->CustomPageModel->saveData($data)){                    
                     $this->pageView();
                     }
                      
                }     

            }
            

         
       
    }

    /**/
    public function autocomplete()
    {
     // load model
         

         $search_data = $this->input->post('search_data');

         $result = $this->CustomPageModel->get_autocomplete($search_data);

         if (!empty($result))
         {
              foreach ($result as $row):
                   //echo "<li><a href='#'>" . $row->seoTi . "</a></li>";

                    echo"<table  class='table  table-striped table-bordered table-hover dataTable no-footer' id='editable_table' role='grid' >
                      <thead>
                        <tr>
                          <th scope='col'>ID</th>
                          <th scope='col'>Slug</th>
                          <th scope='col'>Page Title</th>
                          <th scope='col'>Content</th>
                          <th scope='col'>Action</th>         
                        </tr>
                      </thead>
                      <tbody>       
                        <tr>
                          <td >".$row->id."</td>
                           <td>".$row->link."</td>
                          
                         <td >".$row->seoTi."</td>
                          <td>".$row->content."</td>
                           <td><a href='custom-page/edit/".$row->id."'>Edit</a>|<a href='custom-page/delete/".$row->id."onClick='return confirm('Are you sure you want to delete?')>Delete</a></td>
                       <?php }?>
                        </tr>
                      </tbody>
                         
                </table>";
              endforeach;
         }
         else
         {
               echo "<li> <em> Not found ... </em> </li>";
         }
     }


	
}
