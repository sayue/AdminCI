<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resource extends CI_Controller
{
    public function index()
    {
        $data['num'] = $this->show_model->showdoccount();
        $this->load->view('home',$data);
        $this->load->view('resource/doc_count');
        
    }

    public function lists()
    {
        $data['magazine'] = $this->show_model->showmagabook('magazine');
        $data['book'] = $this->show_model->showmagabook('book');
        $data['jsfile'] = 'js/resource/publication.js';
        $this->load->view('home',$data);
        $this->load->view('resource/publication');
        
    }

    public function add(){
    	$data['jsfile'] = 'js/resource/add_publication.js';
    	$this->load->view('home',$data);
        $this->load->view('resource/add_publication');
    }

    public function showpubbyid($id){
        $result = $this->show_model->showpubbyid($id);
        $result = implode("%",$result);
        //$result = 'hello';
        echo $result;
    }

    public function editdoc(){
        $lib_zh_book = $this->input->post('lib_zh_book',TRUE);
        $lib_en_book = $this->input->post('lib_en_book',TRUE);
        $lib_zh_mag = $this->input->post('lib_zh_mag',TRUE);
        $lib_en_mag = $this->input->post('lib_en_mag',TRUE);
        $doc_zh_book = $this->input->post('doc_zh_book',TRUE);
        $doc_en_book = $this->input->post('doc_en_book',TRUE);
        $doc_zh_mag = $this->input->post('doc_zh_mag',TRUE);
        $doc_en_mag = $this->input->post('doc_en_mag',TRUE);
        $data = array(
            'lib_zh_book' => $lib_zh_book,
            'lib_en_book' => $lib_en_book,
            'lib_zh_mag' => $lib_zh_mag,
            'lib_en_mag' => $lib_en_mag,
            'doc_zh_book' => $doc_zh_book,
            'doc_en_book' => $doc_en_book,
            'doc_zh_mag' => $doc_zh_book,
            'doc_en_mag' => $doc_en_mag
            );
        $result = $this->edit_model->editdoccount($data);
        if($result == true){
            echo "<script>alert('修改成功');</script>";
            redirect('resource','refresh');
        }else{
            echo "<script>alert('修改失败');</script>";
            redirect('resource','refresh');
        }
    }

    public function edit($kind){
        if($kind == 'magazine'){
            //echo 'magazine';
            $title = $this->input->post('edit-maga-title',TRUE);
            $intro = $this->input->post('edit-maga-desc',TRUE);
            $id = $this->input->post('magazineid',TRUE);
            $data = array('title' => $title , 'intro' => $intro);
            $result = $this->edit_model->editresource('magazine',$id,$data);
            if($result == true){
                echo "<script>alert('修改成功');</script>";
                redirect('resource/lists','refresh');
            }else{
                echo "<script>alert('修改失败');</script>";
                redirect('resource/lists','refresh');
            }
        }elseif($kind == 'book'){
            //echo 'book';
            $title = $this->input->post('edit-book-title',TRUE);
            $author = $this->input->post('edit-book-author',TRUE);
            $publisher = $this->input->post('edit-book-publisher',TRUE);
            $date = $this->input->post('edit-book-date',TRUE);
            $intro = $this->input->post('edit-book-desc',TRUE);
            $id = $this->input->post('bookid',TRUE);

            $data = array(
                'title' => $title,
                'intro' => $intro,
                'author' => $author,
                'publisher' => $publisher,
                'date' => $date
                );
            $result = $this->edit_model->editresource('book',$id,$data);
            if($result == true){
                echo "<script>alert('修改成功');</script>";
                redirect('resource/lists','refresh');
            }else{
                echo "<script>alert('修改失败');</script>";
                redirect('resource/lists','refresh');
            }
        }
    }

    public function delete($id){
        $kind = 'resource';
        $result = $this->edit_model->delete($kind,$id);
        if($result == true){
            echo "<script>alert('删除成功');</script>";
            redirect('resource/lists','refresh');
        }else{
            echo "<script>alert('删除失败');</script>";
            redirect('resource/lists','refresh');
        }
    }

}

/* End of file resource.php */