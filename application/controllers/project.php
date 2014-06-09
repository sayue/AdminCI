<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends CI_Controller
{
    public function index()
    {
        $data['academic'] = $this->show_model->showproject('academic');
        $data['practical'] = $this->show_model->showproject('practical');
        $data['jsfile'] = 'js/project/projectlist.js';
        $this->load->view('home',$data);
        $this->load->view('project/projectlist');
        //$this->session->sess_destroy();
        //print_r($this->session->all_userdata());
        //echo $this->session->userdata('email');
    }

    public function add(){
    	$this->load->view('home');
    	$this->load->view('project/addproject');
    }

    public function showproject($id){
        $result = $this->show_model->showprojectbyid($id);
        $result = implode("%",$result);
        //$result = 'hello';
        echo $result;
    }

    public function edit($kind){
        if($kind == 'academic'){
            $id = $this->input->post('academicid',TRUE);
            $title = $this->input->post('edit-aca-title',TRUE);
            $intro = $this->input->post('edit-aca-intro',TRUE);
        }elseif($kind == 'practical'){
            $id = $this->input->post('practicalid',TRUE);
            $title = $this->input->post('edit-prac-title',TRUE);
            $intro = $this->input->post('edit-prac-intro',TRUE);
        }
        
        $data = array(
            'title' => $title,
            'intro' => $intro
            );
        $result = $this->edit_model->editproject($id,$data);
        if($result == true){
            echo "<script>alert('修改成功');</script>";
            redirect('project','refresh');
        }else{
            echo "<script>alert('修改失败');</script>";
            redirect('project','refresh');
        }
    }

    public function delete($id){
        $kind = 'project';
        $result = $this->edit_model->delete($kind,$id);
        if($result == true){
            echo "<script>alert('删除成功');</script>";
            redirect('project','refresh');
        }else{
            echo "<script>alert('删除失败');</script>";
            redirect('project','refresh');
        }
    }
    
}

/* End of file project.php */