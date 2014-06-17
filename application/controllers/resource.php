<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resource extends CI_Controller{

	public function index($id = false){
		$data['cssfile'] = 'css/style2.css';
		$this->load->view('module/header',$data);
		$this->load->view('module/nav');

		if($id != false){
			//$data = array();
			$data = $this->show_model->showpubbyid($id);
			if(!$data){
				show_error('您无权访问该模块，该错误已经被记录！点击<a href="'. site_url('home') .'">返回</a>');
			}
			if($data['kind'] == 'magazine'){
				$data['magazine'] = $this->show_model->showpubbyid($id);
				$this->load->view('resource/magazine',$data);
			}else if($data['kind'] == 'book'){
				$data['book'] = $this->show_model->showpubbyid($id);
				$this->load->view('resource/book',$data);
			}
		}else{
			$data['magazine'] = $this->show_model->showmagabook('magazine',false,5);
			$data['book'] = $this->show_model->showmagabook('book',false,5);
			$this->load->view('resource/list',$data);
		}
		
		
		
		$this->load->view('module/footer');
	}

	public function doc(){
		$data['doc'] = $this->show_model->showdoccount();
		$data['cssfile'] = 'css/style2.css';
		$this->load->view('module/header',$data);
		$this->load->view('module/nav');
		$this->load->view('resource/doc');
		$this->load->view('module/footer');
	}

	public function magazine($page = 1){
		$data['num'] = $this->show_model->count_num('resource',array('kind' => 'magazine'));

		$pages = ($data['num']%14 == 0)?$data['num']/14:ceil($data['num']/14);//页数

		if($page > $pages || !is_numeric($page)){
			show_error('您无权访问该模块，该错误已经被记录！点击<a href="'. site_url('home') .'">返回</a>');
		}
		
		$data['pages'] = $pages;
		//echo $pages;
		$data['pagenow'] = $page;
		$start = ($page-1)*14;

		$data['cssfile'] = 'css/style2.css';
		$this->load->view('module/header',$data);
		$this->load->view('module/nav');

		$data['magazine'] = $this->show_model->showmagabook('magazine',$start);
		$this->load->view('resource/magalist',$data);	
		$this->load->view('module/footer');
	}

	public function book($page = 1){
		$data['num'] = $this->show_model->count_num('resource',array('kind' => 'book'));

		$pages = ($data['num']%14 == 0)?$data['num']/14:ceil($data['num']/14);//页数

		if($page > $pages || !is_numeric($page)){
			show_error('您无权访问该模块，该错误已经被记录！点击<a href="'. site_url('home') .'">返回</a>');
		}

		$data['pages'] = $pages;
		//echo $pages;
		$data['pagenow'] = $page;
		$start = ($page-1)*14;

		$data['cssfile'] = 'css/style2.css';
		$this->load->view('module/header',$data);
		$this->load->view('module/nav');

		$data['book'] = $this->show_model->showmagabook('book',$start);
		$this->load->view('resource/booklist',$data);	
		$this->load->view('module/footer');
	}
}

/* End of file resource.php */