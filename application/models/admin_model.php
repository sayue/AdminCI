<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function valid_admin($email,$password)
	{
		$query = $this->db->get_where('admin',array('administrator' => $email,'password' => md5($password)));
		return ($query->num_rows() == 1) ? TRUE : FALSE;
	}
}


/* End of file Admin_model.php */