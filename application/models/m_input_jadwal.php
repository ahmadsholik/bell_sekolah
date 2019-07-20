<?php
	class m_input_jadwal extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}
			function add(){
			
				$jam = $this->input->post('jam').":".$this->input->post('menit').":".$this->input->post('detik');
				$data = array(
						'hari' 	=> $this->input->post('hari'), 
						'jam' 	=> $jam, 
						'deskripsi' => $this->input->post('deskripsi'), 
						'bell' => $this->input->post('ringtone'), 
					);
				$result=$this->db->insert('jadwalpelajaran',$data);
				return $result;
		}
		function fetchall(){
			$query = $this->db->query('SELECT nama_file FROM ringtone');
			return $query->result();
		}
	}