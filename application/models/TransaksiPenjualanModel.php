<?php 
class TransaksiPenjualanModel extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->database();


    }
     
    public function insertTransaksi($data){
       $aksi= $this->db->insert('transaksi_penjualan',$data);
    if($aksi){
        return true;
        }
     }



     public function selectByTanggal($cari){

        $this->db->select('*');
        $this->db->from('transaksi_penjualan');
        $this->db->where('tanggal_transaksi', $cari);
        
        return $this->db->get();  
      
     }
    
}