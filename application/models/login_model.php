<?php
class Login_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		//$this->load->library('session');
	}

	
	public function logged_in(){
		$is_logged_in=$this->session->userdata('is_logged_in');
		if(isset($is_logged_in) && $is_logged_in==true)
			return true;
		else
			return false;
	}
}