<?php

class LaporanCon extends CI_Controller{
	 
     public function __construct(){
        parent::__construct();
       
        $this->load->model('TransaksiPenjualanModel');
        $this->load->library('session');
         $this->load->library('pdf');
        if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
       
    }
     

    public function index(){

        //tampilUtama()
        $this->load->view('LaporanVi');
    }

 		public function cariData(){
            
         $tgl=$this->input->post('tglhutang');

        $this->session->set_userdata('tg',$tgl);


         

     	$data['data_laporan'] = $this->TransaksiPenjualanModel->selectByTanggal($tgl)->result();

        //tampilHasil()
        $this->load->view('LaporanVi', $data);



     }

   
   public function printLaporan(){

        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'LAPORAN PENJUALAN ',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'TOKO GROSIR dan ECERAN YAYAN PULAU BIRANDANG',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);

        $pdf->Cell(20,6,'Kode ',1,0);
        $pdf->Cell(45,6,'Nama Barang',1,0);
        $pdf->Cell(20,6,'Jumlah',1,0);
        $pdf->Cell(25,6,'Satuan',1,0);
        $pdf->Cell(25,6,'Harga',1,0);
        $pdf->Cell(25,6,'Total Harga',1,1);
        $pdf->SetFont('Arial','',10);


        $tagl=$this->session->userdata('tg');

        $hasil= $this->TransaksiPenjualanModel->selectByTanggal($tagl)->result();     
         
        foreach ($hasil as $hsl){

            $pdf->Cell(20,6,$hsl->kode_barang,1,0);
            $pdf->Cell(45,6,$hsl->nama_barang,1,0);
            $pdf->Cell(20,6,$hsl->jumlah_barang,1,0);
            $pdf->Cell(25,6,$hsl->satuan,1,0); 
            $pdf->Cell(25,6,$hsl->harga,1,0);
            $pdf->Cell(25,6,$hsl->total_harga,1,1);
        }
        $pdf->Output();
    }
}

   