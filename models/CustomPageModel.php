<?php
class CustomPageModel extends CI_Model
{
	function __construct() {
		parent::__construct();
	}
       
	public function addData($data){
		$this->db->insert('tbl_custom',$data);
		return $this->db->insert_id();
	}
	public function pageView(){
		$query = $this->db->get('tbl_custom');
	    	return $query->result_array();
	}

	public function resUpdate($data){
		$data['id']=$this->session->ins_id;
	   $this->db->set('pageName', $data['pageName']);
	   $this->db->set('icon', $data['icon']);
	   $this->db->set('content', $data['content']);
	   $this->db->set('seoTi', $data['seoTi']);
	   $this->db->set('metaDes', $data['metaDes']);
	   $this->db->set('metaKey', $data['metaKey']);
	   $this->db->set('status', $data['status']);
	  
	   $this->db->where('id', $data['id']);
       return  $query=$this->db->update('tbl_custom');
	}

	public function linkUpdate($data){
		$data['id']=$this->session->ins_id;
	   $this->db->set('linkName', $data['linkName']);
	   $this->db->set('link', $data['link']);
	   $this->db->set('statuss', $data['statuss']);
	  
	  
	   $this->db->where('id', $data['id']);
       return  $query=$this->db->update('tbl_custom');
	}

	public function linkData($data){
		$data['id']=$this->session->ins_id;
	   
	   $this->db->set('linkName', $data['linkName']);
	   $this->db->set('link', $data['link']);
	   $this->db->set('statuss', $data['statuss']);
	  
	   $this->db->where('id', $data['id']);
       return  $query=$this->db->update('tbl_custom');
	}

	public function deleteData($id){
		  
       $this->load->database();
		$this->db->where('id',$id);
		$this->db->delete('tbl_custom');
		return true;
	}

	public function dataEdit($id){
       	$this->db->select('*');
		$this->db->from('tbl_custom');
		$this->db->where('id',$id);
		$query=$this->db->get();
		return $query->row();
	}


	public function saveData($data){
		
	   $this->db->set('pageName', $data['pageName']);
	   $this->db->set('icon', $data['icon']);
	   $this->db->set('content', $data['content']);
	   $this->db->set('seoTi', $data['seoTi']);
	   $this->db->set('metaDes', $data['metaDes']);
	   $this->db->set('metaKey', $data['metaKey']);
	   $this->db->set('status', $data['status']);
	    $this->db->set('linkName', $data['linkName']);
	   $this->db->set('link', $data['link']);
	  
	   $this->db->where('id', $data['id']);
       return  $query=$this->db->update('tbl_custom');
	}

	public function get_autocomplete($search_data)
{
	$this->db->select('*');
		$this->db->from('tbl_custom');
   
    $this->db->like('seoTi', $search_data);

    return $this->db->get()->result();
}


	
	
	
}