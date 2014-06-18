<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit_model extends CI_Model{

	public function editintrobyid($content,$id){

		$data = array('content' => $content);
		$this->db->where('id',$id);
		$this->db->update('intro',$data);
		if($this->db->affected_rows() == 1){
			return true;
		}else{
			return false;
		}
	}

	public function editnewsbyid($title,$content,$id){

		$data = array('title' => $title , 'content' => $content);
		$this->db->where('id',$id);
		$this->db->update('news',$data);
		if($this->db->affected_rows() == 1){
			return true;
		}else{
			return false;
		}
	} 

	public function editdoccount($data){
		$this->db->where('id',1);
		$this->db->update('doc_count',$data);
		if($this->db->affected_rows() == 1){
			return true;
		}else{
			return false;
		}
	}

	public function editresource($kind,$id,$data){
		if($kind == 'magazine'){
			$this->db->where('id',$id);
			$this->db->update('resource',$data);
			if($this->db->affected_rows() == 1){
				return true;
			}else{
				return false;
			}
		}elseif($kind == 'book'){
			$this->db->where('id',$id);
			$this->db->update('resource',$data);
			if($this->db->affected_rows() == 1){
				return true;
			}else{
				return false;
			}
		}
	}

	public function editproject($id,$data){
		$this->db->where('id',$id);
		$this->db->update('project',$data);
		if($this->db->affected_rows() == 1){
			return true;
		}else{
			return false;
		}
	}
		
	public function editmember($id,$data){
		$this->db->where('id',$id);
		$this->db->update('member',$data);
		if($this->db->affected_rows() == 1){
			return true;
		}else{
			return false;
		}
	}

	public function editlink($id,$data){
		$this->db->where('id',$id);
		$this->db->update('link',$data);
		if($this->db->affected_rows() == 1){
			return true;
		}else{
			return false;
		}
	}

	public function delete($kind,$id){

		$this->db->where('id',$id);
		switch($kind)
		{
			case 'news':$this->db->delete('news');
			break;

			case 'resource':$this->db->delete('resource');
			break;

			case 'project':$this->db->delete('project');
			break;

			case 'member':$this->db->delete('member');
			break;

			case 'link':$this->db->delete('link');
			break;

			default : return false;
		}
		
		if($this->db->affected_rows() == 1){
			return true;
		}else{
			return false;
		}
	}
}

/* End of file show_model.php */