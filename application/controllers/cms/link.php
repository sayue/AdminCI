<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Link extends CI_Controller
{
    public function index()
    {
        $data['school'] = $this->show_model->showlink('school');
        $data['country'] = $this->show_model->showlink('country');
        $data['science'] = $this->show_model->showlink('science');
        $data['academic'] = $this->show_model->showlink('academic');
        $data['jsfile'] = 'js/cms/link/linklist.js';
        $this->load->view('cms/home',$data);
        $this->load->view('cms/link/linklist');
        //$this->session->sess_destroy();
        //print_r($this->session->all_userdata());
        //echo $this->session->userdata('email');
    }

    public function add(){
    	$this->load->view('cms/home');
    	$this->load->view('cms/link/addlink');
    }

    public function showlink($id){
        $result = $this->show_model->showlinkbyid($id);
        $result = implode("%",$result);
        echo $result;
    }

    public function edit(){
        $id = $this->input->post('linkid',TRUE);
        $title = $this->input->post('edit-link-title',TRUE);
        $url = $this->input->post('edit-link-url',TRUE);

        $data = array(
            'title' => $title,
            'url' => $url
            );
        $result = $this->edit_model->editlink($id,$data);
        if($result == true){
            echo "<script>alert('修改成功');</script>";
            redirect('cms/link','refresh');
        }else{
            echo "<script>alert('修改失败');</script>";
            redirect('cms/link','refresh');
        }
    }

    public function delete($id){
        $kind = 'link';
        $result = $this->edit_model->delete($kind,$id);
        if($result == true){
            echo "<script>alert('删除成功');</script>";
            redirect('cms/link','refresh');
        }else{
            echo "<script>alert('删除失败');</script>";
            redirect('cms/link','refresh');
        }
    }

    public function addlink(){
        $title = $this->input->post('add-link-title',TRUE);
        $url = $this->input->post('add-link-url',TRUE);
        $kind = $this->input->post('add-link-kind',TRUE);
        //echo $kind;
        $data = array(
            'kind' => $kind,
            'title' => $title,
            'url' => $url
            );
        $table = 'link';
        $result = $this->add_model->additem($table,$data);
        if($result == true){
            echo "<script>alert('成功增加一条链接');</script>";
            redirect('cms/link/add','refresh');
        }else{
            echo "<script>alert('增加链接失败');</script>";
            redirect('cms/link/add','refresh');
        }
    }
}

/* End of file link.php */