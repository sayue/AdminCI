<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

	public function index(){
		$data['cssfile'] = 'css/style.css';
		$data['news'] = $this->show_model->home_shownews();
		$data['notice'] = $this->show_model->home_notice();
		$this->load->view('index',$data);
	}
}

/* End of file home.php */