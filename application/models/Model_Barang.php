<?php
Class Model_Barang extends CI_Model{

    public function show_barang()
    {
        $data=$this->db->get('barang');
        return $data;
    }

    public function add()
    {
        $data=[

            'nama_barang' => $this->input->post('nama_barang'),
            'stok'        => $this->input->post('stok'),
            'harga_beli'  => $this->input->post('harga_beli'),
            'harga_jual'  => $this->input->post('harga_jual'),
            'diskon'      => $this->input->post('diskon'),
            'keterangan'  => $this->input->post('keterangan')
         ];
         $this->db->insert('barang',$data);
    }
    public function edit($id)
    {
        $data=$this->db->get_where('barang',array('kd_barang'=>$id));
        return $data;
    }

    public function update()
    {
        $data=[
            'nama_barang' => $this->input->post('nama_barang'),
            'stok'        => $this->input->post('stok'),
            'harga_beli'  => $this->input->post('harga_beli'),
            'harga_jual'  => $this->input->post('harga_jual'),
            'diskon'      => $this->input->post('diskon'),
            'keterangan'  => $this->input->post('keterangan')
         ];
         $kd_barang=$this->input->post('kd_barang');
         $this->db->where('kd_barang',$kd_barang);
         $this->db->update('barang',$data);

    }

}
?>