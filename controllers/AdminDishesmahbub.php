<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDishes extends CI_Controller {

    public function __construct()
    {
        //$this->load->library('form_validation');
        parent::__construct();              
        if($this->session->email == "")
        {
            redirect('login');
        }
    }

        public function dishes_list($pag = '')
    {  



        
             $perpages = $this->input->post( 'per_pagedata' );
             $this->session->set_userdata( 'per-page', $perpages);
             $perpage = $this->session->userdata( 'per-page' );
    
        if($this->session->userdata('per-page')){
            $perpage = $this->session->userdata( 'per-page' );
        }
        else{
        $perpage = $pag ;
        }

        $config = array();
        $config["base_url"] = base_url() . "AdminDishes/dishes_list";
        $this->load->model('DatabaseModel');
        $tbl_nam = 'dishes';
        $config["total_rows"] = $this->DatabaseModel->count($tbl_nam);
        $config["per_page"] = $perpage;

        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $data["dishes_list"] = $this->DatabaseModel->get_items( $config['per_page'],$page);

        $data["links"] = $this->pagination->create_links();


        $data['main_content'] = $this->load->view('admin/dishes/list',$data,true); 
        $this->load->view('master',$data);









        // $perpage=5;
        // $perpage = $this->input->post('per_pagedata');
        
        // if ($perpage != NULL) {
        //     $this->session->set_userdata( 'perpage', $perpage);
        //     $page = $this->session->userdata('perpage');
        //    $perpage=$page; 
        // }else{
        //     $this->nextpage();
        // }
   


        // //pagination settings

        // $config['per_page'] = $perpage;
        // $config['base_url'] = base_url().'AdminDishes/dishes_list';
        // $config['use_page_numbers'] = TRUE;
        // $config['num_links'] = 20;
        // $config['full_tag_open'] = '<ul>';
        // $config['full_tag_close'] = '</ul>';
        // $config['num_tag_open'] = '<li>';
        // $config['num_tag_close'] = '</li>';
        // $config['cur_tag_open'] = '<li class="active"><a>';
        // $config['cur_tag_close'] = '</a></li>';


        // $page = $this->uri->segment(3); 
        // //$page = 1; 


        
        // $limit_end = ($page * $config['per_page']) - $config['per_page'];
        // if ($limit_end < 0){
        //     $limit_end = 0;
        // }

        // $this->load->model('DatabaseModel');
        // $tbl_nam = 'dishes';
        // $data['count_products'] = $this->DatabaseModel->count($tbl_nam);

        // $data['dishes_list'] = $this->DatabaseModel->get_items( $config['per_page'],$limit_end); 
        // $config['total_rows'] = $data['count_products'];

        // // echo '<pre>'; var_dump($data); echo '<pre>'; die;
        // // die;

        // $this->load->library('pagination');
        // $this->pagination->initialize($config); 



        // $data['main_content'] = $this->load->view('admin/dishes/list',$data,true); 
        // $this->load->view('master',$data);




        // $this->load->model('DatabaseModel');
        // $tbl_nam = 'dishes';
        // $ord_col = 'dishes_id';
        // $data1['dishes_list'] = $this->DatabaseModel->show( $tbl_nam, $limit, $ord_col);

        // $data=array();
        // $data['main_content']=$this->load->view('admin/dishes/list',$data1,true); 
        // $this->load->view('master',$data);

    }

    // public function dishes_list()
    // {   
    //     $data['pack_limit']=$this->input->post('pack_limit');

    //     $limit= $data['pack_limit'];
    //     if($limit == null){
    //          $limit=3;
    //     }

    //     $this->load->model('DatabaseModel');
    //     $tbl_nam = 'dishes';
    //     $ord_col = 'dishes_id';
    //     $data1['dishes_list'] = $this->DatabaseModel->show( $tbl_nam, $limit, $ord_col);

    //     $data=array();
    //     $data['main_content']=$this->load->view('admin/dishes/list',$data1,true); 
    //     $this->load->view('master',$data);

    // }

    public function show()
    {   //echo "hi packagesAdd56456"; die;

        $data=array(); 
        $data['main_content']=$this->load->view('admin/dishes/add','',true); 
        $this->load->view('master',$data);
    }


    public function add()
    {
         
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
                $picture = '';
        }
        // if (empty($_FILES['picture']['name']))
        //        {
        //         $this->form_validation->set_rules('picture', 'Products Photo', 'required');
        //        }

        $this->form_validation->set_rules('dishes_name', 'dishes_name', 'required');
        
        if($this->form_validation->run()==false){
            $this->session->set_flashdata('message2', 'Data Not Inserted, Input Proper Data');
            // echo "not valid data";
             redirect('AdminDishes/show'); 
        } 
        else 
        {
                $data['dishes_name']           = $this->input->post('dishes_name');
                $data['dishes_status']     = $this->input->post('dishes_status');
                
                if (!empty($_FILES['picture']['name']))
                { $data['dishes_icon'] = $picture; }

                $data['dishes_date']     = date('Y/m/d');
               
                $tbl='dishes';
                $this->load->model('DatabaseModel'); 
                $id=$this->DatabaseModel->add( $data, $tbl);

                    if($id){
                         //echo "inserted"; die;
                        $this->session->set_flashdata('message', '<strong>Well done!</strong> New Package Added.');
                        redirect ('AdminDishes/show');
                    }
                    else{
                        //echo "not inserted";
                        $this->session->set_flashdata('message2', 'Data Not Inserted, Input Proper Data');
                        redirect ('AdminDishes/show');
                    }

        }

    }





    public function del( $id = '')
    { 
       echo "this is del action for packeges ID :";
       echo $id; die;
    }






    public function edit( $id = '')
    {   echo "this is del action for packeges ID :";
        echo $id;
        echo "edit packages "; die;
           
         $this->form_validation->set_rules('title', 'title', 'required');
         $this->form_validation->set_rules('price', 'price', 'required');
    
        if($this->form_validation->run()==false){
            $this->session->set_flashdata('message2', 'Data Not Inserted, Input Proper Data');
            // echo "not valid data";
             redirect('AdminDishes/show'); 
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
                        redirect ('AdminDishes/show');
                    }
                    else{
                        //echo "not inserted";
                        $this->session->set_flashdata('message2', 'Data Not Inserted, Input Proper Data');
                        redirect ('AdminDishes/show');
                    }

        }

    }

}
