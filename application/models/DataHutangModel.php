<?php 
class DataHutangModel extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->database();

    }

    function selectAll(){
    	$this->db->select('*');
    	$this->db->from('data_hutang');
    	return $this->db->get();
    }

    function insertHutang($data){

        $aksi= $this->db->insert('data_hutang',$data);
        if($aksi){
            return true;
        }
           
    }

    function selectById($kode){
        $this->db->select('*');
        $this->db->from('data_hutang');
        $this->db->where('id_hutang', $kode);
        
        return $this->db->get();
    }

    function deleteHutang($kode){
        $this->db->where('id_hutang', $kode);
        $this->db->delete('data_hutang');
    }
}