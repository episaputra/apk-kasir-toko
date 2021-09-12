<?php 
class SemuaHutangModel extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->database();

    }

   
    function insertDataHutang($data){

        $aksi= $this->db->insert('semuahutang',$data);
        if($aksi){
            return true;
        }
           
    }

    function selectById($kode){
        $this->db->select('*');
        $this->db->from('SemuaHutang');
        $this->db->where('id_hutang', $kode);
        
        return $this->db->get();
    }

    function deleteHutang($kode){
        $this->db->where('id_hutang', $kode);
        $this->db->delete('SemuaHutang');
    }
        }
