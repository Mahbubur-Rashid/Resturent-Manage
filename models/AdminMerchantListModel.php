<?php
class AdminMerchantListModel extends CI_Model
{
	function __construct() {
		parent::__construct();
	}
       
	public function AdminLoginInformationDataAdd($tbl,$data){
		//echo $tbl;die;
		$this->db->insert($tbl,$data);
	return $ins_id=$this->db->insert_id();
	}

	public function AdminOrderStatusView(){
	$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->join('tbl_list', 'tbl_user.email = tbl_list.contactemail');
 
       $query = $this->db->get();
		return $query->result_array();
	}

	public function listUpdate($tbl_update,$data){
		$data['id']=$this->session->ins_id;
	   $this->db->set('latitude', $data['latitude']);
	   $this->db->set('longitude', $data['longitude']);
	   $this->db->where('id', $data['id']);
       return  $query=$this->db->update($tbl_update);
	}

	public function resUpdate($tbl_update,$data){
		$data['id']=$this->session->ins_id;
	   $this->db->set('rtsulg', $data['rtsulg']);
	   $this->db->set('rtname', $data['rtname']);
	   $this->db->set('rtphone', $data['rtphone']);
	   $this->db->set('contactname', $data['contactname']);
	   $this->db->set('contactphone', $data['contactphone']);
	   $this->db->set('contactemail', $data['contactemail']);
	   $this->db->set('country', $data['country']);
	   $this->db->set('city', $data['city']);
	   $this->db->set('postcode', $data['postcode']);
	   $this->db->set('state', $data['state']);
	   $this->db->set('pickup', $data['pickup']);
	   
	   $this->db->where('id', $data['id']);
       return  $query=$this->db->update($tbl_update);
	}

	public function memUpdate($tbl_update,$data){
		$data['id']=$this->session->ins_id;
	   $this->db->set('pkgname', $data['pkgname']);
	   $this->db->set('expdate', $data['expdate']);
	   $this->db->where('id', $data['id']);
       return  $query=$this->db->update($tbl_update);
	}

	public function loginInfo($data){
		$this->db->insert('tbl_user',$data);
       return true;
	}

	public function featuredUpdate($data){
		$data['id']=$this->session->ins_id;
	   $this->db->set('featured', $data['check5']);
	   $this->db->where('id', $data['id']);
       return  $query=$this->db->update('tbl_list');
	}

	public function userInfo($tbl_update,$data){
		$data['id']=$this->session->ins_id;
	   $this->db->set('name', $data['name']);
	   $this->db->set('email', $data['email']);
	   $this->db->where('id', $data['id']);
       return  $query=$this->db->update($tbl_update);
	}
	public function ListEdit($id){
       	$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->join('tbl_list' ,'tbl_user.email = tbl_list.contactemail ' );
		//$this->db->where();
         $this->db->where(array(' tbl_list.id'=>$id));
       $query = $this->db->get();
       return $query->row();
	}

	public function listDelete($id){
		  	/*$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->join('tbl_list' ,'tbl_user.email = tbl_list.contactemail ' );
		//$this->db->where();
         $this->db->where(array(' tbl_list.id'=>$id));
       $query = $this->db->delete();*/
        $sql="DELETE tbl_list,tbl_user FROM tbl_list INNER JOIN tbl_user where tbl_user.email = tbl_list.contactemail and tbl_list.id=$id";
         $this->db->query($sql, array($id));

       return true;


	
	}

	
	
	
}