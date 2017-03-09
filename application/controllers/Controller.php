<?php

	class Controller extends CI_Controller{
    public function __construct(){
      parent::__construct();
      $this->load->model('BookingModel');
      $this->load->helper('url');
      $this->load->helper('form');

      // Load form validation library
      $this->load->library('form_validation');

      // Load session library
      $this->load->library('session');

      // Load database
      $this->load->model('Viewdata');

    }
		public function index(){
			$data['table']= $this->Viewdata->gettable();
                    $this->load->view('package', $data, FALSE);
                        
		}
                public function loadhome(){
			$this->load->view('home');
		}
                
                public function loadview(){
                    //$this->load->model('Viewdata');
                    //$data = $this->Viewdata->gettable();
                    //$this->load->view('view',$data);
                    
                    $this->data['table']= $this->Viewdata->gettable();
                    $this->load->view('packageView', $this->data, FALSE);
                    
                }
                
                public function loadaddnew(){
                    $this->load->view('packageAdd');
                    
                }
                
                public function loadedit($id){
                    $this->data['edit_data']= $this->Viewdata->edit_data($id);
                    $this->load->view('packageEdit', $this->data, FALSE);
                }


                public function submit_data(){
                    
                
                         $data = array('Package' => $this->input->post('Package'),
                                  'Price' => $this->input->post('Price'),
                                  'NoofPhotoes' => $this->input->post('NoofPhoto'),
                                  'NoofCameramen'  => $this->input->post('NoofCameramen'),
                                  'Flashes' => $this->input->post('Flashes'),
                                  'VideoHours' => $this->input->post('VideoHours'));
    
                    $insert = $this->Viewdata->insert_data($data);
                    $this->session->set_flashdata('message', 'Your data inserted Successfully..');
                    redirect('Controller/loadview');
                    //$this->load->Controller('loadview');
                }
                
                public function update_data($Package){
                 $data = array('Package' => $this->input->post('Package'),
                                  'Price' => $this->input->post('Price'),
                                  'NoofPhotoes' => $this->input->post('NoofPhotoes'),
                                  'NoofCameramen'  => $this->input->post('NoofCameramen'),
                                  'Flashes' => $this->input->post('Flashes'),
                                  'VideoHours' => $this->input->post('VideoHours'));
                    
                    $this->db->where('Package', $Package);
                    $this->db->update('studio', $data);
                    $this->session->set_flashdata('message', 'Your data updated Successfully..');
                    redirect('Controller/loadview');
                }
                
                public function delete($Package){
                    $this->db->where('Package', $Package);
                    $this->db->delete('studio');
                    $this->session->set_flashdata('message', 'Your data deleted Successfully..');
                    redirect('Controller/loadview');
                }
                
                
                public function loadsearch(){
                    $this->load->view('packageSearch');
                }

                public function search_data(){
                    $data = $this->input->post('Package');
                    $this->data['search'] = $this->Viewdata->search($data);
                    $this->load->view('packageSearch_view',$this->data);
                    
                    
                    
                    
                }






                /*public function getdata(){
                    $this->load->model('Viewdata');
                    $data = $this->Viewdata->gettable();
                   
                    $this->load->view('view',$data);
                }*/
//*****************************************************************
               
      
	}

?>





