<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_login');
	}
	public function index(){
			//load session library
		

		$output = array('error' => false);

		$username = $_POST['username'];
		$password = $_POST['password'];

		$data = $this->m_login->login($username, $password);

		if($data->num_rows() > 0){ //jika login admin
			$data1=$data->row_array();
	$this->session->set_userdata('masuk',TRUE);
if($data1['id']=='1'){ //Akses admin
		$this->session->set_userdata('akses','1');
		$this->session->set_userdata('username',$data1['username']);
		$output['message'] = 'Logging in. Please wait...';
}
}else{ //jika login sebagai user
		$output['error'] = true;
			$output['message'] = 'Login Invalid. User not found';
}
		
		echo json_encode($output); 
	}
	function logout(){
			$this->load->library('session');
		$this->session->sess_destroy();
		redirect('/');
	}
}