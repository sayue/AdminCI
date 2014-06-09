<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller
{
    public function index()
    {
        $data['member'] = $this->show_model->showmember();
        $data['jsfile'] = 'js/member/memberlist.js';
        $this->load->view('home',$data);
        $this->load->view('member/memberlist');
        //$this->session->sess_destroy();
        //print_r($this->session->all_userdata());
        //echo $this->session->userdata('email');
    }

    public function add(){
    	$this->load->view('home');
    	$this->load->view('member/addmember');
    }

    public function showmember($id){
        $result = $this->show_model->showmemberbyid($id);
        $result = implode("%",$result);
        //$result = 'hello';
        echo $result;
    }

    public function edit(){
        $id = $this->input->post('memberid',TRUE);
        $name = $this->input->post('edit-mem-name',TRUE);
        $position = $this->input->post('edit-mem-position',TRUE);
        $degree = $this->input->post('edit-mem-degree',TRUE);
        $field = $this->input->post('edit-mem-field',TRUE);
        $department = $this->input->post('edit-mem-department',TRUE);
        $institution = $this->input->post('edit-mem-institution',TRUE);
        $intro = $this->input->post('edit-mem-intro',TRUE);

        $data = array(
            'name' => $name,
            'position' => $position,
            'degree' => $degree,
            'field' => $field,
            'department' => $department,
            'institution' => $institution,
            'intro' => $intro
            );
        $result = $this->edit_model->editmember($id,$data);
        if($result == true){
            echo "<script>alert('修改成功');</script>";
            redirect('member','refresh');
        }else{
            echo "<script>alert('修改失败');</script>";
            redirect('member','refresh');
        }
    }

    public function delete($id){
        $kind = 'member';
        $result = $this->edit_model->delete($kind,$id);
        if($result == true){
            echo "<script>alert('删除成功');</script>";
            redirect('member','refresh');
        }else{
            echo "<script>alert('删除失败');</script>";
            redirect('member','refresh');
        }
    }
}

/* End of file member.php */