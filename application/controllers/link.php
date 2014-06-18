<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Link extends CI_Controller{

	public function index(){
		$data['school'] = $this->show_model->showlink('school',false,2);
		$data['country'] = $this->show_model->showlink('country',false,2);
		$data['science'] = $this->show_model->showlink('science',false,2);
		$data['academic'] = $this->show_model->showlink('academic',false,2);
		$data['cssfile'] = 'css/style2.css';
		$this->load->view('module/header',$data);
		$this->load->view('module/nav');
		$this->load->view('link/list');
		$this->load->view('module/footer');
	}

	public function school($page = 1){
		$data['num'] = $this->show_model->count_num('link',array('kind' => 'school'));
		$data['kind'] = 'school';
		$pages = ($data['num']%14 == 0)?$data['num']/14:ceil($data['num']/14);//页数

		if($page > $pages || !is_numeric($page)){
            header("Content-type: text/html; charset=utf-8");
			show_error('您无权访问该模块，该错误已经被记录！点击<a href="'. site_url('home') .'">返回</a>');
		}

		$data['pages'] = $pages;
		//echo $pages;
		$data['pagenow'] = $page;
		$start = ($page-1)*14;
		
		$data['link'] = $this->show_model->showlink('school',$start);
		$data['cssfile'] = 'css/style2.css';
		$this->load->view('module/header',$data);
		$this->load->view('module/nav');
		$this->load->view('link/eachlist');
		$this->load->view('module/footer');
	}

	public function country($page = 1){
		$data['num'] = $this->show_model->count_num('link',array('kind' => 'country'));
		$data['kind'] = 'country';
		$pages = ($data['num']%14 == 0)?$data['num']/14:ceil($data['num']/14);//页数

		if($page > $pages || !is_numeric($page)){
            header("Content-type: text/html; charset=utf-8");
			show_error('您无权访问该模块，该错误已经被记录！点击<a href="'. site_url('home') .'">返回</a>');
		}

		$data['pages'] = $pages;
		//echo $pages;
		$data['pagenow'] = $page;
		$start = ($page-1)*14;

		$data['link'] = $this->show_model->showlink('country',$start);
		$data['cssfile'] = 'css/style2.css';
		$this->load->view('module/header',$data);
		$this->load->view('module/nav');
		$this->load->view('link/eachlist');
		$this->load->view('module/footer');
	}

	public function science($page = 1){
		$data['num'] = $this->show_model->count_num('link',array('kind' => 'science'));
		$data['kind'] = 'science';
		$pages = ($data['num']%14 == 0)?$data['num']/14:ceil($data['num']/14);//页数
		
		if($page > $pages || !is_numeric($page)){
            header("Content-type: text/html; charset=utf-8");
			show_error('您无权访问该模块，该错误已经被记录！点击<a href="'. site_url('home') .'">返回</a>');
		}

		$data['pages'] = $pages;
		//echo $pages;
		$data['pagenow'] = $page;
		$start = ($page-1)*14;

		$data['link'] = $this->show_model->showlink('science',$start);
		$data['cssfile'] = 'css/style2.css';
		$this->load->view('module/header',$data);
		$this->load->view('module/nav');
		$this->load->view('link/eachlist');
		$this->load->view('module/footer');
	}

	public function academic($page = 1){
		$data['num'] = $this->show_model->count_num('link',array('kind' => 'academic'));
		$data['kind'] = 'academic';
		$pages = ($data['num']%14 == 0)?$data['num']/14:ceil($data['num']/14);//页数
		
		if($page > $pages || !is_numeric($page)){
            header("Content-type: text/html; charset=utf-8");
			show_error('您无权访问该模块，该错误已经被记录！点击<a href="'. site_url('home') .'">返回</a>');
		}

		$data['pages'] = $pages;
		//echo $pages;
		$data['pagenow'] = $page;
		$start = ($page-1)*14;

		$data['link'] = $this->show_model->showlink('academic',$start);
		$data['cssfile'] = 'css/style2.css';
		$this->load->view('module/header',$data);
		$this->load->view('module/nav');
		$this->load->view('link/eachlist');
		$this->load->view('module/footer');
	}
}

/* End of file link.php */