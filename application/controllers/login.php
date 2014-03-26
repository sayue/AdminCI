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
			
			$data = array(
				'email' => $email,
				'is_logged_in' => TRUE
			);
			$this->session->set_userdata($data);
			redirect('home');
		}
		else
		{
			//redirect('login');
			echo site_url('login');
		}
	}

	public function exist()
	{			
		$email = $this->input->post('email_name');
		
		if($this->admin_model->exist_admin($email) == TRUE)
		{
			echo "exist";
		}
		else
		{
			echo "not exist";
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
