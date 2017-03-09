<?php
class Controller_1 extends CI_controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Model_1');
		$this->load->helper('url');
		    $this->load->library('session');


		}


	public function add(){
		$data = array(
				'fname' => $this->input->post('fname'),
				'lname' => $this->input->post('lname'),
				'email' => $this->input->post('email'),
				'uname' => $this->input->post('uname'),
				'password' => $this->input->post('password'),
				'cpassword' => $this->input->post('cpassword')
			);

		
		$this->Model_1->setData($data);
		$this->load->view("View_1");
	}
	/*public function edit(){
			$id=$this->uri->segment(3);
			$data['result']=$this->Model_1->editData($id);
			$this->load->view('View_2',$data);
	}*/
	public function edit(){
			
			$email=$this->session->userdata('username');

			$data['result']=$this->Model_1->get_user($email);
			$this->load->view('View_2',$data);
			//$this->update();
		}

	public function userView(){
			
		$data['result']=$this->Model_1->displayData();
		$this->load->view('userDetails2',$data);
	}
	function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('user');
		redirect('Controller_1/userView');
	}
		/*display success message
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Employee Record is Successfully deleted!</div>');
            redirect('Controller_1/userView');
	*/
	function update() {
		$id= $this->input->post('id');
		$data=array(
				'fname' => $this->input->post('fname'),
				'lname' => $this->input->post('lname'),
				'email' => $this->input->post('email'),
				'uname' => $this->input->post('uname'),
				'password' => $this->input->post('password'),
				'cpassword' => $this->input->post('cpassword'));

		$this->Model_1->updateQuery($data,$id);
		//$this->userView();
         redirect(base_url() . 'index.php');
		}

		
}
?>
