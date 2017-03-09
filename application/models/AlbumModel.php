<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class AlbumModel extends CI_Model{

		

		function upload($data){
			$this->db->insert('photo',$data);


		}
		function album($album){
			$data=array(
				'album'=>$album
				);
			$this->db->insert('album',$data);


		}
		function view_album(){
			$query=$this->db->get('album');
			return $result=$query->result();
		}

		function view_photo(){
			$query=$this->db->get('photo');
			return $result=$query->result();
		}



	}
	?>