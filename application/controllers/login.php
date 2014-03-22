<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function index()
	{
		if(!$this->is_logged_in())
		{
			$this->load->view('login');
		}
		else
		{	
			redirect('home');
		}
	}

	public function validate()
	{
		$email = $this->input->post('email',TRUE);
		$pwd   = $this->input->post('password',TRUE);
		$result = $this->admin_model->valid_admin($email,$pwd);	
		if($result == TRUE)
		{
			redirect('home');
			$data = array(
				'email' => $email,
				'is_logged_in' => TRUE
			);
			$this->session->set_userdata($data);
		}
		else
		{
			redirect('login');
		}
	}

	private function is_logged_in()
	{
		return $this->session->userdata('is_logged_in');
	}

	public function logout()
	{
		if(!$this->is_logged_in())
		{
			redirect('login');
		}
		else
		{
			$this->session->sess_destroy();
			$this->session->set_userdata(array('is_logged_in' => FALSE));
			redirect('login');
		}

	}
}

/* End of file login.php */
