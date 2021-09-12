<?php

class Login extends CI_Controller{

public function __construct(){

parent::__construct();

$this->load->model('PenggunaModel');

}

public function index(){

    //tampilUtama
    $this->load->view('LoginVi');
}


public function pindah(){
  if($this->session->userdata('akses')=='Pemilik'){

        redirect(base_url('PemilikCon'));

  }else{
    redirect(base_url('PegawaiCon'));
  }
	
}




  function login(){

        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cek_akun=$this->PenggunaModel->cekAkun($username,$password);
 
        if($cek_akun->num_rows() > 0){ //jika login sebagai dosen

                $data=$cek_akun->row_array();

                $this->session->set_userdata('masuk',TRUE);

                 if($data['level']=='1'){ //Akses admin

                    $this->session->set_userdata('akses','Pemilik');
                    $this->session->set_userdata('ses_id',$data['nama_pengguna']);
                    $this->session->set_userdata('ses_nama',$data['Nama_pegawai']);

                      $this->pindah();
 
                 }else{ //akses dosen

                    $this->session->set_userdata('akses','Pegawai');
                    $this->session->set_userdata('ses_id',$data['nip']);
                    $this->session->set_userdata('ses_nama',$data['nama']);
                                   
                    $this->pindah();


                  
                 }
 
        }else{
                $this->index();
        }
 
    }
 
    function logout(){
        $this->session->sess_destroy();
       redirect('login');
    }
}