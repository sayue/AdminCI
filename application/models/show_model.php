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

	public function shownews($kind){
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

	public function showmagabook($kind){
		$query = $this->db->get_where('resource',array('kind' => $kind));
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}

	public function showproject($kind){
		$query = $this->db->get_where('project',array('kind' => $kind));
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}

	public function showmember(){
		$query = $this->db->get('member');
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}

	public function showlink($kind){
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
			$arr['content'] = $row->content;
			$arr['description'] = $row->description;
			$arr['kind'] = $row->kind;
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
			$arr['title'] = $row->title;
			$arr['intro'] = $row->intro;
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
			$arr['title'] = $row->title;
			$arr['intro'] = $row->intro;
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
}


/* End of file cms/show_model.php */