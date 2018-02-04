<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminPackages extends CI_Controller {

    public function __construct()
    {
        //$this->load->library('form_validation');
        parent::__construct(); 

        if($this->session->is_admin == 0)
        {
            redirect('login');
        }
        
    }
    public function packages_list()
    {   
        $data['pack_limit']=$this->input->post('pack_limit');

        $limit= $data['pack_limit'];
        if($limit == null){
             $limit=10;
        }

        $this->load->model('DatabaseModel');
        $tbl_nam = 'pack_info';
        $ord_col = 'pack_id';
        $data['packages_list'] = $this->DatabaseModel->show( $tbl_nam, $limit, $ord_col);



        $data['left_nav'] = $this->load->view('header/left_nav','',true); 
        $data['main_content']=$this->load->view('admin/packages/list',$data,true); 
        $this->load->view('master',$data);


        // $data['main_content']=$this->load->view('admin/packages/list',$data,true); 
        // $this->load->view('master',$data);

    }
    public function packagesAdd()
    {   //echo "hi packagesAdd56456"; die;

        $data['left_nav'] = $this->load->view('header/left_nav','',true); 
        $data['main_content']=$this->load->view('admin/packages/add','',true); 
        $this->load->view('master',$data);
    }


    public function add()
    {
          
         $this->form_validation->set_rules('title', 'title', 'trim|required');
         $this->form_validation->set_rules('description', 'description', 'trim|required');
         $this->form_validation->set_rules('price', 'price', 'trim|required');
         $this->form_validation->set_rules('expiration', 'expiration', 'trim|required');
         $this->form_validation->set_rules('description', 'description', 'trim|required');
    
        if($this->form_validation->run()==false){
            //$this->session->set_flashdata('message2', 'Data Not Inserted, Input Proper Data');
            // echo "not valid data";
            // redirect('packagesAdd'); 
            $this->packagesAdd();
        } 
        else 
        {
                $data['title']           = $this->input->post('title');
                $data['description']     = $this->input->post('description');
                $data['price']           = $this->input->post('price');
                $data['promo_price']     = $this->input->post('promo_price');
                $data['expiration_type'] = $this->input->post('expiration_type');
                $data['expiration']      = $this->input->post('expiration');
                $data['unlimited_post']  = $this->input->post('unlimited_post');
                $data['post_limit']      = $this->input->post('post_limit');
                $data['sell_limit']      = $this->input->post('sell_limit');
                $data['status']          = $this->input->post('status');
                 
                $tbl='pack_info';
                $this->load->model('DatabaseModel'); 
                $id=$this->DatabaseModel->add( $data, $tbl);

                    if($id){
                         //echo "inserted"; die;
                        $this->session->set_flashdata('message', '<strong>Well done!</strong> New Package Added.');
                        redirect ('packagesAdd');
                    }
                    else{
                        //echo "not inserted";
                        $this->session->set_flashdata('message2', 'Data Not Inserted, Input Proper Data');
                        redirect ('packagesAdd');
                    }

        }

    }

 
   
    public function del( $id = '')
    {   
       
       $tbl_name = 'pack_info';
       $tbl_col  = 'pack_id';

       $tId                      =  $this->input->post('tId');
       //$tId = $id;
       $this->load->model('DatabaseModel');
       $id = $this->DatabaseModel->del( $tbl_name, $tbl_col, $tId);

           if($id){
             //echo "inserted"; die;
            $this->session->set_flashdata('message', '<strong>Well done!</strong>Package Deleted Successfully !!!');
            //echo "just before show";die;
            redirect ('packages');
            }
            else{
            //echo "not inserted";
            $this->session->set_flashdata('message2', 'Package Not Deleted !!!');
            redirect ('packages');
            }

    }

    public function edit( $id = '' )
    {    

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('price', 'price', 'required');

        if( $this->form_validation->run() == false ){
            $this->session->set_flashdata('message2', 'Input Proper Package Data To Update ! ');
            //echo "not valid data"; die;
            redirect('packages'); 
        } 
        else 
        {
                $data['title']           = $this->input->post('title');
                $data['description']     = $this->input->post('description');
                $data['price']           = $this->input->post('price');
                $data['promo_price']     = $this->input->post('promo_price');
                $data['expiration_type'] = $this->input->post('expiration_type');
                $data['expiration']      = $this->input->post('expiration');
                $data['unlimited_post']  = $this->input->post('unlimited_post');
                $data['post_limit']      = $this->input->post('post_limit');
                $data['sell_limit']      = $this->input->post('sell_limit');
                $data['status']          = $this->input->post('status');

                $tId                     =  $this->input->post('tId');
                //$tId = $id;
                //var_dump($data);die;
                 
                $tbl_name = 'pack_info';
                $col_nam  = 'pack_id';
                $this->load->model('DatabaseModel');
                //var_dump($data);die;
                $id=$this->DatabaseModel->edit( $tbl_name, $col_nam, $tId, $data );

                // echo $id; die;
                    if( $id ){
                         //echo "inserted"; die;
                        $this->session->set_flashdata('message', '<strong>Well done!</strong>Cuisine Updated.');
                        //echo "just before show";die;
                        redirect ('packages');
                    }
                    else{
                        //echo "not inserted";
                        $this->session->set_flashdata('message2', 'Input Proper Cuisinename To Update !');
                        redirect ('packages');
                    }

        }

    }

    public function myautocomplete()
    {

         $search_data = $this->input->post('search_data');

         $tbl_name  = 'pack_info';
         $src_col   = 'title';
         $src_col2  = 'description';
         $src_col3  = 'price';

         $src_col4  = 'pack_id';
         $src_col5  = 'promo_price';
         $src_col6  = 'expiration_type';
         $src_col4  = 'sell_limit';
         $src_col5  = 'post_limit';
         $src_col6  = 'expiration';
         $src_col7  = 'status';
        // $src_col3 = 'price';

         $this->load->model('DatabaseModel'); 
         $result = $this->DatabaseModel->get_autocomplete2( $tbl_name, $src_col, $src_col2, $src_col3 , 
                                            $src_col4, $src_col5, $src_col6, $src_col7, $search_data);

         if (!empty($result))
         {
              
                   //echo "<li><a href='#'>" . $row->seoTi . "</a></li>";

                    echo"<table  class='table  table-striped table-bordered table-hover dataTable no-footer' id='editable_table' role='grid' >
                      <thead>
                        <tr>
                          <th scope='col'>ID</th>
                          <th scope='col'>Title</th>
                          <th scope='col'>Description</th>
                          <th scope='col'>Price</th>
                          <th scope='col'>Promo Price</th>
                          <th scope='col'>Expiration time(day)</th>  
                          <th scope='col'>Usage</th>
                          <th scope='col'>Limit merchant by sell</th>
                          <th scope='col'>Status</th>     
                        </tr>
                      </thead>
                      <tbody>";
                    foreach ($result as $row):     
                       echo " <tr>
                              <td >".$row->pack_id."</td>
                              <td >".$row->title."</td>
                              <td>".$row->description."</td>
                              <td >".$row->price."</td>
                              <td >".$row->promo_price."</td>
                              <td>".$row->expiration_type."</td>
                              <td >".$row->expiration."</td>
                              <td>".$row->sell_limit."</td>
                              <td >".$row->status."</td>
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
            $tbl_nam = 'pack_info';
            $ord_col =  'sort_position';
            $data['packages_list'] = $this->DatabaseModel->showlist( $tbl_nam, $limit, $ord_col);


            $this->load->view('admin/packages/item',$data); 



             // $data['left_nav'] = $this->load->view('header/left_nav','',true); 
             // $data['main_content'] = $this->load->view('admin/packages/sortlist',$data,true); 
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
            
            $tbl = 'pack_info';
            $col_nam  = 'pack_id';
           
            // $this->db->where($col_nam, $id);
            // $this->db->update($tbl_name, $data);

            $this->load->model('DatabaseModel');
            $this->DatabaseModel->sorteditpack($tbl,  $col_nam, $id, $val );

            }
        redirect ('packages/sort');
     
  } 





}
