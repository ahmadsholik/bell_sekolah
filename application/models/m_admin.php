<?php
	class m_admin extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function getjam($hari,$jam){
			$query=$this->db->query("SELECT * FROM jadwalpelajaran WHERE hari='$hari' AND jam='$jam'");
			return $query;
		}
		function fetchjadwal($hari){
			$this->db->where('hari', $hari);
			// here we select every column of the table
			
			$hasil=$this->db->get('jadwalpelajaran');
			return $hasil->result();
		}
	}