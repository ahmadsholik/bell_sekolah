<?php
	class m_login extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function login($username, $password){
			$query=$this->db->query("SELECT * FROM login WHERE username='$username' AND password='$password'");
			return $query;
		}
	}