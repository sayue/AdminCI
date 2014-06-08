<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Link extends CI_Controller
{
    public function index()
    {
        $data['school'] = $this->show_model->showlink('school');
        $data['country'] = $this->show_model->showlink('country');
        $data['science'] = $this->show_model->showlink('science');
        $data['academic'] = $this->show_model->showlink('academic');
        $data['jsfile'] = 'js/link/linklist.js';
        $this->load->view('home',$data);
        $this->load->view('link/linklist');
        //$this->session->sess_destroy();
        //print_r($this->session->all_userdata());
        //echo $this->session->userdata('email');
    }

    public function add(){
    	$this->load->view('home');
    	$this->load->view('link/addlink');
    }

    public function showlink($id){
        $result = $this->show_model->showlinkbyid($id);
        $result = implode("%",$result);
        echo $result;
    }
}

/* End of file link.php */