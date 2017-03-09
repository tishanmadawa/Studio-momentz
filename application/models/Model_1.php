<?php
class Model_1 extends CI_model{
	function setData(){
		
		/*$this->db->set('fname',$fname);
		$this->db->set('lname',$lname);
		$this->db->set('email',$email);
		//$this->db->set('mobile',$mobile);
		$this->db->set('uname',$uname);
		$this->db->set('password',$password);
		$this->db->set('copassword',$cpassword);*/
		$query=$this->db->insert('user',$data);
		return $query->result();
	}
	public function form_insert($data){
		$this->db->insert('user',$data);
	}
	
	/*public function editData($id){

		$query=$this->db->get_where('signup',array('id'=>$id));
		return $result=$query->result();
	}*/

	function displayData(){
		
		//$this->load->database();
		$query=$this->db->get('user');
		//SELECT * FROM signup;
		return $query->result();
	}

	public function deleteData($id){

		$query=$this->db->delete('user',array('id'=>$id));
		return $result=$query->result();
	}
	public function updateData($id){
		
		$this->db->where('id', $id);
		$query=$this->db->get('user',array('id'=>$id));
		return $query->result();


	}
	function get_user($email)
	{
		$query=$this->db->get_where('user',array('email'=>$email));
		return $result=$query->result();
		
	}


	public function updateQuery($data,$id){
		$this->db-> where('id',$id);
		$this->db->update('user',$data);
	}
	
	
}
?>
