<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Intro extends CI_Controller{

	public function index($id = 1){
		switch($id){
			case 1 : $data['intro'] = $this->show_model->showintrobyid(1); 
			break;

			case 2 : $data['intro'] = $this->show_model->showintrobyid(2); 
			break;

			case 3 : $data['intro'] = $this->show_model->showintrobyid(3); 
			break;

			case 4 : $data['intro'] = $this->show_model->showintrobyid(4); 
			break;

			case 5 : $data['intro'] = $this->show_model->showintrobyid(5); 
			break;

			case 6 : $data['intro'] = $this->show_model->showintrobyid(6); 
			break;

			default : show_error('您无权访问该模块，该错误已经被记录！点击<a href="'. site_url('home') .'">返回</a>');
		}
		
		$data['cssfile'] = 'css/style2.css';
		$this->load->view('module/header',$data);
		$this->load->view('module/nav');
		$this->load->view('intro/history');
		$this->load->view('module/footer');
		//$this->load->view('intro/history');
	}
}

/* End of file intro.php */