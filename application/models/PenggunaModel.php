<?php 
class PenggunaModel extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->database();

    }

    function selectAll(){
    	$this->db->select('*');
    	$this->db->from('pengguna');
    	return $this->db->get();
    }

    function insertPengguna($nama,$user,$pass,$level){

          $query=$this->db->query("INSERT INTO `pengguna`(`nama_pegawai`, `nama_pengguna`, `password`, `level`) VALUES ('$nama','$user','$pass','$level')");
        return $query;


    }

    function selectById($kode){
        $this->db->select('*');
        $this->db->from('pengguna');
        $this->db->where('nama_pengguna', $kode);
        
        return $this->db->get();
    }

    function updatePengguna($kode, $data){
        $aksi1=$this->db->where('nama_pengguna', $kode);
        $aksi2=$this->db->update('pengguna', $data);

        if($aksi1 && $aksi2){
            return true;
        }

    }

    function deletePengguna($kode){
        $aksi1=$this->db->where('nama_pengguna', $kode);
        $aksi2=$this->db->delete('pengguna');

        if($aksi1 && $aksi2){
            return true;
        }
    }

     function cekAkun($username,$password){

        $query=$this->db->query("SELECT * FROM pengguna WHERE nama_pengguna='$username' AND password='$password' ");
        return $query;
    }
 
}