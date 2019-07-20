<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_input_lagu extends CI_Controller {
	function __construct(){
		parent::__construct();
		 $this->load->helper(array('form', 'url'));
	}
		public function index(){
			$this->load->view('v_input_lagu',array('error' => ' ' ));
	}
	    public function do_upload()
        {
                $config['upload_path']          = './ringtone/';
                $config['allowed_types']        = 'mp3';
                $config['max_size']             = 0;
               

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('v_input_lagu', $error);
                }
                else
                {
                        $data = $this->upload->data(); // Get the file data
                $fileData[] = $data; // It's an array with many data
                // Interate throught the data to work with them
                foreach ($fileData as $file) {
                    $file_data = $file;
                }

             

   


                        $this->db->insert('ringtone', array(
                                // So you can work with the values, like:
                                'nama_file' => $file_data['client_name'],
                            ));
                            redirect('/');
                }
        }
}