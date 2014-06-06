<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Intro extends CI_Controller
{
    public function index()
    {
        $this->load->view('home');
        $this->load->view('intro');
        //$this->session->sess_destroy();
        //print_r($this->session->all_userdata());
        //echo $this->session->userdata('email');
    }
}

/* End of file intro.php */