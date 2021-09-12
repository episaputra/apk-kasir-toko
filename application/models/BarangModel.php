<?php 
class BarangModel extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->database();

    }

    function selectAll(){
    	$this->db->select('*');
    	$this->db->from('data_barang');
    	return $this->db->get();
    }

    function insertBarang($data){


        $aksi= $this->db->insert('data_barang',$data);
        return $aksi;
           
    }

    function selectById($kode){
        $this->db->select('*');
        $this->db->from('data_barang');
        $this->db->where('kode_barang', $kode);
        
        return $this->db->get();
    }

    function updateBarang($kode, $data){
        $aksi1=$this->db->where('kode_barang', $kode);
        $aksi2=$this->db->update('data_barang', $data);

        if($aksi1&&$aksi2){
            return true;
        }
    }

    function deleteBarang($kode){
       $aksi1= $this->db->where('kode_barang', $kode);
        $aksi2= $this->db->delete('data_barang');

         if($aksi1&&$aksi2){
            return true;
        }
    }

   function cekStok(){
        $query=$this->db->query("SELECT * FROM data_barang WHERE jumlah=jumlah_minimum");
        return $query;
    }
}