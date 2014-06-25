<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller
{
    public function index()
    {
        $data['meeting'] = $this->show_model->showallrecord('news','meeting');
        $data['visit'] = $this->show_model->showallrecord('news','visit');
        $data['prize'] = $this->show_model->showallrecord('news','prize');
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
        $content = $this->input->post('edit-desc',TRUE);
        $id = $this->input->post('newsid',TRUE);
        // echo $content.$id;
        $result = $this->edit_model->editnewsbyid($title,$content,$id);
        if($result == true){
            
            header("Content-type: text/html; charset=utf-8");
            ob_start();
            echo "<script>alert('修改成功');</script>";
            redirect('cms/news','refresh');
        }else{
            header("Content-type: text/html; charset=utf-8");
            ob_start();
            echo "<script>alert('修改失败');</script>";
            redirect('cms/news','refresh');
        }
    }

    public function delete($id){
        $kind = 'news';
        $result = $this->edit_model->delete($kind,$id);
        if($result == true){
            header("Content-type: text/html; charset=utf-8");
            ob_start();
            echo "<script>alert('删除成功');</script>";
            redirect('cms/news','refresh');
        }else{
            header("Content-type: text/html; charset=utf-8");
            ob_start();
            echo "<script>alert('删除失败');</script>";
            redirect('cms/news','refresh');
        }
    }

    public function addnews(){
        $title = $this->input->post('add-news-title',TRUE);
        $author = $this->input->post('add-news-author',TRUE);
        //$date = $this->input->post('add-news-date',TRUE);
        $content = $this->input->post('add-news-content',TRUE);
        $description = $this->input->post('add-news-desc',TRUE);

        $year = $this->input->post('YYYY',TRUE);
        $month = $this->input->post('MM',TRUE);
        $day = $this->input->post('DD',TRUE);
        
        $date = "$year-$month-$day";
        //echo "$year-$month-$day";

        $kind = $this->input->post('kind',TRUE);
        $data = array(
            'title' => $title,
            'content' => $content,
            'description' => $description,
            'author' => $author,
            'kind' => $kind,
            'date' => $date,
            'orderdate' => $date
            );
        $table = 'news';
        $result = $this->add_model->additem($table,$data);
        if($result == true){
            header("Content-type: text/html; charset=utf-8");
            ob_start();
            echo "<script>alert('成功增加一条动态');</script>";
            redirect('cms/news/add','refresh');
        }else{
            header("Content-type: text/html; charset=utf-8");
            ob_start();
            echo "<script>alert('增加动态失败');</script>";
            redirect('cms/news/add','refresh');
        }
    }
}

/* End of file news.php */