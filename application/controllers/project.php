<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends CI_Controller
{
    public function index()
    {
        $data['academic'] = $this->show_model->showproject('academic');
        $data['practical'] = $this->show_model->showproject('practical');
        $this->load->view('home',$data);
        $this->load->view('project/projectlist');
        //$this->session->sess_destroy();
        //print_r($this->session->all_userdata());
        //echo $this->session->userdata('email');
    }

    public function add(){
    	$this->load->view('home');
    	$this->load->view('project/addproject');
    }
}

/* End of file project.php */