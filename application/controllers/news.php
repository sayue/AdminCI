<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller
{
    public function index()
    {
        $data['meeting'] = $this->show_model->shownews('meeting');
        $data['visit'] = $this->show_model->shownews('visit');
        $data['prize'] = $this->show_model->shownews('prize');
        $this->load->view('home',$data);
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