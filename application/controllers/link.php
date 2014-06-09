<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Link extends CI_Controller
{
    public function index()
    {
        $data['school'] = $this->show_model->showlink('school');
        $data['country'] = $this->show_model->showlink('country');
        $data['science'] = $this->show_model->showlink('science');
        $data['academic'] = $this->show_model->showlink('academic');
        $data['jsfile'] = 'js/link/linklist.js';
        $this->load->view('home',$data);
        $this->load->view('link/linklist');
        //$this->session->sess_destroy();
        //print_r($this->session->all_userdata());
        //echo $this->session->userdata('email');
    }

    public function add(){
    	$this->load->view('home');
    	$this->load->view('link/addlink');
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
            redirect('link','refresh');
        }else{
            echo "<script>alert('修改失败');</script>";
            redirect('link','refresh');
        }
    }

    public function delete($id){
        $kind = 'link';
        $result = $this->edit_model->delete($kind,$id);
        if($result == true){
            echo "<script>alert('删除成功');</script>";
            redirect('link','refresh');
        }else{
            echo "<script>alert('删除失败');</script>";
            redirect('link','refresh');
        }
    }
}

/* End of file link.php */