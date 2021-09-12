<?php
class HutangCon extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('DataHutangModel');

		$this->load->model('SemuaHutangModel');

		$this->load->library('session');
       if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
	}

	public function kembali(){

		redirect('HutangCon');
	}

	public function index(){
		
		$data['data_hutang']=$this->DataHutangModel->selectAll()->result();
		

		//tampilSemua()
		$this->load->view('SemuaHutangVi',$data);

	}

	public function prosesDeleteHutang($id_hutang){
        $this->DataHutangModel->deleteHutang($id_hutang);

       $this->kembali();

    }
	
	public function prosesInsertHutang(){

		$data['id_hutang']=$this->input->post('idhutang');
		$data['nama_hutang']=$this->input->post('namahutang');
		$data['jumlah_hutang']=$this->input->post('jmlhhutang');
		$data['tanggal_hutang']=$this->input->post('tglhutang');

		$this->DataHutangModel->insertHutang($data);
		$this->SemuaHutangModel->insertDataHutang($data);


		$this->kembali();


	}
	 public function prosesDetailHutang($id){

         $data['hutang']=$this->SemuaHutangModel->selectById($id)->result();
         $this->session->set_userdata('detail',$id);


         //tampilDetail()
         $this->load->view('DetailHutang',$data);
    }

	public function prosesInsertDetailHutang(){

		$jmlh_hutang=0;
		$identitas = $this->session->userdata('detail');

		
		$data['id_hutang']=$identitas;

		$transaksi=$this->input->post('jenis_transaksi');

	

		if($transaksi=="bayar"){

			$byr=$this->input->post('jumlah');

			$jmlh_hutang=$byr*(-1);			

		}else{
				$jmlh_hutang=$this->input->post('jumlah');
		}
		
		$data['jumlah_hutang']=$jmlh_hutang;
		$data['tanggal_hutang']=$this->input->post('tglhutang');
		$data['jenis_transaksi']=$transaksi;

			
				
		

		$this->SemuaHutangModel->insertDataHutang($data);
		$this->kembali();

    }

}

 ?>