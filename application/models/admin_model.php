<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function valid_admin($email,$password)
	{
		$email = $this->security->xss_clean($email);
		$password = $this->security->xss_clean($password);
		$query = $this->db->get_where('admin',array('username' => $email,'password' => md5($password)));
		return ($query->num_rows() == 1) ? TRUE : FALSE;
	}

	public function exist_admin($email)
	{
		$email = $this->security->xss_clean($email);
		$query = $this->db->get_where('admin',array('username' => $email));
		return ($query->num_rows() == 1) ? TRUE : FALSE;
	}

	public function saveToken($email,$token,$time){
		$query = $this->db->get_where('user_token',array('token' => $token));
		if($query->num_rows() > 0){
			$row = $query->row();
			$expire = $row->expire;
		   	$now = time();	
			if($now > ($expire + 60 * 60 * 24 * 7)){
				return FALSE;
			}
		}else{
			//init the token
			$queryCheck = $this->db->get_where('admin',array('username' => $email));
			$row = $queryCheck->row();
			$admin_id = $row->id;
			$this->db->insert('user_token',array(
				'admin_id' => $admin_id,
				'token' => $token,
				'expire' => $time
			));
		}
	}

	public function get_email($token){
		$query = $this->db->get_where('user_token',array('token' => $token));
		$row = $query->row();
		$admin_id = $row->admin_id;
		
		$queryAdmin = $this->db->get_where('admin',array('id' => $admin_id));
		$rowAdmin = $queryAdmin->row();
		return $rowAdmin->administrator;
	}
}


/* End of file Admin_model.php */
