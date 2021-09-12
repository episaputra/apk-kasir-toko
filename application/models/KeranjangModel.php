<?php 
class KeranjangModel extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->database();

    }


     function selectAll(){
        $this->db->select('*');
        $this->db->from('keranjang');
        return $this->db->get();
    }
    function insertKeranjang ($data){

       $aksi= $this->db->insert('keranjang',$data);
       if($aks){
        return true;
       }
    }


    function emptyKeranjang(){
        $this->db->truncate('keranjang');

    }

    public function totalHarga(){

    }
    function deleteKeranjang($kode){
          
       $aksi1= $this->db->where('nomor', $kode);
        $aksi2=$this->db->delete('keranjang');
    
        if($aksi1 && $aksi2){
            return true;
        }
    }
}