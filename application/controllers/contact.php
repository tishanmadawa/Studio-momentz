<?php
class contact extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->model('user_model');
	}
	
	public function index()
	{
		// set form validation rules
		
		$this->form_validation->set_rules('name', 'Name', 'trim|required|alpha|max_length[30]');
		$this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email');
		$this->form_validation->set_rules('mobile', 'Mobile', 'trim|required');
		
		// submit
		if ($this->form_validation->run() == FALSE)
        {
			// fails
			$this->load->view('contact_view');
        }
		else
		{
			//insert user details into db
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'mobile' => $this->input->post('mobile'),
				'subject' => $this->input->post('subject')
			);
			$this->load->view('contact_view');
			if ($this->user_model->insert_contact($data))
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Send message</div>');
				redirect('contact/index');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
				redirect('contact/index');
			}
		}
	}
}