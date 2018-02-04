<?php
class MerchantModel extends CI_Model
{
	function __construct() {
		parent::__construct();
	}
       

       public function ListEdit($id){
       	$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->join('tbl_list' ,'tbl_user.email = tbl_list.contactemail ' );
		//$this->db->where();
         $this->db->where(array(' tbl_user.email'=>$id));
       $query = $this->db->get();
       return $query->row();
	}
	
	
	
	
}