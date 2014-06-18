<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends CI_Controller{

	public function index($id = false){
		
		
		$data['cssfile'] = 'css/style2.css';
		$this->load->view('module/header',$data);
		$this->load->view('module/nav');
		if($id != false){
			$data['project'] = $this->show_model->showprojectbyid($id);
			if($data['project'] == ''){
                header("Content-type: text/html; charset=utf-8");
				show_error('您无权访问该模块，该错误已经被记录！点击<a href="'. site_url('home') .'">返回</a>');
			}
			$this->load->view('project/each',$data);
		}else{
			$data['academic'] = $this->show_model->showproject('academic',false,5);
			$data['practical'] = $this->show_model->showproject('practical',false,5);
			$this->load->view('project/list',$data);
		}
		
		$this->load->view('module/footer');
	}

	public function academic($page = 1){
		$data['num'] = $this->show_model->count_num('project',array('kind' => 'academic'));

		$pages = ($data['num']%14 == 0)?$data['num']/14:ceil($data['num']/14);//页数

		if($page > $pages || !is_numeric($page)){
            header("Content-type: text/html; charset=utf-8");
			show_error('您无权访问该模块，该错误已经被记录！点击<a href="'. site_url('home') .'">返回</a>');
		}

		$data['pages'] = $pages;
		$data['pagenow'] = $page;
		$start = ($page-1)*14;

		$data['academic'] = $this->show_model->showproject('academic',$start);
		//$data['practical'] = $this->show_model->showproject('practical',5);
		$data['cssfile'] = 'css/style2.css';
		$this->load->view('module/header',$data);
		$this->load->view('module/nav');
		$this->load->view('project/academic');
		$this->load->view('module/footer');
	}

	public function practical($page = 1){
		$data['num'] = $this->show_model->count_num('project',array('kind' => 'practical'));

		$pages = ($data['num']%14 == 0)?$data['num']/14:ceil($data['num']/14);//页数
		
		if($page > $pages || !is_numeric($page)){
            header("Content-type: text/html; charset=utf-8");
			show_error('您无权访问该模块，该错误已经被记录！点击<a href="'. site_url('home') .'">返回</a>');
		}

		$data['pages'] = $pages;
		//echo $pages;
		$data['pagenow'] = $page;
		$start = ($page-1)*14;

		$data['practical'] = $this->show_model->showproject('practical',$start);
		//$data['practical'] = $this->show_model->showproject('practical',5);
		$data['cssfile'] = 'css/style2.css';
		$this->load->view('module/header',$data);
		$this->load->view('module/nav');
		$this->load->view('project/practical');
		$this->load->view('module/footer');
	}
}

/* End of file project.php */