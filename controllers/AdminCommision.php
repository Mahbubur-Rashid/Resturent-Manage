<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminCommision extends CI_Controller {

    public function __construct()
    {
        //$this->load->library('form_validation');
        parent::__construct();
        
        if($this->session->is_admin == 0)
        {
            redirect('login');
        }
    }

    public function show()
    {   
        // echo "hi AdminCommision show";die;
        // die;
        //$query = $this->db->get('commission');


        $this->db->select('*');
        $this->db->from('commission');
        $query = $this->db->get();
        $data['result'] = $query->result_array(); 

       



        $data['left_nav'] = $this->load->view('header/left_nav','',true); 
        $data['main_content']=$this->load->view('admin/commision/show',$data,true); 
        $this->load->view('master',$data);

    }
    public function save()
    {   
        // echo "hi AdminCommision save";die;
        // die; 



        // $data = array (
        //           'total_commission_status' => 
        //          implode(",", $this->input->post('total_commission_status'))
        // );



            // $data['total_commission_statustotal_commission_status'] = 
            //            $this->input->post('total_commission_status');

           // echo '<pre>';   var_dump($data);         die;


        $this->form_validation->set_rules('admin_commision_percent', 'admin_commision_percent',
             'trim|required');
    
        if($this->form_validation->run()==false){
            //$this->session->set_flashdata('message2', 'Data Not Inserted, Input Proper Data');
            // echo "not valid data";
             redirect('commisionsettings'); 
            $this->show();
        } 
        else 
        {   
            $data = array (  'total_commission_status' => 
                              implode( "," , $this->input->post('total_commission_status') )
                          );
            $data['admin_exclude_cod_balance'] = $this->input->post('admin_exclude_cod_balance');
            $data['admin_commission_enabled']  = $this->input->post('admin_commission_enabled');
            $data['admin_disabled_membership_signup']  = $this->input->post('admin_disabled_membership_signup');
            $data['admin_disabled_membership']  = $this->input->post('admin_disabled_membership');
            $data['admin_include_merchant_cod']  = $this->input->post('admin_include_merchant_cod');
            $data['admin_commision_type'] = $this->input->post('admin_commision_type');
            $data['admin_commision_percent']  = $this->input->post('admin_commision_percent');
            $data['admin_commision_ontop']  = $this->input->post('admin_commision_ontop');



            // $data22 = array (  'total_commission_status' => 
            //                   implode( "," , $this->input->post('total_commission_status') )
            //               );

              
            // $data['total_commission_status'] = 
            //            $this->input->post('total_commission_status');
            //$data['total_commission_status'] = $data22;

            //echo "<pre>"; var_dump($data);die;
            $tbl_name = 'commission';
            $col_nam  = 'commission_id';
            $id       =  1; 
            $this->load->model('DatabaseModel');
                //var_dump($data);die;
            $id=$this->DatabaseModel->edit( $tbl_name, $col_nam, $id, $data );

                    if($id){
                         //echo "inserted"; die;
                        $this->session->set_flashdata('message', '<strong>Well done!</strong> Your Commission Settings Updated.');
                        redirect ('commisionsettings');
                    }
                    else{
                        //echo "not inserted";
                        $this->session->set_flashdata('message2', 'Your Commission Settings Not Updated');
                        redirect ('commisionsettings');
                    }

        }













        
        $data['left_nav'] = $this->load->view('header/left_nav','',true); 
        $data['main_content']=$this->load->view('admin/commision/save',$data,true); 
        $this->load->view('master',$data);

    }
}    