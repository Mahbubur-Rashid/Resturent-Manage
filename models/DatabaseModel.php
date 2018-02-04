<?php
class DatabaseModel extends CI_Model {
    
    public function show( $tbl, $limit = 1, $order_col = '')
    {  // echo "hi model get_packages_list 888789789"; die;
       // $this->load->database();
        $this->db->select('*');
        $this->db->from($tbl);
        
        $this->db->order_by( $order_col , 'DESC');
        $this->db->limit($limit);

        $query =$this->db->get();
        $data=$query->result_array();
        //  echo "<pre>"; var_dump($query);die;
        return $data;  
    }
    
    public function add( $data, $tbl )
    {   //echo "add model";die;
        $insert = $this->db->insert( $tbl, $data);
        $insert_id = $this->db->insert_id();

        return  $insert_id;
        // return $insert;
    }

    public function del( $tbl = '' , $tbl_col = '', $id = '' )
    {  
        // echo "wel come to del query"; 
        // echo 'table name >>>'.$tbl.'COLOM:'.$tbl_col.'ID:'.$id;
        // die;
       //$hh= $this->db->query("delete from {$tdl} where {$tbl_col} = {$td}");
       $this->db->delete($tbl, array($tbl_col => $id));
       return true;
    }

    public function edit( $tbl_name, $col_nam, $id, $data )
    {
        $this->db->where($col_nam, $id);
        $this->db->update($tbl_name, $data);
        return true;
    }

    public function get_autocomplete($tbl_name, $src_col, $src_col2, $src_col3, $search_data)
    {
      //echo $tbl_name; die;
        $this->db->select('*');
        $this->db->from($tbl_name);
       
        $this->db->like($src_col, $search_data);
        $this->db->or_like($src_col2, $search_data);
        $this->db->or_like($src_col3, $search_data);
        $data = $this->db->get()->result();
         
        //var_dump($data) ;die;
        return $data;
    }


    public function get_autocomplete2($tbl_name, $src_col, $src_col2, $src_col3, 
                                 $src_col4, $src_col5, $src_col6, $src_col7, $search_data)
    {
      //echo $tbl_name; die;
        $this->db->select('*');
        $this->db->from($tbl_name);
       
        $this->db->like($src_col, $search_data);
        $this->db->or_like($src_col2, $search_data);
        $this->db->or_like($src_col3, $search_data);
        $this->db->or_like($src_col4, $search_data);
        $this->db->or_like($src_col5, $search_data);
        $this->db->or_like($src_col6, $search_data);
        $this->db->or_like($src_col7, $search_data);
        $data = $this->db->get()->result();
         
        //var_dump($data) ;die;
        return $data;
    }

    public function get_autocomplete3($tbl_name, $src_col, $src_col2, $src_col3, $search_data)
    {
      //echo $tbl_name; die;
        $this->db->select('*');
        $this->db->from($tbl_name);
       
        $this->db->like($src_col, $search_data);
        $this->db->or_like($src_col2, $search_data);
        $this->db->or_like($src_col3, $search_data);
        $data = $this->db->get()->result();
         
        //var_dump($data) ;die;
        return $data;
    }
  
    public function showlist( $tbl, $limit = 1, $order_col = '')
    {  // echo "hi model get_packages_list 888789789"; die;
        $this->load->database();
        $this->db->select('*');
        $this->db->from($tbl);
        
        $this->db->order_by( $order_col , 'asc');
        $this->db->limit($limit);

        $query =$this->db->get();
        $data=$query->result_array();
        //  echo "<pre>"; var_dump($query);die;
        return $data;  
    }
    public function sortedit( $tbl_name, $col_nam, $id, $data )
    { 

        // echo "Table: ".$tbl_name;echo '<pre>';
        // echo "Column: ".$col_nam;echo '<pre>';
        // echo "Id: ".$id;echo '<pre>';
        // echo "Value: ".$data; echo '<pre>'; 
        //die;
        $this->db->set('cuisine_sort_position', $data);
        $this->db->where($col_nam, $id);
        $this->db->update($tbl_name);
        return true;
    }

    public function sorteditpack( $tbl_name, $col_nam, $id, $data )
    { 

        // echo "Table: ".$tbl_name;echo '<pre>';
        // echo "Column: ".$col_nam;echo '<pre>';
        // echo "Id: ".$id;echo '<pre>';
        // echo "Value: ".$data; echo '<pre>'; 
        //die;
        $this->db->set('sort_position', $data);
        $this->db->where($col_nam, $id);
        $this->db->update($tbl_name);
        return true;
    }

    



// count() and get_items() functions are for 
// pagination on the dishes
//  menu that is now comment out

    public function count( $tbl = '')
    {
        $this->db->select('*');
        $this->db->from($tbl);
        $query = $this->db->get();
        $data = $query->num_rows(); 

        return $data;        
    }



    public function get_items( $limit_start, $limit_end)
    {
        
        // echo 'start :  '.$limit_start;
        // echo 'end limit  :  '.$limit_end;
        //  die;
        $this->db->select('dishes.dishes_id');
        $this->db->select('dishes.dishes_name');
        $this->db->select('dishes.dishes_icon');
        $this->db->select('dishes.dishes_date');
    
        $this->db->from('dishes');





        $this->db->limit( $limit_start , $limit_end );
        //$this->db->limit('4', '4');


        $query = $this->db->get();

        return $query->result_array();  
    }

    function get_currency_list() {     
        $query = $this->db->get('currency');
        //$query = $this->db->order_by( 'currency_id' , 'asc');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return FALSE;
        }
    }
 
    function insert_csv($data) {
        $this->db->insert('currency', $data);
    }

}
	
