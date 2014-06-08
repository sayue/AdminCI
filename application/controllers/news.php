<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller
{
    public function index()
    {
        $data['meeting'] = $this->show_model->shownews('meeting');
        $data['visit'] = $this->show_model->shownews('visit');
        $data['prize'] = $this->show_model->shownews('prize');
        $data['jsfile'] = 'js/news/newslist.js';
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

    public function shownewsid($id){
        //$id = $this->input->post('newsid');
        $result = $this->show_model->shownewsbyid($id);
        $result = implode("%",$result);
        echo $result;
        //return $result;
    }
}

/* End of file news.php */