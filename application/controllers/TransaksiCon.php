<?php

class TransaksiCon extends CI_Controller{

	 public function __construct(){
        parent::__construct();
        $this->load->model('KeranjangModel');
       $this->load->model('TransaksiPenjualanModel');
       $this->load->model('BarangModel');
       $this->load->library('session');
       if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
    }



    public function index(){

    	$data['data_trans'] = $this->KeranjangModel->selectAll()->result();
        //tampilUtama
        $this->load->view('TransaksiVi', $data);
        
    }

    public function kembali(){
        redirect('TransaksiCon');
    }

    public function prosesTambahKeranjang(){

       
        $grosir;
        $eceran;
        $jlh;
        $tanggal=date('Y-m-d');


    	$data['kode_barang']=$this->input->post('kodebrg');
    	$data['jumlah_barang']=$this->input->post('jumlahbrg');


        $tampung=$this->BarangModel->selectById($data['kode_barang'])->result();


    //       var_dump($tampung);
    	foreach ($tampung as $hasil) {


               //print $hasil["nama_barang"];
                 
                   $data['nama_barang']=$hasil->nama_barang;
                   $data['satuan_barang']=$hasil->satuan;
                   $grosir=$hasil->harga_grosir;
                   $eceran=$hasil->harga_eceran;
                   $jlh=$hasil->jumlah;        
        
               }

        if($data['jumlah_barang']){

        if($data['jumlah_barang']>10){

            $data['harga_satuan']=$grosir; 
        }else{

            $data['harga_satuan']=$eceran; 
        }

        $data['jumlah_harga']=$data['harga_satuan']*$data['jumlah_barang'];
        $data['tanggal_transaksi']=$tanggal;


        $this->KeranjangModel->insertKeranjang($data);

        $this->kembali();
        
    }else{
        echo "Stok Tidak Mencukupi";
    }
}

    public function edit_barang($id_barang){

         $data['agenda']=$this->BarangModel->select_by_id($id_agenda)->row();
         $this->load->view('daftaragenda/form_edit_agenda',$data);
    }


    public function prosesDeleteKeranjang($nomor){
        $this->KeranjangModel->deleteKeranjang($nomor);
        $this->index();
        

    }
    public function prosesInsertTransaksi(){
        
            
        $data['kode_barang']=$this->input->post('kode');
        $data['nama_barang']=$this->input->post('nama');
        $data['jumlah_barang']=$this->input->post('jumlah_brg');
        $data['satuan']=$this->input->post('satuan');
        $data['harga']=$this->input->post('harga_st');

        $data['total_harga']=$this->input->post('jumlah_hrg');
        $data['tanggal_transaksi']=$this->input->post('tanggal');

           $aksi= $this->TransaksiPenjualanModel->insertTransaksi($data);

           
                $this->KeranjangModel->emptyKeranjang();
                $this->kembali();
            
            

    }

    public function cetakTotal(){

        $total['harga']=$this->KeranjangModel->totalHarga()->result();
        
        $this->load->view('TransaksiVi', $total);
    }
}