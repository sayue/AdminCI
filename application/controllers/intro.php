<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Intro extends CI_Controller
{

    public function index()
    {
    	$data['intro'] = $this->show_model->showintro();
    	$data['id'] = ['One','Two','Three','Four','Five','Six'];
        //$data['jsfile'] = 'js/intro.js';
        $this->load->view('home',$data);
        
        $this->load->view('intro');
      
        //$this->session->sess_destroy();
        //print_r($this->session->all_userdata());
        //echo $this->session->userdata('email');
    }
}

/* End of file intro.php */