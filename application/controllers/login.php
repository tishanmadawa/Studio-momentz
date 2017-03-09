<?php
class login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
    $this->load->library('session');
		$this->load->model('user_model');
	}
    public function index()
    {
		// get form input
		$this->load->view('login_view');
	}


	public function login(){
		$this->form_validation->set_rules("email", "Email-ID", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required");
		if ($this->form_validation->run() == FALSE)
        {
			// fails
			$this->load->view('login_view');
        }
        else{
        	$email = $this->input->post("email");
        	$password = $this->input->post("password");
        	$data=$this->user_model->get_user($email);

        	foreach($data as $row)
            {
              	if($data[0]->password==$password){
                  if($data[0]->type==1){
                    
                    $user=array(
                        'user'=>'admin',
                        'username'=>$email,


                      );

                    $this->session->set_userdata($user);
              		  redirect(base_url() . 'index.php');
                  }
                  else{
                    
                    $user=array(
                        'user'=>'user',
                        'username'=>$email,


                      );

                    $this->session->set_userdata($user);
                redirect(base_url() . 'index.php');  
                }                
              	}else{
                      $this->load->view('login_view');

                }
               
               
            }

        }
    	

        
    }
    public function out(){
      $this->session->unset_userdata('user');
      $this->session->unset_userdata('email');
      redirect(base_url() . 'index.php');  
    }
}