<?php
class Notes_model extends CI_Model{
	/*
	public function __contruct()
	{
		//$this->load->database();
	}
	*/
	
	
	public function get_notes($slug=FALSE){
		if($slug===FALSE)
		{
			$query= $this->db->get('phpnotes');
			return $query->result_array();
		}
		
		$query=$this->db->get_where('phpnotes',array('$slug'=>$slug));
	}
	
	
}