<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_halaman_awal extends CI_Controller {
	function __construct(){
		parent::__construct();
	
	}
	public function index(){
				$this->load->library('session');
		if($this->session->userdata('akses')=='1'){
			redirect('admin');
		}
		else{
			$this->load->view('v_halaman_awal');
		}
		
	}
}