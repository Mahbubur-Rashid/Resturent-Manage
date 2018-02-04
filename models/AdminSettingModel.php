<?php
class AdminSettingModel extends CI_Model
{
	function __construct() {
		parent::__construct();
	}
       
	public function dataAdd($data)
	{
		//echo $tbl;die;
		$this->db->insert('tbl_setting',$data);
	    return true;
	}

	public function update($data)
	{
		//$data['id']=$this->session->ins_id;
	   $this->db->set('title', $data['title']);
	   if(!$data['dlogo'] == ''){
	   $this->db->set('dlogo', $data['dlogo']);
	   }
	   //$this->db->set('mlogo', $data['mlogo']);
	   $this->db->set('country', $data['country']);
	   $this->db->set('address', $data['address']);
	   $this->db->set('phnum', $data['phnum']);
	   $this->db->set('email', $data['email']);
	   $this->db->set('gmail', $data['gmail']);
	   $this->db->set('currency', $data['currency']);
	   $this->db->set('position', $data['position']);
	   $this->db->set('decimal', $data['decimal']);
	   
	   $this->db->where('id', 1);
       return  $query=$this->db->update('tbl_setting');
	}

	public function setResult(){
	
       $query = $this->db->get('tbl_setting');
	   return $query->row();
	}
	
	
	
}