<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_model extends CI_Model{

	public function additem($table,$data){
		
		$this->db->insert($table,$data);
		if($this->db->affected_rows() == 1){
			return true;
		}else{
			return false;
		}
	}

}

/* End of file add_model.php */