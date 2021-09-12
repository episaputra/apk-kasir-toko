<?php
class BarangCon extends CI_Controller{

	 public function __construct(){
        parent::__construct();
        $this->load->model('BarangModel');       
        $this->load->library('session');
        
        if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);


        $aksi=$this->BarangModel->cekStok()->result();

        if($aksi!=0){

        $this->session->set_flashdata('minimal', 
                '<div id="warning" class="alert alert-danger">
                    <h4>Peringatan </h4>
                    <p>Barang kurang Stok </p>
                </div>');    
    }

        }
       
    }
   
    public function index(){

    	$data['data_barang'] = $this->BarangModel->selectAll()->result();

        
        //tampilUtama()
        $this->load->view('SemuaBarang', $data);


    }

    public function kembali(){
        redirect('BarangCon');
    }

    // public function stok(){

    //     var_dump($this->BarangModel->cekStok()->result());
    // }

    public function prosesTambahBarang(){

    	$data['kode_barang']=$this->input->post('kodebrg');
    	$data['nama_barang']=$this->input->post('namabrg');
    	$data['varian_barang']=$this->input->post('varianbrg');

    	$data['ukuran_barang']=$this->input->post('ukuranbrg1');
    	$data['ukuran2_barang']=$this->input->post('ukuranbrg2');

    	$data['satuan']=$this->input->post('satuanbrg');
    	$data['jumlah']=$this->input->post('jumlahbrg');
    	$data['harga_masuk']=$this->input->post('hargamskbrg');
    	$data['jumlah_minimum']=$this->input->post('minimumbrg');

    	$data['harga_eceran']=ceil($data['harga_masuk']+($data['harga_masuk']*0.25));
    	$data['harga_grosir']=ceil($data['harga_masuk']+($data['harga_masuk']*0.15));

    $aksi=$this->BarangModel->insertBarang($data);

    if($aksi){

    $this->session->set_flashdata('message', 
                '<div  id="berhasil" class="alert alert-success">
                    <h4>Berhasil </h4>
                    <p>Anda berhasil Input Data Barang </p>
                </div>');    

    $this->kembali(); 
    
        }else{
                echo "gagal Vrooh";
        }
    }

        
    public function editBarang($id_barang){

         $data['barang']=$this->BarangModel->selectById($id_barang)->row();

         //tampilEdit
         $this->load->view('EditBarang',$data);
    }

    public function prosesEditBarang(){

        $data['nama_barang']=$this->input->post('namabrg');
    	$data['varian_barang']=$this->input->post('varianbrg');

    	$data['ukuran_barang']=$this->input->post('ukuranbrg1');
    	$data['ukuran2_barang']=$this->input->post('ukuranbrg2');

    	$data['satuan']=$this->input->post('satuanbrg');
    	$data['jumlah']=$this->input->post('jumlahbrg');
    	$data['harga_masuk']=$this->input->post('hargamskbrg');
    	$data['jumlah_minimum']=$this->input->post('minimumbrg');

    	$data['harga_eceran']=ceil($data['harga_masuk']+($data['harga_masuk']*0.25));
    	$data['harga_grosir']=ceil($data['harga_masuk']+($data['harga_masuk']*0.15));

        $kode=$this->input->post('kodebrg');

        $this->BarangModel->updateBarang($kode,$data);
        $this->kembali();
         
    }

    public function prosesDeleteBarang($id_barang){
        $this->BarangModel->deleteBarang($id_barang);

       $this->kembali();

    }
}