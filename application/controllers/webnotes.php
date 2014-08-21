<?php

class Webnotes extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('notes_model');
		$this->load->model('login_model');
		$this->load->helper('form');
	}
	public function index(){
		$data['content']='home';
		$this->load->view('layout/template',$data);
	}
	public function notes()
	{
		//$this->load->model('notes_model');
		$data['content']='mynotes';
		$data['notes']=$this->notes_model->get_notes();
		//$data['title']='My notes';
		
		$this->load->view('layout/template',$data);
	}
	
	public function addnote()
	{
		$this->load->library("form_validation");
		
		if($this->input->post('save')){
			$this->form_validation->set_rules('notesText', 'Input notes', 'trim|required|max_length[1000]|xss_clean');
			if($this->form_validation->run()==true){
				$note=$this->input->post('notesText');
				$phpnotes['notes']=$note;
				
				$this->db->insert('phpnotes',$phpnotes);
				//print_r($phpnotes);
			}
			$this->notes();
		}
		elseif($this->input->post('del')){
			$this->form_validation->set_rules('notes[]', 'Checked notes', 'required');
			if($this->form_validation->run()==true){
				$checked= $this->input->post('notes');
				$checked=array_values($checked);
				$this->db->where_in('id',$checked)->delete('phpnotes');
				//print_r($checked);
			}
			$this->notes();
		}
		//$this->index();
	}
}
?>