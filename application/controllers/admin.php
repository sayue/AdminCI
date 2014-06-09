<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $data['jsfile'] = 'js/admin/adminedit.js';
        $this->load->view('home',$data);
        $this->load->view('admin/adminedit');

        //$this->session->sess_destroy();
        //print_r($this->session->all_userdata());
        //echo $this->session->userdata('email');
    }

    public function add(){
    	$this->load->view('home');
    	$this->load->view('admin/adminadd');
    }

    public function validpwd(){
        $oldpwd = $this->input->post('oldpwd',TRUE);
        $email = $this->session->userdata('email');
        if ($this->admin_model->valid_admin($email,$oldpwd) == TRUE) {
            echo "exist";
        } else {
            echo "not exist";
        }
    }

    public function editpwd(){
        $newpwd = $this->input->post('newpwd',TRUE);
        $result = $this->admin_model->editpwd($newpwd);
        if($result == true){
            echo "<script>alert('修改成功');</script>";
            redirect('admin','refresh');
        }else{
            echo "<script>alert('修改失败');</script>";
            redirect('admin','refresh');
        }
    }
}

/* End of file admin.php */