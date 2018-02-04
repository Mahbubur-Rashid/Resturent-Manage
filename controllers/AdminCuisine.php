<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminCuisine extends CI_Controller {

    public function __construct()
    {
        //$this->load->library('form_validation');
        parent::__construct();
        
        if($this->session->is_admin == 0)
        {
            redirect('login');
        }
    }
    public function cuisine_list()
    {   
        //echo "hi AdminCuisine";die;
        //die;
        $data['pack_limit'] = $this->input->post('pack_limit');

        $limit = $data['pack_limit'];
        if($limit == null){
             $limit=10;
        }

        $this->load->model('DatabaseModel');
        $tbl_nam = 'cuisine';
        $ord_col =  'cuisine_id';
        $data['cuisine_list'] = $this->DatabaseModel->show( $tbl_nam, $limit, $ord_col);

        $data['left_nav'] = $this->load->view('header/left_nav','',true); 
        $data['main_content']=$this->load->view('admin/cuisine/list',$data,true); 
        $this->load->view('master',$data);

    }
    public function show()
    {  // echo "hi packagesAdd56456"; die;

        $data['left_nav'] = $this->load->view('header/left_nav','',true); 
        $data['main_content']=$this->load->view('admin/cuisine/add','',true); 
        $this->load->view('master',$data);
    }


    public function add()
    {
          //echo "fkasld fadmin order222"; die;
        $this->form_validation->set_rules('cuisine_name', 'cuisine_name', 'trim|required');
    
        if( $this->form_validation->run() == false ){
            //$this->session->set_flashdata('message2', 'Data Not Inserted, Input Proper Data');
            //echo "not valid data"; die;
             //redirect('cuisineAdd'); 
             $this->show();
        } 
        else 
        {
                $data['cuisine_name']     =  $this->input->post('cuisine_name');
                $data['cuisine_date']     = date('Y/m/d');
                //var_dump($data);die;
                 
                $tbl = 'cuisine';
                $this->load->model('DatabaseModel'); 
                $id = $this->DatabaseModel->add( $data, $tbl);
                // echo $id; die;
                    if( $id ){
                         //echo "inserted"; die;
                        $this->session->set_flashdata('message', '<strong>Well done!</strong> New Cuisine Added.');
                        //echo "just before show";die;
                        redirect ('AdminCuisine/show');
                    }
                    else{
                        //echo "not inserted";
                        $this->session->set_flashdata('message2', 'Data Not Inserted, Input Proper Data');
                        redirect ('AdminCuisine/show');
                    }

        }

    }




    public function del( $id = '')
    {   
       
       $tbl_name = 'cuisine';
       $tbl_col  = 'cuisine_id';

       $tId                      =  $this->input->post('tId');
       //$tId = $id;
       $this->load->model('DatabaseModel');
       $id = $this->DatabaseModel->del( $tbl_name, $tbl_col, $tId);

           if($id){
             //echo "inserted"; die;
            $this->session->set_flashdata('message', '<strong>Well done!</strong>Currency Deleted Successfully !!!');
            //echo "just before show";die;
            redirect ('manage-cuisine');
            }
            else{
            //echo "not inserted";
            $this->session->set_flashdata('message2', 'Currency Not Deleted Successfully !!!');
            redirect ('manage-cuisine');
            }

    }

    public function edit( $id = '' )
    {    

        $this->form_validation->set_rules('cuisine_name', 'cuisine_name', 'required');

        if( $this->form_validation->run() == false ){
            $this->session->set_flashdata('message2', 'Input Proper Cuisinename To Update ! ');
            //echo "not valid data"; die;
             redirect('manage-cuisine'); 
        } 
        else 
        {
                $data['cuisine_name']     =  $this->input->post('cuisine_name');
                $tId                      =  $this->input->post('tId');
                $data['cuisine_date']     =  date('Y/m/d'); 
                //$tId = $id;
                //var_dump($data);die;
                 
                $tbl_name = 'cuisine';
                $col_nam  = 'cuisine_id';
                $this->load->model('DatabaseModel');
                //var_dump($data);die;
                $id=$this->DatabaseModel->edit( $tbl_name, $col_nam, $tId, $data );

                // echo $id; die;
                    if( $id ){
                         //echo "inserted"; die;
                        $this->session->set_flashdata('message', '<strong>Well done!</strong>Cuisine Updated.');
                        //echo "just before show";die;
                        redirect ('manage-cuisine');
                    }
                    else{
                        //echo "not inserted";
                        $this->session->set_flashdata('message2', 'Input Proper Cuisinename To Update !');
                        redirect ('manage-cuisine');
                    }

        }

    }


    public function myautocomplete()
    {

         $search_data = $this->input->post('search_data');

         $tbl_name  = 'cuisine';
         $src_col   = 'cuisine_name';
         $src_col2  = 'cuisine_id';
         $src_col3  = 'cuisine_date';

         $this->load->model('DatabaseModel'); 
         $result = $this->DatabaseModel->get_autocomplete( $tbl_name, $src_col,
                                              $src_col2, $src_col3, $search_data);

         if (!empty($result))
         {
              
                   //echo "<li><a href='#'>" . $row->seoTi . "</a></li>";

                    echo"<table  class='table  table-striped table-bordered table-hover dataTable no-footer' id='editable_table' role='grid' >
                      <thead>
                        <tr>
                          <th scope='col'>ID</th>
                          <th scope='col'>Cuisine</th>
                          <th scope='col'>Date Created</th>        
                        </tr>
                      </thead>
                      <tbody>";
                    foreach ($result as $row):     
                       echo " <tr>
                              <td >".$row->cuisine_id."</td>
                              <td>".$row->cuisine_name."</td>
                              <td >".$row->cuisine_date."</td>
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

    public function sort()
    {     
            $limit = 20;
            $this->load->model('DatabaseModel');
            $tbl_nam = 'cuisine';
            $ord_col =  'cuisine_sort_position';
            $data['cuisine_list'] = $this->DatabaseModel->showlist( $tbl_nam, $limit, $ord_col);


             $this->load->view('admin/cuisine/item',$data); 

             
             // $data['left_nav'] = $this->load->view('header/left_nav','',true);
             // $data['main_content'] = $this->load->view('admin/cuisine/sortlist',$data,true); 
             // $this->load->view('master',$data);
    }


    public function saveSortingData()
    {
      $data =  $this->input->post('position');
      // echo'<pre>'; var_dump($data);die;
      foreach ($data as $position => $cuisine_id){
      // echo $cuisine_id;
      // echo ++$position;echo'<pre>';
      $id = $cuisine_id;
      $val = ++$position;
      
      $tbl = 'cuisine';
      $col_nam  = 'cuisine_id';
     
      // $this->db->where($col_nam, $id);
      // $this->db->update($tbl_name, $data);

      $this->load->model('DatabaseModel');
      $this->DatabaseModel->sortedit($tbl,  $col_nam, $id, $val );

    }
    redirect ('cuisine/sort');
     
  }


    //   public function sort2()
    // {     
    //         $limit = 20;
    //         $this->load->model('DatabaseModel');
    //         $tbl_nam = 'cuisine';
    //         $ord_col =  'cuisine_sort_position';
    //         $data['cuisine_list'] = $this->DatabaseModel->showlist( $tbl_nam, $limit, $ord_col);

    //         $data['main_content'] = $this->load->view('admin/cuisine/item',$data,true); 
    //         $this->load->view('master',$data);

  
    // }



}
