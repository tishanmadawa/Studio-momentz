<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
       $this->load->database();
    }
	
	function get_user($email)
	{
		$query=$this->db->get_where('user',array('email'=>$email));
		return $result=$query->result();
		
	}
	
	// get user
	function get_user_by_id($id)
	{
		$this->db->where('id', $id);
        $query = $this->db->get('user');
		return $query->result();
	}
	
	// insert
	function insert_user($data)
    {
		return $this->db->insert('user', $data);
	}

	function insert_contact($data)
    {
		return $this->db->insert('contact', $data);
	}
}?>