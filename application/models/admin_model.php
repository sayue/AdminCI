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
		$query = $this->db->get_where('admin',array('administrator' => $email,'password' => md5($password)));
		return ($query->num_rows() == 1) ? TRUE : FALSE;
	}

	public function exist_admin($email)
	{
		$email = $this->security->xss_clean($email);
		$query = $this->db->get_where('admin',array('administrator' => $email));
		return ($query->num_rows() == 1) ? TRUE : FALSE;
	}

	public function saveToken($email,$token,$time){
		//init the token
		$query = $this->db->get_where('user_token',array('token' => $token));
		if($query->num_rows() == 0){
			//token插入数据库必须保证其唯一性unique
			$queryCheck = $this->db->get_where('admin',array('administrator' => $email));
			$row = $queryCheck->row();
			$admin_id = $row->id;
			$this->db->insert('user_token',array(
				'user_id' => $admin_id,
				'token' => $token,
				'expires' => $time
			));
			return TRUE;
		}else if($query->num_rows() >= 1){//存在重复的token
			return FALSE;
		}
			
	}

	public function check_cookie($token){
		//检查存在的cookie中token是否合法
		$query = $this->db->get_where('user_token',array('token' => $token));
		if($query->num_rows() == 1){
			$time = time();
			$row = $query->row();
			$oldtime = $row->expires;
			$expires = $time - $oldtime;
			if($expires <= 30){//30秒过期
				return TRUE;
			}else if($expires > 30){
				//若超过30秒，则删除该token
				$this->db->delete('user_token',array('token' => $token));
				return FALSE;
			}
		}else if($query->num_rows() <= 0){
			//数据库无该token记录
			return FALSE;
		}
		
	}

	public function get_email($token){
		//通过user_token表的token获取admin表的administrator字段的值
		$query = $this->db->get_where('user_token',array('token' => $token));
		if($query->num_rows() == 1){
			$row = $query->row();
			$id = $row->user_id;
			$query_admin = $this->db->get_where('admin',array('id' => $id));
			if($query_admin->num_rows() == 1){
				$admin_row = $query_admin->row();
				return $admin_row->administrator;
			}
		}
	}


}


/* End of file Admin_model.php */
