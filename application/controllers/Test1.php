<?php
	class Test1 extends CI_Controller{

		

		public function q1b($a,$b){
			echo "sum of your number is ".($a+$b);

		}

		public function q1c($a,$b,$c,$d){
			echo "sum of your number is ".($a+$b+$c);

		}

		public function q1d(){
			$this->load->view('Q1-D');

		}

		public function q1e($b){
			$data['q1']=$b;
			$this->load->view('Q1-D',$data);

		}
		public function q1f(){
			
			$this->load->model('test2');
			$profile=$this->test2->q1f1();
			print_r($profile);

		}
	}



?>