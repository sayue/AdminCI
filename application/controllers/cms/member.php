<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller
{
    public function index()
    {
        $data['member'] = $this->show_model->showmember();
        $data['jsfile'] = 'js/cms/member/memberlist.js';
        $this->load->view('cms/home',$data);
        $this->load->view('cms/member/memberlist');
        //$this->session->sess_destroy();
        //print_r($this->session->all_userdata());
        //echo $this->session->userdata('email');
    }

    public function add(){
    	$this->load->view('cms/home');
    	$this->load->view('cms/member/addmember');
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
            redirect('cms/member','refresh');
        }else{
            echo "<script>alert('修改失败');</script>";
            redirect('cms/member','refresh');
        }
    }

    public function delete($id){
        $kind = 'member';
        $result = $this->edit_model->delete($kind,$id);
        if($result == true){
            echo "<script>alert('删除成功');</script>";
            redirect('cms/member','refresh');
        }else{
            echo "<script>alert('删除失败');</script>";
            redirect('cms/member','refresh');
        }
    }

    public function addmember(){
        $name = $this->input->post('add-mem-name',TRUE);
        $birth = $this->input->post('add-mem-birth',TRUE);
        $position = $this->input->post('add-mem-position',TRUE);
        $degree = $this->input->post('add-mem-degree',TRUE);
        $field = $this->input->post('add-mem-field',TRUE);
        $department = $this->input->post('add-mem-department',TRUE);
        $institution = $this->input->post('add-mem-institution',TRUE);
        $sex = $this->input->post('optionsRadiosInline',TRUE);
        $intro = $this->input->post('add-mem-intro',TRUE);

        $data = array(
            'name' => $name,
            'sex' => $sex,
            'birth' => $birth,
            'position' => $position,
            'degree' => $degree,
            'field' => $field,
            'department' => $department,
            'institution' => $institution,
            'intro' => $intro
            );
        $table = 'member';
        $result = $this->add_model->additem($table,$data);
        if($result == true){
            echo "<script>alert('成功增加一位成员');</script>";
            redirect('cms/member/add','refresh');
        }else{
            echo "<script>alert('增加成员失败');</script>";
            redirect('cms/member/add','refresh');
        }
    }
}

/* End of file member.php */