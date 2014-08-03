<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller
{
    public function index()
    {
              if(!$this->is_logged_in()) {
                $this->load->view('login');
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
        $token = $this->input->cookie('autologin',TRUE);
        //echo $token;
        $result = $this->admin_model->check_cookie($token);
        if($result == TRUE){
            //若数据库存在token，且expire还没过期，则构造一个已登录的session
            $email = $this->admin_model->get_email($token);
             $data = array(
                'email' => $email,
                'is_logged_in' => TRUE
            );
            $this->session->set_userdata($data);
        }
       
        return $this->session->userdata('is_logged_in');
    }

    public function logout()
    {
        $this->load->helper('cookie');
        delete_cookie('autologin');

        $this->session->sess_destroy();
        $this->session->set_userdata(array('is_logged_in' => FALSE));
            
        // redirect('login');
        $this->load->view('login');  

    }

	private function createToken(){
                            //创建token（unique），利用MD5，email+user_agent
		$email = $this->session->userdata('email');
                            $agent = $_SERVER['HTTP_USER_AGENT'];                                   
		$token = md5($email.$agent);
		$time = time();
		$cookie = array(
			'name' => 'autologin',
			'value' => $token,
                                          'expire' => 10
		);
		$this->input->set_cookie($cookie);	
		//insert cookie token into database
		$this->admin_model->saveToken($email,$token,$time);
	}

	
}

/* End of file login.php */
