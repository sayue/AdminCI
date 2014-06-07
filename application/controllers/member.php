<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller
{
    public function index()
    {
        $data['member'] = $this->show_model->showmember();
        $this->load->view('home',$data);
        $this->load->view('member/memberlist');
        //$this->session->sess_destroy();
        //print_r($this->session->all_userdata());
        //echo $this->session->userdata('email');
    }

    public function add(){
    	$this->load->view('home');
    	$this->load->view('member/addmember');
    }
}

/* End of file member.php */