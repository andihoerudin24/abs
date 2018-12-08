<?php
Class Transaksi extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_barang');
    }

    public function index()
    {
        $this->db->select('*');
        $this->db->from('penjualan');
        $this->db->join('barang', 'barang.kd_barang = penjualan.kode_barang');
        $this->db->where('status',0);
        $data['penjualan']=$this->db->get()->result();
        $this->template->load('template','penjualan/index',$data);

    }

    public function add()
    {
        $data=[
            'kode_pelanggan' => $this->input->post('kode_pelanggan'),
            'kode_barang'    => $this->input->post('kode_barang'),
            'jumlah'         => $this->input->post('jumlah'),
            'keterangan'     => $this->input->post('keterangan')
        ];
        $this->db->insert('penjualan',$data);
        redirect('Transaksi');
    }

    public function cancel()
    {
        $id=$this->uri->segment(3);
        $this->db->where('id_jual',$id);
        $this->db->delete('penjualan');
        redirect('Transaksi');
    }

    public function selesai()
    {
        $update=[
            'status'=>1
        ];
        $this->db->where('status',0);
        $this->db->update('penjualan',$update);
        redirect('Transaksi');
    }

    public function laporan()
    {
        $pdf = new FPDF();
        $pdf = new FPDF("L","cm","A4");
        $pdf->SetMargins(2,1,1);
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times','B',11);
        $pdf->SetX(4);
        $pdf->MultiCell(19.5,0.5,'KIOS andihoerudin',0,'L');
        $pdf->SetX(4);
        $pdf->MultiCell(19.5,0.5,'Telpon : 0038XXXXXXX',0,'L');
        $pdf->SetFont('Arial','B',10);
        $pdf->SetX(4);
        $pdf->MultiCell(19.5,0.5,'JL. KIOS andihoerudin',0,'L');
        $pdf->SetX(4);
        $pdf->MultiCell(19.5,0.5,' email : andihoerudin24@gmail.com',0,'L');
        $pdf->Line(1,3.1,28.5,3.1);
        $pdf->SetLineWidth(0.1);
        $pdf->Line(1,3.2,28.5,3.2);
        $pdf->SetLineWidth(0);
        $pdf->ln(1);
        $pdf->SetFont('Arial','B',14);
        $pdf->Cell(25.5,0.7,"Laporan Data Barang",0,10,'C');
        $pdf->ln(1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
        $pdf->ln(1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(1, 0.8,   'NO', 1, 0, 'C');
        $pdf->Cell(7, 0.8,   'Nama Barang', 1, 0, 'C');
        $pdf->Cell(3, 0.8,   'Nama Pelanggan', 1, 0, 'C');
        $pdf->Cell(4, 0.8,   'Jumlah', 1, 0, 'C');
        $pdf->Cell(3.5, 0.8, 'Harga Jual', 1, 0, 'C');
        $pdf->Cell(4.5, 0.8, 'Diskon', 1, 0, 'C');
        $pdf->Cell(4.5, 0.8, 'subtotal', 1, 1, 'C');
        $pdf->SetFont('Arial','',10);
    $no=1;
    $this->db->select('*');
    $this->db->from('penjualan');
    $this->db->join('barang', 'barang.kd_barang = penjualan.kode_barang');
    $this->db->join('pelanggan', 'pelanggan.kode_pelanggan = penjualan.kode_pelanggan');
    $this->db->where('status',1);
    $data=$this->db->get()->result();
    foreach($data as $row){
     $harga=str_replace('.','',$row->harga_jual);
     $diskon=str_replace('%','',$row->diskon);
     $count=$harga*$diskon/100;
     $subtotal=$harga-$count;

	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(7, 0.8, $row->nama_barang,1, 0, 'C');
	$pdf->Cell(3, 0.8, $row->nama_pelanggan, 1, 0,'C');
	$pdf->Cell(4, 0.8, $row->jumlah,1, 0, 'C');
	$pdf->Cell(3.5, 0.8, "Rp.".number_format($harga).",-",1, 0, 'C');
	$pdf->Cell(4.5, 0.8,$row->diskon, 1, 0,'C');
	$pdf->Cell(4.5, 0.8,"Rp.".number_format($subtotal*$row->jumlah).",-",1, 1, 'C');
	$no++;
 }
    $pdf->Output("laporan_barang.pdf","I");
  }
}
?>