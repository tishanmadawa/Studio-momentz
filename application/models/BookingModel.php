<?php
	class BookingModel extends CI_Model{
		public function form_insert($data){
			$this->db->insert('event',$data);
		}

		public function view_event(){

			$this->db->order_by("Status", "asc");
			$query=$this->db->get('event');
			return $result=$query->result();
		}

		public function searchData($date){

			
			$query=$this->db->get_where('event',array('eventDate'=>$date));
			return $result=$query->result();
		}

		public function editData($id){

			
			$query=$this->db->get_where('event',array('id'=>$id));
			return $result=$query->result();
		}


		

		public function accept($id){
			$accept='Accept';

			$data=array('Status'=>$accept);

			$this->db->where('id', $id);
			$this->db->update('event', $data);
			
			
			$query=$this->db->get('event');
			return $result=$query->result();
		}
		public function package(){
			$query=$this->db->get('studio');
			return $result=$query->result();
		}






		public function reject($id){

			$data=array('Status'=>"Reject");

			$this->db->where('id', $id);
			$this->db->update('event', $data);
			
			$this->db->order_by("Status", "asc");
			$query=$this->db->get('event');
			return $result=$query->result();
		}

	}




?>