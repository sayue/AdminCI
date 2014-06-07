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
}


/* End of file cms/show_model.php */