<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller
{
    public function index()
    {
        $data['meeting'] = $this->show_model->shownews('meeting');
        $data['visit'] = $this->show_model->shownews('visit');
        $data['prize'] = $this->show_model->shownews('prize');
        $data['jsfile'] = 'js/cms/news/newslist.js';
        $this->load->view('cms/home',$data);
        $this->load->view('cms/news/newslist');
        //$this->session->sess_destroy();
        //print_r($this->session->all_userdata());
        //echo $this->session->userdata('email');
    }

    public function add(){
    	$data['jsfile'] = 'js/cms/news/addlist.js';
    	$this->load->view('cms/home',$data);
    	$this->load->view('cms/news/addnews');
    }

    public function shownewsid($id){
        //$id = $this->input->post('newsid');
        $result = $this->show_model->shownewsbyid($id);
        $result = implode("%",$result);
        echo $result;
        //return $result;
    }

    public function edit(){
        $title = $this->input->post('edit-title',TRUE);
        $description = $this->input->post('edit-desc',TRUE);
        $id = $this->input->post('newsid',TRUE);
        // echo $content.$id;
        $result = $this->edit_model->editnewsbyid($title,$description,$id);
        if($result == true){
            echo "<script>alert('修改成功');</script>";
            redirect('cms/news','refresh');
        }else{
            echo "<script>alert('修改失败');</script>";
            redirect('cms/news','refresh');
        }
    }

    public function delete($id){
        $kind = 'news';
        $result = $this->edit_model->delete($kind,$id);
        if($result == true){
            echo "<script>alert('删除成功');</script>";
            redirect('cms/news','refresh');
        }else{
            echo "<script>alert('删除失败');</script>";
            redirect('cms/news','refresh');
        }
    }

    public function addnews(){
        $content = $this->input->post('add-news-content',TRUE);
        $description = $this->input->post('add-news-desc',TRUE);
        $kind = $this->input->post('kind',TRUE);
        $data = array(
            'content' => $content,
            'description' => $description,
            'kind' => $kind
            );
        $table = 'news';
        $result = $this->add_model->additem($table,$data);
        if($result == true){
            echo "<script>alert('成功增加一条动态');</script>";
            redirect('cms/news/add','refresh');
        }else{
            echo "<script>alert('增加动态失败');</script>";
            redirect('cms/news/add','refresh');
        }
    }
}

/* End of file news.php */