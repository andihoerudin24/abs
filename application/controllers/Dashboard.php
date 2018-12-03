<?php
class Dashboard extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_barang');
        chek_seesion();
    }
     public function index()
     {

        $this->db->select('*');
        $this->db->from('penjualan');
        $this->db->join('barang', 'barang.kd_barang = penjualan.kode_barang');
        $this->db->where('status',1);
        $data['grafik']=$this->db->get()->result();
        $this->template->load('template','dashboard',$data);
     }
}

?>