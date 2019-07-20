<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
	function __construct(){
		parent::__construct();

	$this->load->model('m_admin');
	}
	public function index(){
	$this->load->view('v_halaman_admin');
	}
	function loadjam(){
		$hari = $this->input->post('hari');
		$data=$this->m_admin->fetchjadwal($hari);
		echo json_encode($data);
    }
		
	
}