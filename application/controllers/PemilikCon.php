<?php 

class PemilikCon extends CI_Controller{

	public function __construct(){
        parent::__construct();
        $this->load->library('session');

        if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
    }
    public function index()
    {
        $this->load->view('pemilikVi');
    }

    public function selectKelolaAKun(){
        
    }


}