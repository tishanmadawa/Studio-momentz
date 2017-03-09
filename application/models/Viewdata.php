<?php

class Viewdata extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function gettable(){
        
        
        $query=$this->db->query("SELECT ud.* FROM studio ud" );
                                 
        return $query->result_array();
        
        
    }
    
    
    public function insert_data($data){
        $this->db->insert('studio', $data); 
        return TRUE;
    }
    
    public function edit_data($Package){
        $query=$this->db->query("SELECT ud.*
                                 FROM studio ud 
                                 WHERE ud.Package = '$Package'");
        return $query->result_array();
    }
    
    public function search($data){
        $query=$this->db->query("SELECT * FROM studio WHERE Package  LIKE '%".$data."%'");
        return $query->result();
    }
    
}





?>