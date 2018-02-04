<?php
class AdminDishesModel extends CI_Model
{
	function __construct() {
		parent::__construct();
	}
       
	public function dataAdd($data){
		$this->db->insert('tbl_dishes',$data);
	return true;
	}

	public function view_images()
		  {		 
			
		  
							
			$query = $this->db->get('tbl_dishes');
	    	return $query->result_array();

	 		}

	 public function dataEdit($id){
       	$this->db->select('*');
		$this->db->from('tbl_dishes');
		$this->db->where('id',$id);
		$query=$this->db->get();
		return $query->row();
	}

	public function dataDelete($id){
		  
       $this->load->database();
		$this->db->where('id',$id);
		$this->db->delete('tbl_dishes');
		return true;
	}	

	public function dataSave($data){
		$this->db->set('dishName', $data['dishName']);
		$this->db->set('status', $data['status']);
        
        if(!$data['image'] == '')
		{$this->db->set('image', $data['image']);}

	    $this->db->where('id', $data['id']);
        return  $query=$this->db->update('tbl_dishes');
    }			
	
	
	
}