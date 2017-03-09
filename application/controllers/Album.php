<?php
	class Album extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('albumModel');
			$this->load->helper('url');
			    $this->load->library('session');


		}

		function index(){
			$this->load->view('album', array('error' => ' ' ));
		}

		function add(){
				 $config['upload_path']          = './images/album/';
				$config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 50000;
                $config['max_width']            = 50000;
                $config['max_height']           = 50000;

                $this->load->library('upload', $config);

               
				for ($x = 0; $x <= ($this->input->post('photoi')); $x++) {
					$upload_data=$this->upload->data();
					$file_name=$upload_data['file_name'];
					 $this->upload->do_upload("photo$x");
					 if($file_name){
					$data=array(
					 	'album'=>$this->input->post('album'),
					 	'photo'=>$file_name);
					 $this->albumModel->upload($data);

					}
				


					 
					 
					 


  					
                
            }
            $this->load->view('album');
            $this->albumModel->album($this->input->post('album'));

            }

     function view(){
     	$last = $this->uri->total_segments();
			$album=$this->uri->segment($last);
     		$data['album']=$album;
     		$data['photo']=$this->albumModel->view_photo();
			$this->load->view('albumView',$data);




     }
     function gallery(){
     	$data['album']=$this->albumModel->view_album();
     	$this->load->view('gallery',$data);

     }



	    }


		?>