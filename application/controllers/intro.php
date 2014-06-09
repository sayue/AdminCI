<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Intro extends CI_Controller
{

    public function index()
    {
    	$data['intro'] = $this->show_model->showintro();
    	$data['id'] = ['One','Two','Three','Four','Five','Six'];
        //$data['jsfile'] = 'js/intro.js';
        $this->load->view('home',$data);
        
        $this->load->view('intro');
      
    }

    public function edit(){
        $content = $this->input->post('edit-content',TRUE);
        $id = $this->input->post('introid',TRUE);
        // echo $content.$id;
        $result = $this->edit_model->editintrobyid($content,$id);
        if($result == true){
            echo "<script>alert('修改成功');</script>";
            redirect('intro','refresh');
        }else{
            echo "<script>alert('修改失败');</script>";
            redirect('intro','refresh');
        }
    }
}

/* End of file intro.php */