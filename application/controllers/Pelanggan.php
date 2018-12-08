<?php
Class Pelanggan extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->Model('Model_pelanggan');
    }

    public function index()
    {
        $data['pelanggan']=$this->Model_pelanggan->show_pelanggan()->result();
        $this->template->load('template','pelanggan/index',$data);
    }

    public function tambah()
    {
        if (isset($_POST['submit'])) {
            $this->Model_pelanggan->add();
            redirect('Pelanggan');
        } else {
           $this->template->load('template','pelanggan/add');
        }

    }

    public function edit()
    {
       if (isset($_POST['submit'])) {
           $this->Model_pelanggan->update();
           redirect('Pelanggan');
       } else {
           $id=$this->uri->segment(3);
           $data['pelanggan']=$this->Model_pelanggan->edit($id)->row_array();
           $this->template->load('template','pelanggan/edit',$data);
       }

    }

    public function hapus()
    {
        $id=$this->uri->segment(3);
        $this->db->where('kode_pelanggan',$id);
        $this->db->delete('pelanggan');
        redirect('Pelanggan');
    }
}


?>