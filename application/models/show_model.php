<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Show_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}
	
	public function showintro(){

		$query = $this->db->get('intro');
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}

	public function showintrobyid($id = 1){
		$query = $this->db->get_where('intro',array('id' => $id));
		if($query->num_rows() == 1){
			return $query->result_array();
		}else{
			return false;
		}
	}

	public function shownews($kind,$start = 0,$limit = false){
		if($limit != false){
			$this->db->limit($limit);
		}else if($start != 0){
			$this->db->limit(14,$start);
		}else if($start == 0){
			$this->db->limit(14,0);
		}
		$query = $this->db->get_where('news',array('kind' => $kind));
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}

	public function showdoccount(){
		$query = $this->db->get('doc_count');
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}

	public function showmagabook($kind,$start = 0,$limit = false){
		if($limit != false){
			$this->db->limit($limit);
		}else if($start != 0){
			$this->db->limit(14,$start);
		}else if($start == 0){
			$this->db->limit(14,0);
		}
		$query = $this->db->get_where('resource',array('kind' => $kind));
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}

	public function showproject($kind,$start = 0,$limit = false){
		if($limit != false){
			$this->db->limit($limit);
		}else if($start != 0){
			$this->db->limit(14,$start);
		}else if($start == 0){
			$this->db->limit(14,0);
		}
		$query = $this->db->get_where('project',array('kind' => $kind));
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}

	public function showmember($id = false){
		if($id != false){
			$query = $this->db->get_where('member',array('id' => $id));
		}else{
			$query = $this->db->get('member');
		}
		
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}

	public function showlink($kind,$start = 0,$limit = false){
		if($limit != false){
			$this->db->limit($limit);
		}
		else if($start != 0 && $start != false){
			$this->db->limit(2,$start);
		}else if($start == 0 && $start != false){
			$this->db->limit(2,0);
		}
		$query = $this->db->get_where('link',array('kind' => $kind));
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}

	public function shownewsbyid($id){
		$query = $this->db->get_where('news',array('id' => $id));
		if($query->num_rows() == 1){
			$row = $query->row();
			$arr['id'] = $row->id;
			$arr['title'] = $row->title;
			$arr['content'] = $row->content;
			$arr['description'] = $row->description;
			$arr['author'] = $row->author;
			$arr['kind'] = $row->kind;
			$arr['date'] = $row->date;
			return $arr;
		}else{
			return false;
		}
	}

	public function showpubbyid($id){
		$query = $this->db->get_where('resource',array('id' => $id));
		if($query->num_rows() == 1){
			$row = $query->row();
			$arr['id'] = $row->id;
			$arr['kind'] = $row->kind;
			$arr['title'] = $row->title;
			$arr['intro'] = $row->intro;
			$arr['src'] = $row->src;
			$arr['author'] = $row->author;
			$arr['publisher'] = $row->publisher;
			$arr['date'] = $row->date;
			return $arr;
		}else{
			return false;
		}
	}

	public function showprojectbyid($id){
		$query = $this->db->get_where('project',array('id' => $id));
		if($query->num_rows() == 1){
			$row = $query->row();
			$arr['id'] = $row->id;
			$arr['kind'] = $row->kind;
			$arr['title'] = $row->title;
			$arr['sub'] = $row->sub;
			$arr['intro'] = $row->intro;
			$arr['author'] = $row->author;
			$arr['date'] = $row->date;
			return $arr;
		}else{
			return false;
		}
	}

	public function showmemberbyid($id){
		$query = $this->db->get_where('member',array('id' => $id));
		if($query->num_rows() == 1){
			$row = $query->row();
			$arr['id'] = $row->id;
			$arr['name'] = $row->name;
			$arr['position'] = $row->position;
			$arr['degree'] = $row->degree;
			$arr['field'] = $row->field;
			$arr['department'] = $row->department;
			$arr['institution'] = $row->institution;
			$arr['src'] = $row->src;
			$arr['intro'] = $row->intro;
			return $arr;
		}else{
			return false;
		}
	}

	public function showlinkbyid($id){
		$query = $this->db->get_where('link',array('id' => $id));
		if($query->num_rows() == 1){
			$row = $query->row();
			$arr['id'] = $row->id;
			$arr['title'] = $row->title;
			$arr['url'] = $row->url;
			return $arr;
		}else{
			return false;
		}
	}

	//首页学术动态显示，按时间先后排序
	public function home_shownews(){
		$this->db->limit(5,0);
		$this->db->order_by('editime','desc');
		$query = $this->db->get('news');

		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}

	//首页公告
	public function home_notice(){
		$sql = "select id,kind,title,date,editime from news union select id,kind,title,date,editime from project order by editime desc limit 5";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}

	public function mem_center($start = 0){
		if($start != 0){
			$this->db->limit(4,$start);
		}else{
			$this->db->limit(4,0);
		}
		$query = $this->db->get_where('member',array('charge' => 'center'));
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}

	public function mem_daily($start = 0){
		if($start != 0){
			$this->db->limit(4,$start);
		}else{
			$this->db->limit(4,0);
		}
		$query = $this->db->get_where('member',array('charge' => 'daily'));
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}

	public function mem_kind($kind,$start = 0){
		if($start != 0){
			$this->db->limit(8,$start);
		}else{
			$this->db->limit(8,0);
		}
		$query = $this->db->get_where('member',array('kind' => $kind));
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}

	public function count_num($table,$kind = false){
		if($kind != false){
			$query = $this->db->get_where($table,$kind);
		}else{
			$query = $this->db->get($table);
		}
		return $query->num_rows();
		
	}

	public function max_id($table){
		$this->db->select_max("id");
		$query = $this->db->get($table);
		if($query->num_rows() > 0){
		 	$row = $query->row();
		 	return $row->id;
		}
	}
}


/* End of file cms/show_model.php */