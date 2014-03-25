<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{
	
	public function index()
	{
		$this->load->view('home');
		//$this->session->sess_destroy();
		print_r($this->session->all_userdata());
		echo $this->session->userdata('email');
	}
}

/* End of file login.php */
