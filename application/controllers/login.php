<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller
{
    public function index()
    {
		if(!$this->is_logged_in()) {
			$this->validToken();	
            //$this->load->view('login');
		} else {
            redirect('home');
        }
    }

    public function validate()
    {
        $email = $this->input->post('email',TRUE);
        $pwd   = $this->input->post('password',TRUE);
		$remember = $this->input->post('remember',TRUE);//remember me
		
        $result = $this->admin_model->valid_admin($email,$pwd);
        if ($result == TRUE) {
            $data = array(
                'email' => $email,
                'is_logged_in' => TRUE
            );
            $this->session->set_userdata($data);
				
			if($remember == 'rememberme'){
				//create autologin token
				$this->createToken();
			}

            redirect('home');
        } else {
            redirect('login');
        }
    }

    public function exist()
    {
        $email = $this->input->post('email_name',TRUE);

        if ($this->admin_model->exist_admin($email) == TRUE) {
            echo "exist";
        } else {
            echo "not exist";
        }
    }

    private function is_logged_in()
    {
        return $this->session->userdata('is_logged_in');
    }

    public function logout()
    {
        if (!$this->is_logged_in()) {
            redirect('login');
        } else {
            $this->session->sess_destroy();
            $this->session->set_userdata(array('is_logged_in' => FALSE));
            redirect('login');
        }

	}

	private function createToken(){
		$email = $this->session->userdata('email');
		$token = md5($email);
		$time = time();
		$cookie = array(
			'name' => 'autologin',
			'value' => $token,
			'expire' => 60*60*24*7
		);
		$this->input->set_cookie($cookie);	
		//insert cookie token into database
		$flag = $this->admin_model->saveToken($email,$token,$time);
		if($flag == FALSE){
			$this->input->delete_cookie('autologin');//cookie过期,将其删除
		}
	}

	private function validToken(){
		$token = $this->input->cookie('autologin');
		if($token){
			$email = $this->admin_model->get_email($token);		
			$data = array(
				'email' => $email,
				'is_logged_in' => TRUE
			);
			$this->session->set_userdata($data);
			redirect('home');
		}
		else{
			$this->load->view('login');
		}
	}
}

/* End of file login.php */
