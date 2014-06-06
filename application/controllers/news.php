<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller
{
    public function index()
    {
        $this->load->view('home');
        $this->load->view('news/newslist');
        //$this->session->sess_destroy();
        //print_r($this->session->all_userdata());
        //echo $this->session->userdata('email');
    }

    public function add(){
    	$data['jsfile'] = 'js/news/addlist.js';
    	$this->load->view('home',$data);
    	$this->load->view('news/addnews');
    }
}

/* End of file news.php */