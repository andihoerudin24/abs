<?php
Class Barang extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_barang');
    }

     public function index()
     {
         $data['barang']=$this->Model_barang->show_barang()->result();
         $this->template->load('template','barang/index',$data);
     }

     public function tambah()
     {
         if(isset($_POST['submit'])){
          $this->Model_barang->add();
          redirect('Barang');
         } else{
           $this->template->load('template','barang/add');
         }
     }

     public function edit()
     {
         if(isset($_POST['submit'])){
            $this->Model_barang->update();
            redirect('Barang');
         }else{
        $id             = $this->uri->segment(3);
        $data['barang'] = $this->Model_barang->edit($id)->row_Array();
        $this->template->load('template','barang/edit',$data);
     }
    }

    public function hapus()
    {
       $id=$this->uri->segment(3);
       $this->db->where('kd_barang',$id);
       $this->db->delete('barang');
       redirect('Barang');
    }
}

?>