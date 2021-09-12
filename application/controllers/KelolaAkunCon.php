<?php

class KelolaAkunCon extends CI_Controller{

	 public function __construct(){

        parent::__construct();
        $this->load->model('PenggunaModel');
        $this->load->library('session');
        
       if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
       
    }

    public function index(){

        $data['pengguna'] = $this->PenggunaModel->selectAll()->result();

        
        //tampilUtama()
        $this->load->view('KelolaAkunVi', $data);
    }

    public function kembali(){
      
        redirect('KelolaAkunCon');
    }

    public function prosesTambahAkun(){

    	$nama=$this->input->post('namapgw');
    	$user=$this->input->post('user');
    	$pass=$this->input->post('pass');
    	$level=$this->input->post('level');

        $this->PenggunaModel->insertPengguna($nama,$user,$pass,$level);
        
        $this->kembali();
        
    }

    public function editPengguna($nama_pengguna){

         $data['data_ubah']=$this->PenggunaModel->selectById($nama_pengguna)->row();

          $data['pengguna'] = $this->PenggunaModel->selectAll()->result();

          //tampilEdit()
         $this->load->view('EditAkunVi',$data);

    }

    public function prosesEditAkun(){

        $data['Nama_pegawai']=$this->input->post('namapgw');
       $user=$this->input->post('user');
        $data['password']=$this->input->post('pass');
        $data['level']=$this->input->post('level');


        $this->PenggunaModel->updatePengguna($user,$data);
        
        $this->kembali();
    }

    public function prosesDeletePengguna($nama_pengguna){

        $this->PenggunaModel->deletePengguna($nama_pengguna);

        $this->kembali();

    }
    
}