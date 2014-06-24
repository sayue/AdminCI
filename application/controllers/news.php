<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller{

	public function index($id = false){
		$data['cssfile'] = 'css/style2.css';
		$this->load->view('module/header',$data);
		$this->load->view('module/nav');

		if($id != false){
			$data['news'] = $this->show_model->shownewsbyid($id);
			if($data['news'] == ''){
                header("Content-type: text/html; charset=utf-8");
				show_error('您无权访问该模块，该错误已经被记录！点击<a href="'. site_url('home') .'">返回</a>');
			}
			$this->load->view('news/each',$data);
		}else{
			$data['meeting'] = $this->show_model->shownews('meeting',false,3,'orderdate');
			$data['visit'] = $this->show_model->shownews('visit',false,3,'orderdate');
			$data['prize'] = $this->show_model->shownews('prize',false,3,'orderdate');
			$this->load->view('news/list',$data);
		}
		
		$this->load->view('module/footer');
	}

	public function meeting($page = 1){
		$data['num'] = $this->show_model->count_num('news',array('kind' => 'meeting'));

		$pages = ($data['num']%14 == 0)?$data['num']/14:ceil($data['num']/14);//页数

		if($page > $pages || !is_numeric($page)){
            header("Content-type: text/html; charset=utf-8");
			show_error('您无权访问该模块，该错误已经被记录！点击<a href="'. site_url('home') .'">返回</a>');
		}

		$data['pages'] = $pages;
		//echo $pages;
		$data['pagenow'] = $page;
		$start = ($page-1)*14;

		$data['meeting'] = $this->show_model->shownews('meeting',$start);
		$data['cssfile'] = 'css/style2.css';
		$this->load->view('module/header',$data);
		$this->load->view('module/nav');
		$this->load->view('news/meeting');
		$this->load->view('module/footer');
	}

	public function visit($page = 1){
		$data['num'] = $this->show_model->count_num('news',array('kind' => 'visit'));

		$pages = ($data['num']%14 == 0)?$data['num']/14:ceil($data['num']/14);//页数

		if($page > $pages || !is_numeric($page)){
            header("Content-type: text/html; charset=utf-8");
			show_error('您无权访问该模块，该错误已经被记录！点击<a href="'. site_url('home') .'">返回</a>');
		}

		$data['pages'] = $pages;
		//echo $pages;
		$data['pagenow'] = $page;
		$start = ($page-1)*14;

		$data['visit'] = $this->show_model->shownews('visit',$start);
		$data['cssfile'] = 'css/style2.css';
		$this->load->view('module/header',$data);
		$this->load->view('module/nav');
		$this->load->view('news/visit');
		$this->load->view('module/footer');
	}

	public function prize($page = 1){
		$data['num'] = $this->show_model->count_num('news',array('kind' => 'prize'));

		$pages = ($data['num']%14 == 0)?$data['num']/14:ceil($data['num']/14);//页数

		if($page > $pages || !is_numeric($page)){
            header("Content-type: text/html; charset=utf-8");
			show_error('您无权访问该模块，该错误已经被记录！点击<a href="'. site_url('home') .'">返回</a>');
		}
		
		$data['pages'] = $pages;
		//echo $pages;
		$data['pagenow'] = $page;
		$start = ($page-1)*14;

		$data['prize'] = $this->show_model->shownews('prize',$start);
		$data['cssfile'] = 'css/style2.css';
		$this->load->view('module/header',$data);
		$this->load->view('module/nav');
		$this->load->view('news/reward');
		$this->load->view('module/footer');
	}
}

/* End of file news.php */