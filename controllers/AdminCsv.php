<?php
 
class AdminCsv extends CI_Controller {
 
    function __construct() {
        parent::__construct();
        $this->load->model('csv_model');
        $this->load->library('csvimport');
    }
 
    function index() {
       // echo "hi";die;
        $this->load->model('csv_model');
        $data['addressbook'] = $this->csv_model->get_addressbook();
        $this->load->view('csvindex', $data);
    }
 
    function importcsv() {

        $this->load->model('csv_model');
        $data['addressbook'] = $this->csv_model->get_addressbook();
        $data['error'] = '';    //initialize image upload error array to empty
 
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '10000';
 
        $this->load->library('upload', $config);
 
 
        // If upload failed, display error
        if (!$this->upload->do_upload()) {
            $data['error'] = $this->upload->display_errors();
 
            $this->load->view('csvindex', $data);
        } else {
            $file_data = $this->upload->data();

            $file_path =  'uploads/'.$file_data['file_name'];

            //echo $file_path; die;
           // $this->load->spark('csvimport');
            $this->load->library('csvimport');
            if ( $this->csvimport->get_array($file_path)) {
                $csv_array = $this->csvimport->get_array($file_path);
                foreach ($csv_array as $row) {
                    $insert_data = array(
                        'firstname'=>$row['firstname'],
                        'lastname'=>$row['lastname'],
                        'phone'=>$row['phone'],
                        'email'=>$row['email'],
                    );
                    $this->csv_model->insert_csv($insert_data);
                }
                $this->session->set_flashdata('success', 'Csv Data Imported Succesfully');
                redirect(base_url().'mycsv');
               // echo "<pre>"; print_r($insert_data);
            } else 
                $data['error'] = "Error occured";
                $this->load->view('csvindex', $data);
            }
 
        } 
 
}