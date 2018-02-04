<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDishes extends CI_Controller {
    
    
    function __construct()
    {
        parent::__construct();				
        if($this->session->is_admin == 0)
        {
            redirect('login');
        }
        $this->load->model('AdminDishesModel');
       /* $this->load->helper(array('form', 'url'));
         $this->load->library('upload');*/
    }   
	
   public function AdminDishes(){
        $data['res'] = $this->AdminDishesModel->view_images();
           // echo "<pre>";print_r($data);die;
        $data['left_nav'] = $this->load->view('header/left_nav','',true); 
        $data['main_content']=$this->load->view('admin/admindishes/admin_dishes',$data,true); 
        $this->load->view('master',$data);
    }

    public function dataInput(){
        
        $data['left_nav'] = $this->load->view('header/left_nav','',true); 
        $data['main_content']=$this->load->view('admin/admindishes/admin_dishes_datainput','',true); 
        $this->load->view('master',$data);
    }

    public function dataAdd(){
      /*$this->form_validation->set_rules('category_name','category_name','trim|required');
        if($this->form_validation->run()==FALSE){
            $this->AddCategory();
        }else{
        $data['categoryName'] = $this->input->post('category_name');        
        if($this->EmployeeModel->Add_category($data))
        redirect('all-categorys');}*/     

            $data['dishName'] = $this->input->post('dishName');  
            $data['status'] = $this->input->post('status');


            $config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] = 'gif|jpg|png'; 
            $config['encrypt_name'] = TRUE; 
            $this->load->library('upload', $config);

            

            $this->upload->do_upload('image');
            $imageName=$this->upload->data();
            $data['image']=$imageName['file_name'];
            $data['date']     = date('Y/m/d');


        //echo "<pre>";print_r($data);die;

        $this->AdminDishesModel->DataAdd($data);
        redirect('admin-dishes');
       //$data['getOrderStatus'] = $this->AdminOrderStatusModel->AdminOrderStatusView();
       /* $data['main_content']=$this->load->view('admin/admindishes/admin_dishes_datainput',$data,true); 
        $this->load->view('master',$data);  */
      
    }

   public function dataEdit($id){
       // echo $id;
         $data['result']=$this->AdminDishesModel->dataEdit($id); 
         //echo "<pre>";print_r($data);die;
        $data['left_nav'] = $this->load->view('header/left_nav','',true); 
        $data['main_content']=$this->load->view('admin/admindishes/dishes_edit',$data,true); 
        $this->load->view('master',$data);
    }

     public function dataDelete($id){
        echo $id;
       if($this->AdminDishesModel->dataDelete($id)){
        redirect('admin-dishes');
       }
	
     }

     public function dataSave(){
       $data['dishName'] = $this->input->post('dishName');  
      
          $data['status'] = $this->input->post('status');
          
            $data['id'] = $this->input->post('id');
          $config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] = 'gif|jpg|png'; 
            $config['encrypt_name'] = TRUE; 
            $this->load->library('upload', $config);

            

            $this->upload->do_upload('image');
            $imageName=$this->upload->data();
            $data['image']=$imageName['file_name'];

            //echo "<pre>";print_r($data);die;  

        if($this->AdminDishesModel->dataSave($data))
        redirect('admin-dishes');
       
        
    }



     public function myautocomplete()
    {

         $search_data = $this->input->post('search_data');

         $tbl_name  = 'tbl_dishes';
         $src_col   = 'dishName';
         $src_col2  = 'image';
         $src_col3  = 'id';

         $this->load->model('DatabaseModel'); 
         $result = $this->DatabaseModel->get_autocomplete3( $tbl_name, $src_col,
                                              $src_col2, $src_col3, $search_data);

         if (!empty($result))
         {
              
                   //echo "<li><a href='#'>" . $row->seoTi . "</a></li>";

                    echo"<table  class='table  table-striped table-bordered table-hover dataTable no-footer' id='editable_table' role='grid' >
                      <thead>
                        <tr>
                          <th scope='col'>ID</th>
                          <th scope='col'>Dish Name</th>
                          <th scope='col'>Icon</th>        
                        </tr>
                      </thead>
                      <tbody>";
                    foreach ($result as $row):     
                       echo " <tr>
                              <td >".$row->id."</td>
                              <td>".$row->dishName."</td>

 <td><img src=".base_url()."/assets/uploads/".$row->image." style='height: 70px; width: 70px;'></td>
                       <?php }?>
                        </tr>";
                    endforeach;  

                  echo  "</tbody>
                         
                </table>";
             
         }
         else
         {
               echo "<li> <em> Not found ... </em> </li>";
         }
     } 



}
