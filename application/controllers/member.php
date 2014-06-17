	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller{

	public function index($id = false){
		//$data['news'] = $this->show_model->home_shownews();
		//$data['notice'] = $this->show_model->home_notice();
		$data['cssfile'] = 'css/style2.css';
		$this->load->view('module/header',$data);
		$this->load->view('module/nav');
		if($id !== false){
			$data['personal'] = $this->show_model->showmember($id);
			if($data['personal'] == ''){
				show_error('您无权访问该模块，该错误已经被记录！点击<a href="'. site_url('home') .'">返回</a>');
			}
			//print_r($data['personal']);
			$this->load->view('member/personal',$data);
		}else{
			$this->load->view('member/intro');
		}
		
		
		$this->load->view('module/footer');
	}

	public function center($page = 1){
		$data['num'] = $this->show_model->count_num('member',array('charge' => 'center'));

		$pages = ($data['num']%4 == 0)?$data['num']/4:ceil($data['num']/4);//页数
		
		if($page > $pages || !is_numeric($page)){
			show_error('您无权访问该模块，该错误已经被记录！点击<a href="'. site_url('home') .'">返回</a>');
		}

		$data['pages'] = $pages;
		$data['pagenow'] = $page;
		$start = ($page-1)*4;

		$data['center'] = $this->show_model->mem_center($start);
		$data['cssfile'] = 'css/style2.css';
		$this->load->view('module/header',$data);
		$this->load->view('module/nav');
		$this->load->view('member/center');
		$this->load->view('module/footer');
	}

	public function fulltime($page = 1){
		$data['num'] = $this->show_model->count_num('member',array('kind' => 'fulltime'));

		$pages = ($data['num']%8 == 0)?$data['num']/8:ceil($data['num']/8);//页数

		if($page > $pages || !is_numeric($page)){
			show_error('您无权访问该模块，该错误已经被记录！点击<a href="'. site_url('home') .'">返回</a>');
		}

		$data['pages'] = $pages;
		$data['pagenow'] = $page;
		$start = ($page-1)*8;

		$data['fulltime'] = $this->show_model->mem_kind('fulltime',$start);
		$data['cssfile'] = 'css/style2.css';
		$this->load->view('module/header',$data);
		$this->load->view('module/nav');
		$this->load->view('member/fulltime');
		$this->load->view('module/footer');
	}

	public function partime($page = 1){
		$data['num'] = $this->show_model->count_num('member',array('kind' => 'partime'));

		$pages = ($data['num']%8 == 0)?$data['num']/8:ceil($data['num']/8);//页数

		if($page > $pages || !is_numeric($page)){
			show_error('您无权访问该模块，该错误已经被记录！点击<a href="'. site_url('home') .'">返回</a>');
		}

		$data['pages'] = $pages;
		$data['pagenow'] = $page;
		$start = ($page-1)*8;

		$data['partime'] = $this->show_model->mem_kind('partime',$start);
		$data['cssfile'] = 'css/style2.css';
		$this->load->view('module/header',$data);
		$this->load->view('module/nav');
		$this->load->view('member/partime');
		$this->load->view('module/footer');
	}

	public function daily($page = 1){
		$data['num'] = $this->show_model->count_num('member',array('charge' => 'daily'));

		$pages = ($data['num']%4 == 0)?$data['num']/4:ceil($data['num']/4);//页数

		if($page > $pages || !is_numeric($page)){
			show_error('您无权访问该模块，该错误已经被记录！点击<a href="'. site_url('home') .'">返回</a>');
		}

		$data['pages'] = $pages;
		$data['pagenow'] = $page;
		$start = ($page-1)*4;

		$data['daily'] = $this->show_model->mem_daily($start);
		$data['cssfile'] = 'css/style2.css';
		$this->load->view('module/header',$data);
		$this->load->view('module/nav');
		$this->load->view('member/daily');
		$this->load->view('module/footer');
	}

}

/* End of file member.php */