<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resource extends CI_Controller
{
    public function index()
    {
        $data['num'] = $this->show_model->showdoccount();
        $this->load->view('home',$data);
        $this->load->view('resource/doc_count');
        
    }

    public function lists()
    {
        $data['magazine'] = $this->show_model->showmagabook('magazine');
        $data['book'] = $this->show_model->showmagabook('book');
        $this->load->view('home',$data);
        $this->load->view('resource/publication');
        
    }

    public function add(){
    	$data['jsfile'] = 'js/resource/add_publication.js';
    	$this->load->view('home',$data);
        $this->load->view('resource/add_publication');
    }

}

/* End of file resource.php */