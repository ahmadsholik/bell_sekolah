<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_input_jadwal extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_input_jadwal');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}
	function index(){
		$data['groups'] = $this->m_input_jadwal->fetchall();
		$data['error'] = ' ';
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		$this->form_validation->set_rules('jam', 'Jam', 'required');
		$this->form_validation->set_rules('menit', 'Menit', 'required');
		$this->form_validation->set_rules('detik', 'Detik', 'required');
		
		if ($this->form_validation->run() == FALSE){
			$this->load->view('v_input_jadwal',$data);
		}else{
			$this->m_input_jadwal->add();
				$this->session->set_flashdata('flash', 'Ditambahkan');
				redirect('c_input_jadwal');
		}
	
	}
	function add(){
		
	}
	function test(){
	echo $this->m_input_jadwal->add("Rabu",5);
	}
}