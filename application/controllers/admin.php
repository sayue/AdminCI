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
        $data['jsfile'] = 'js/admin/adminadd.js';
    	$this->load->view('home',$data);
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

    public function exist()
    {
        $email = $this->input->post('email',TRUE);

        if ($this->admin_model->exist_admin($email) == TRUE) {
            echo "exist";
        } else {
            echo "not exist";
        }
    }

    public function addadmin(){
        $email = $this->input->post('email',TRUE);
        $password = $this->input->post('pwd',TRUE);
        //echo $email.$password;
        $data = array(
            'username' => $email,
            'password' => md5($password)
            );
        $result = $this->admin_model->addadmins($data);
        if($result == true){
            echo "<script>alert('成功增加管理员');</script>";
            redirect('admin/add','refresh');
        }else{
            echo "<script>alert('增加管理员失败');</script>";
            redirect('admin/add','refresh');
        }
    }
}

/* End of file admin.php */