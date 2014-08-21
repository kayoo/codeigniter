<?php

class Login extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
		//$this->load->library('session');
	}
	
	public function validate(){
		$u=$this->input->post('username');
		$p=$this->input->post('password');
		
		if($u=='Coder' && $p=='codeigniter'){
		$session=array(
			'username'=>$u,
			'is_logged_in'=>true
		);
		
		$this->session->set_userdata($session);
		//echo "success";
		redirect('webnotes/notes');
		}
		else
			echo "Your username or password is not valid.";
	}
	
	public function logout(){
		$this->session->unset_userdata();
		$this->session->sess_destroy();
		redirect('webnotes/notes');
	}
}