<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reset extends CI_Controller
{

        public function index(){
        
        $this->load->view('reset');
    }

        public function resetview(){
        	$conf['name'] = 'sayue';
        	$this->load->library('captcha_code',$conf);
        	$this->captcha_code->show();
        	$this->session->set_userdata('captcha',$this->captcha_code->getCaptcha());
        }

    public function captreset(){
        $captchas = $this->session->userdata('captcha');
        $input_cha = $this->input->post('captchacode',TRUE);
        $email = $this->input->post('email',TRUE);
        $resetime = time();
        $token = $this->admin_model->init_token($email,$resetime);
        //echo $token;
        $mail = base64_encode($email);
        $url = site_url('reset/repass')."?email=$mail&token=$token";
        // echo $url;
        if($captchas == $input_cha){
            $this->load->library('email');

            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'smtp.163.com';
            $config['smtp_user'] = 'huyihuyi45@163.com';
            $config['smtp_pass'] = '12qwaszx';
            $this->email->initialize($config);

            $this->email->from('huyihuyi45@163.com','sayue');
            $this->email->to($email);
            $this->email->subject('重置密码');
            $this->email->message('请将下列链接复制到浏览器'.$url);

            if($this->email->send()){
                echo "重置密码邮件已发送，3秒后自动跳转。。。";
                $url = site_url('login');
                header("refresh:3; url=$url");
            }else{
                echo $this->email->print_debugger();
            }

        }else{
            echo "验证码错误"."captcha : $captchas <br>"."input_cha : $input_cha";
        }
    }

    	public function repass(){
    		
    		$email = $this->input->get('email',TRUE);
    		$token = $this->input->get('token',TRUE);
    		
    		$email = base64_decode($email);

    		$result = $this->admin_model->valid_reset($email);
    		
    		if($result !== FALSE){
			$now = time();
    			$expire = $now - $result;
    			if($expire < 60*60*24){
    				$this->session->set_userdata('email',$email);
    				$this->load->view('resetpwd');
    				echo "验证成功<br/>Email : $email<br/>Token : $token<br/>";
    			} else{
    				echo "该链接已过期，3秒后自动跳转。。。";
    				$url = site_url('reset');
    				header("refresh:3;url=$url");
    			}
    		}
    		
    	}

    	public function set(){
    		$email = $this->session->userdata('email');
    		$pwd = md5($this->input->post('pwd',TRUE));
    		$repwd = md5($this->input->post('repwd',TRUE));
    		// echo $email."<br>"$pwd."<br>".$repwd;
    		if($pwd == $repwd){
    			$flag = $this->admin_model->reset_pwd($email,$pwd);
    			if($flag == TRUE){
    				echo "密码重置成功，3秒后自动跳转。。。";
    				$url = site_url('login');
    				header("refresh:3;url=$url");
    			}else{
    				echo "密码重置失败，3秒后自动跳转。。。";
    				$url = site_url('reset');
    				header("refresh:3;url=$url");
    			}
    		}
    	}

    	public function proc(){
    		$this->load->view('proc');
    		
    	}

    	public function showemail(){
    		$userid = $this->input->post('userid',TRUE);
    		$result['getemailproc'] = $this->admin_model->getemailproc($userid);
    		// print_r ($result);
    		// echo $result;
    		$this->load->view('proc',$result);
    	}
}