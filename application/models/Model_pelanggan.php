<?php
Class Model_pelanggan extends CI_Model{

    public function show_pelanggan()
    {
        $data=$this->db->get('pelanggan');
        return $data;
    }

    public function add()
    {
        $data=[

            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'kelamin'        => $this->input->post('kelamin'),
            'alamat'         => $this->input->post('alamat'),
            'no_telpon'      => $this->input->post('no_telpon'),
         ];
         $this->db->insert('pelanggan',$data);
    }
    public function edit($id)
    {
        $data=$this->db->get_where('pelanggan',array('kode_pelanggan'=>$id));
        return $data;
    }

    public function update()
    {
        $data=[

            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'kelamin'        => $this->input->post('kelamin'),
            'alamat'         => $this->input->post('alamat'),
            'no_telpon'      => $this->input->post('no_telpon'),
         ];
         $kode_pelanggan=$this->input->post('kode_pelanggan');
         $this->db->where('kode_pelanggan',$kode_pelanggan);
         $this->db->update('pelanggan',$data);

    }

}
?>