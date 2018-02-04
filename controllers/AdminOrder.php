<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminOrder extends CI_Controller {

    public function __construct()
    {
        //$this->load->library('form_validation');
        parent::__construct();              
        if($this->session->is_admin == 0)
        {
            redirect('login');
        }
    }
    public function order_list()
    {   
        //echo "hi order list";
        $data['pack_limit']=$this->input->post('pack_limit');

        $limit= $data['pack_limit'];
        if($limit == null){
             $limit=10;
        }

        $this->load->model('DatabaseModel');
        $tbl_nam = 'order_status';
        $ord_col =  'order_id';
        $data1['order_list']=$this->DatabaseModel->show( $tbl_nam, $limit, $ord_col);
        
        $data['left_nav'] = $this->load->view('header/left_nav','',true); 
        $data['main_content']=$this->load->view('admin/order/list',$data1,true); 
        $this->load->view('master',$data);

    }
    public function show()
    {  // echo "hi packagesAdd56456"; die;

        $data['left_nav'] = $this->load->view('header/left_nav','',true);  
        $data['main_content']=$this->load->view('admin/order/add','',true); 
        $this->load->view('master',$data);
    }


    public function add()
    {
          //echo "admin order222"; die;
         $this->form_validation->set_rules('order_status', 'order_status', 'required');
         
    
        if( $this->form_validation->run() == false ){
            //$this->session->set_flashdata('message2', 'Data Not Inserted, Input Proper Data');
            //echo "not valid data"; die;
             //redirect('AdminOrder/show'); 
             $this->show();
        } 
        else 
        {
                $data['order_status']   = $this->input->post('order_status');
                $data['order_date']     = date('Y/m/d');
                //var_dump($data);die;
                 
                $tbl='order_status';
                $this->load->model('DatabaseModel'); 
                $id=$this->DatabaseModel->add( $data, $tbl);
                // echo $id; die;
                    if($id){
                         //echo "inserted"; die;
                        $this->session->set_flashdata('message', '<strong>Well done!</strong> New Order Added.');
                        //echo "just before show";die;
                        redirect ('AdminOrder/show');
                    }
                    else{
                        //echo "not inserted";
                        $this->session->set_flashdata('message2', 'Data Not Inserted, Input Proper Data');
                        redirect ('AdminOrder/show');
                    }

        }

    }
  

    public function del( $id = '')
    {   
       $tbl_name = 'order_status';
       $tbl_col  = 'order_id';

       $tId                      =  $this->input->post('tId');
       //$tId = $id;

       $this->load->model('DatabaseModel'); 
       $id = $this->DatabaseModel->del( $tbl_name, $tbl_col, $tId);

           if($id){
             //echo "inserted"; die;
            $this->session->set_flashdata('message', '<strong>Well done!</strong>Order Status Deleted Successfully !!!');
            //echo "just before show";die;
            redirect ('order-status');
            }
            else{
            //echo "not inserted";
            $this->session->set_flashdata('message2', 'Order Status Not Deleted !!!');
            redirect ('order-status');
            }
    }


    public function edit( $id = '' )
    {    

        $this->form_validation->set_rules('order_status', 'order_status', 'required');

        if( $this->form_validation->run() == false ){
            $this->session->set_flashdata('message2', 'Input Proper Order Status To Update !!! ');
            //echo "not valid data"; die;
             redirect('order-status'); 
        } 
        else 
        {
                $data['order_status']     =  $this->input->post('order_status');
                $tId                      =  $this->input->post('tId');
                $data['order_date']       =   date('Y/m/d');
                //$tId = $id;
                //var_dump($data);die;
                 
                $tbl_name = 'order_status';
                $col_nam  = 'order_id';
                $this->load->model('DatabaseModel');
                //var_dump($data);die;
                $id = $this->DatabaseModel->edit( $tbl_name, $col_nam, $tId, $data );

                // echo $id; die;
                    if( $id ){
                         //echo "inserted"; die;
                        $this->session->set_flashdata('message', '<strong>Well done!</strong>Order Status Updated !!!');
                        //echo "just before show";die;
                        redirect('order-status');
                    }
                    else{
                        //echo "not inserted";
                        $this->session->set_flashdata('message2', 'Input Proper Order Status To Update !!!');
                        redirect('order-status');
                    }

        }

    }



    public function myautocomplete()
    {

         $search_data = $this->input->post('search_data');

         $tbl_name = 'order_status';
         $src_col = 'order_status';

         $this->load->model('DatabaseModel'); 
         $result = $this->DatabaseModel->get_autocomplete( $tbl_name, $src_col, $search_data);

         if (!empty($result))
         {
              
                   //echo "<li><a href='#'>" . $row->seoTi . "</a></li>";

                    echo"<table  class='table  table-striped table-bordered table-hover dataTable no-footer' id='editable_table' role='grid' >
                      <thead>
                        <tr>
                          <th scope='col'>ID</th>
                          <th scope='col'>Status</th>
                          <th scope='col'>Date</th>        
                        </tr>
                      </thead>
                      <tbody>";
                    foreach ($result as $row):     
                       echo " <tr>
                              <td >".$row->order_id."</td>
                              <td>".$row-> order_status."</td>
                              <td >".$row->order_date."</td>
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
