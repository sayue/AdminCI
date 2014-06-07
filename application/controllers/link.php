<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Link extends CI_Controller
{
    public function index()
    {
        $this->load->view('home');
        $this->load->view('link/linklist');
        //$this->session->sess_destroy();
        //print_r($this->session->all_userdata());
        //echo $this->session->userdata('email');
    }

    public function add(){
    	$this->load->view('home');
    	$this->load->view('link/addlink');
    }
}

/* End of file link.php */