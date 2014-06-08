<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends CI_Controller
{
    public function index()
    {
        $data['academic'] = $this->show_model->showproject('academic');
        $data['practical'] = $this->show_model->showproject('practical');
        $data['jsfile'] = 'js/project/projectlist.js';
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

    public function showproject($id){
        $result = $this->show_model->showprojectbyid($id);
        $result = implode("%",$result);
        //$result = 'hello';
        echo $result;
    }
}

/* End of file project.php */