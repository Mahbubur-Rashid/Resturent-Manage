<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminCurrency extends CI_Controller {

    public function __construct()
    {
        //$this->load->library('form_validation');
        parent::__construct(); 
        if($this->session->is_admin == 0)
        {
            redirect('login');
        }

    }
    public function currency_list()
    {  
        $data['pack_limit']=$this->input->post('pack_limit');

        $limit= $data['pack_limit'];
        if($limit == null){
             $limit=10;
        }

        $this->load->model('DatabaseModel');
        $tbl_nam = 'currency';
        $ord_col =  'currency_id';
        $data1['currency_list'] = $this->DatabaseModel->show( $tbl_nam, $limit, $ord_col);

        $data['left_nav'] = $this->load->view('header/left_nav','',true); 
        $data['main_content']=$this->load->view('admin/currency/list',$data1,true); 
        $this->load->view('master',$data);

    }

    public function show()
    {  
        $data['left_nav'] = $this->load->view('header/left_nav','',true); 
        $data['main_content']=$this->load->view('admin/currency/add','',true); 
        $this->load->view('master',$data);
    }


    public function add()
    {
         // echo "fkasld fadmin order222"; die;
        $this->form_validation->set_rules('currency_code', 'currency_code', 'trim|required');
        $this->form_validation->set_rules('currency_symbol', 'currency_symbol', 'trim|required');
         
    
        if( $this->form_validation->run() == false ){
            //$this->session->set_flashdata('message2', 'Data Not Inserted, Input Proper Data');
            //echo "not valid data"; die;
             //redirect('AdminCurrency/show');
             $this->show();
        } 
        else 
        {
                $data['currency_code']     =  $this->input->post('currency_code');
                $data['currency_symbol']   =  $this->input->post('currency_symbol');
                $data['currency_date']     = date('Y/m/d');
                //var_dump($data);die;
                 
                $tbl = 'currency';
                $this->load->model('DatabaseModel'); 
                $id = $this->DatabaseModel->add( $data, $tbl);
                // echo $id; die;
                    if($id){
                         //echo "inserted"; die;
                        $this->session->set_flashdata('message', '<strong>Well done!</strong> New Currency Added.');
                        //echo "just before show";die;
                        redirect ('AdminCurrency/show');
                    }
                    else{
                        //echo "not inserted";
                        $this->session->set_flashdata('message2', 'Data Not Inserted, Input Proper Data');
                        redirect ('AdminCurrency/show');
                    }

        }

    }




    public function del( $id = '')
    {   
       $tbl_name = 'currency';
       $tbl_col  = 'currency_id';

       $tId                      =  $this->input->post('tId');
       //$tId = $id;

       $this->load->model('DatabaseModel'); 
       $id = $this->DatabaseModel->del( $tbl_name, $tbl_col, $tId);

           if($id){
             //echo "inserted"; die;
            $this->session->set_flashdata('message', '<strong>Well done!</strong>Currency Deleted Successfully !!!');
            //echo "just before show";die;
            redirect ('manage-currency');
            }
            else{
            //echo "not inserted";
            $this->session->set_flashdata('message2', 'Currency Not Deleted Successfully !!!');
            redirect ('manage-currency');
            }
       //redirect ('manage-currency');

    }

        public function edit( $id = '' )
    {    

        $this->form_validation->set_rules('currency_code', 'currency_code', 'required');
        $this->form_validation->set_rules('currency_symbol', 'currency_symbol', 'required');

        if( $this->form_validation->run() == false ){
            $this->session->set_flashdata('message2', 'Input Proper Currency Info To Update !!! ');
            //echo "not valid data"; die;
             redirect('manage-currency'); 
        } 
        else 
        {
                $data['currency_code']     =  $this->input->post('currency_code');
                $data['currency_symbol']   =  $this->input->post('currency_symbol');
                $tId                       =  $this->input->post('tId');
                $data['currency_date']     =  date('Y/m/d');

                // $tId = $id;
                //var_dump($data);die;
                 
                $tbl_name = 'currency';
                $col_nam  = 'currency_id';
                $this->load->model('DatabaseModel');
                //var_dump($data);die;
                $id=$this->DatabaseModel->edit( $tbl_name, $col_nam, $tId, $data );

                // echo $id; die;
                    if( $id ){
                         //echo "inserted"; die;
                        $this->session->set_flashdata('message', '<strong>Well done!</strong>Currency Updated !!!');
                        //echo "just before show";die;
                        redirect('manage-currency');
                    }
                    else{
                        //echo "not inserted";
                        $this->session->set_flashdata('message2', 'Input Proper Currency Info To Update !!!');
                        redirect('manage-currency');
                    }

        }

    }


    public function myautocomplete()
    {
         $search_data = $this->input->post('search_data');
         
       //  echo $search_data; die;
         $tbl_name = 'currency';
         $src_col = 'currency_code';

         $this->load->model('DatabaseModel'); 
         $result = $this->DatabaseModel->get_autocomplete( $tbl_name, $src_col, $search_data);
        
        //var_dump($result); die;
         if (!empty($result))
         {
              
                   //echo "<li><a href='#'>" . $row->seoTi . "</a></li>";

                    echo"<table  class='table  table-striped table-bordered table-hover dataTable no-footer' id='editable_table' role='grid' >
                      <thead>
                        <tr>
                          <th scope='col'>Currency Code</th>
                          <th scope='col'>Currency Symbol</th>
                          <th scope='col'>Date Created</th>        
                        </tr>
                      </thead>
                      <tbody>";
                    foreach ($result as $row):     
                       echo " <tr>
                              <td >".$row->currency_code."</td>
                              <td>".$row-> currency_symbol."</td>
                              <td >".$row->currency_date."</td>
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

    function showCsv() {
       // echo "hi";die;
        $this->load->model('DatabaseModel');
        $data['currency_list'] = $this->DatabaseModel->get_currency_list();

        $data['left_nav'] = $this->load->view('header/left_nav','',true); 
        $data['main_content']=$this->load->view('admin/currency/add_csv',$data,true); 
        $this->load->view('master',$data);


        //$this->load->view('admin/currency/add_csv', $data);
    }

    function importcsv() 
    {   

        $this->load->model('DatabaseModel');

        $data['currency_list'] = $this->DatabaseModel->get_currency_list();
        $data['error'] = '';    //initialize image upload error array to empty
 
        $config['upload_path'] = 'uploads/csv';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '10000';
 
        $this->load->library('upload', $config);
 
        // If upload failed, display error
        if (!$this->upload->do_upload()) {
            $data['error'] = $this->upload->display_errors();

            $this->session->set_flashdata('fileErr', 'Import Proper Csv File');
            $data['left_nav'] = $this->load->view('header/left_nav','',true); 
            $data['main_content']=$this->load->view('admin/currency/add_csv',$data,true); 
            $this->load->view('master',$data);
        } else {
            $file_data = $this->upload->data();

            $file_path =  'uploads/csv/'.$file_data['file_name'];

            //echo $file_path; die;
           // $this->load->spark('csvimport');
            $this->load->library('csvimport');
            if ( $this->csvimport->get_array($file_path)) {
                $csv_array = $this->csvimport->get_array($file_path);
                foreach ($csv_array as $row) {
                    $insert_data = array(
                        'currency_code'=>$row['currency_code'],
                        'currency_symbol'=>$row['currency_symbol'],
                        'currency_date'=> date('Y/m/d'),
                    );
                    //var_dump($insert_data);die;

                    $this->DatabaseModel->insert_csv($insert_data);
                }
                $this->session->set_flashdata('success', 'Csv Data Imported Succesfully');
                redirect(base_url().'csvImport');
               // echo "<pre>"; print_r($insert_data);
            } else 
                $data['error'] = "Error occured";

                $data['left_nav'] = $this->load->view('header/left_nav','',true); 
                $data['main_content']=$this->load->view('admin/currency/add_csv',$data,true); 
                $this->load->view('master',$data);
            }
 
    } 


}
