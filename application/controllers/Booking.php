<?php
	class Booking extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('BookingModel');
			$this->load->library('form_validation');
    $this->load->library('session');
			$this->load->helper('url');

		}

		public function view(){
		$data['result']=$this->BookingModel->package();

			
		$this->load->view('booking',$data);
	}	

	public function add(){
		$this->form_validation->set_rules('phone', 'phone', 'required|regex_match[/^[0-9().-]+$/]|xss_clean');
		$this->form_validation->set_rules('name', 'eventNameOrClientName', 'required');





		if($this->form_validation->run() ==False){
			$data['result']=$this->BookingModel->package();
			$this->load->view("booking",$data);
		}else{
		 
		 $data=array(
		 	'email'=>$this->session->userdata('username'),
		 
		 'phone' =>$this->input->post('phone'),
		 		 'contact' =>$this->input->post('contact'),

		 'eventNameOrClientName' =>$this->input->post('eventNameOrClientName'),

		 'eventDate' =>$this->input->post('eventDate'),

		 'eventStartTime' =>$this->input->post('eventStartTime'),

		 'eventEndTime' =>$this->input->post('eventEndTime'),


		 'eventLocation' =>$this->input->post('eventLocation'),

		 'package' =>$this->input->post('package'),

		 'image' =>$this->input->post('image'),
		 'timeline' =>$this->input->post('timeline'),
		 'social' =>$this->input->post('social'));

		 $this->BookingModel->form_insert($data);
		 		$data['result']=$this->BookingModel->package();


		 $this->load->view("booking",$data);

		}
		 
		}

		public function eventView(){
			
			$data['result']=$this->BookingModel->view_event();

			$this->load->view('bookingDetails',$data);
			
		}
		public function search(){
			$date=$this->input->post('date');
			$data['result']=$this->BookingModel->searchData($date);
			$this->load->view('bookingDetails',$data);
		}
		public function edit(){
			$data['package']=$this->BookingModel->package();

			$last = $this->uri->total_segments();
			$id=$this->uri->segment($last);
			$data['result']=$this->BookingModel->editData($id);
			$this->load->view('edit',$data);
		}

		public function accept(){
			$last = $this->uri->total_segments();
			$id=$this->uri->segment($last);

			$data['result']=$this->BookingModel->accept($id);
			
			redirect(base_url() . 'index.php/Booking/eventView');

		}

		public function reject(){
			$last = $this->uri->total_segments();
			$id=$this->uri->segment($last);
			$data['result']=$this->BookingModel->reject($id);
			redirect(base_url() . 'index.php/Booking/eventView');
		}
		
		
	}



?>