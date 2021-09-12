<!doctype html>
<html lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Modal | Propeller - Admin Dashboard">
<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
<title>Toko Yayan</title>
<link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>asset/images/toko.jpg">



<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Bootstrap css -->
<!-- build:[href] asset/css/ -->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/bootstrap.min.css">
<!-- /build -->

<!-- Propeller css -->
<!-- build:[href] asset/css/ -->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/propeller.min.css">
<!-- /build -->

<!-- Propeller theme css-->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/propeller-theme.css" />

<!-- Propeller admin theme css-->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/propeller-admin.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/propeller-admin.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/components/datetimepicker/css/bootstrap-datetimepicker.css" />
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/components/datetimepicker/css/pmd-datetimepicker.css" />

    <!--Google Analytics code-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-124615-22', 'auto');
      ga('send', 'pageview');
    </script>

    <script>   
    $('#berhasil').slideDown('slow').delay(3000).slideUp('slow');
    $('#warning').slideDown('slow').delay(3000).slideUp('slow');
	</script>

	<style type="text/css">
            #main {
                background-image: url('<?= base_url() ?>asset/images/new.jpg');
   				background-repeat: no-repeat;
   				background-position: fixed;
   background-size: 100% 100%;
 }
        </style>
        <style type="text/css">
	#berhasil {

    cursor: pointer;
    position: fixed;
    right: 0px;
    z-index: 9999;
    bottom: 0px;
    margin-bottom: 22px;
    margin-right: 15px;
    min-width: 300px; 
    max-width: 800px;  
}
#warning {

    cursor: pointer;
    position: fixed;
    right: 0px;
    z-index: 9999;
    bottom: 0px;
    margin-bottom: 22px;
    margin-right: 15px;
    min-width: 300px; 
    max-width: 800px;  
}
</style>
   
</head>

<body style=" height: 550px;" id="main">

            <div class="col-md-20">            
            	<div class="component-box">
                   	<!-- bootstrap basic Navbar example-->
					<div class="pmd-card pmd-z-depth"  style="background-color:#D1DBBD">
						<section class="nav-show" style="position: relative;">
							<nav class="navbar navbar-inverse" style="background-color:#44749d">
							  <div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
								  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								  </button>
								 <a class="navbar-brand"<?php 
								   if($this->session->userdata('akses')=='Pemilik'){
           							?> href="<?= base_url() ?>PemilikCon"<?php
           					    }else{
           					    ?>	 href="<?= base_url() ?>PegawaiCon"<?php
           					    } ?> >Toko Yayan</a>
								</div>
								<div class="navbar-header">
								  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								  </button>
								  <a class="navbar-brand">| Data Barang</a>
								</div>
							
							

								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								  
								  
								  <ul class="nav navbar-nav navbar-right">

									<div>
			
					<a href="<?php echo base_url()?>login/logout">
					<div class="material-icons md-light pmd-sm pmd-badge  pmd-badge-overlap" style="padding-top: 12px;">power_settings_new</div>
				</a>

				<a class="navbar-brand" ><?php echo $this->session->userdata('akses');?></a>
            </div>
									
								  </ul>
								</div><!-- /.navbar-collapse -->
							  </div><!-- /.container-fluid -->
							</nav>
						</section>
                    </div><!-- bootstrap basic Navbar example end-->
                </div>	
        	</div><!-- bootstrap basic Navbar code and example end -->
        </div>
      	</section><!-- bootstrap basic Navbar end -->
      </div>
 </div> 
 
 <h2 style="padding-left: 20px; color:white">Tambah Data Barang</h2>
				<div class="pmd-card-body" > <!--<a href="tambah_barang.php">	-->
				<button type="submit" data-target="#form-dialog" data-toggle="modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth"  class="btn btn-primary pmd-ripple-effect">Tambah</button>
				

				<div tabindex="-1" class="modal fade" id="form-dialog" style="display: none;" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header bordered">
															<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
															<h2 class="pmd-card-title-text">Data Barang Baru</h2>
														</div>
						<div class="modal-body">
						<form class="form-horizontal" role="form" id="validationForm" action="<?= base_url() ?>BarangCon/prosesTambahBarang" method="post">
						<div class="form-group">
										<label for="regular1" class="control-label">Kode Barang</label>
										<input type="text" id="regular1" class="form-control" name="kodebrg">
										</div>
						
						<div class="form-group">
										<label for="regular1" class="control-label">Nama Barang</label>
										<input type="text" id="regular1" class="form-control" name="namabrg">
										</div>
						<div class="form-group">
										<label for="regular1" class="control-label">Varian Barang</label>
										<input type="text" id="regular1" class="form-control"  name="varianbrg">
										</div>				
						<div class="form-group row">
                                    	<label for="regular1" class="control-label">Ukuran Barang</label><br>
                                    	
                                    	<input type="text" id="regular1" " class="form-control col-sm-4" style="width: 435px" name="ukuranbrg1" >
                                    	<select  class="form-control col-sm-4" style="width: 130px" name="ukuranbrg2" >
                                          <option value="gram">Gram</option>
                                           <option value="Kilogram">Kilo Gram</option>
       									  <option value="liter" >Liter </option>
                                          <option value="mili liter">Mili Liter</option>
                                        </select>           	
						</div>
						<div class="form-group">
                                    	<label for="regular1" class="control-label" >Satuan Barang</label>
                                    	
                                    	<select class="form-control" name="satuanbrg">
                                        


                                                                                       <option selected>-- Pilih Satuan --</option>
                                          <option value="Pcs">Pcs</option>                                                                                    
                                          <option value="Box">Box</option>                                                                                    
                                          <option value="Botol">Botol</option>


                                        </select>
						</div>
						<div class="form-group">
										<label for="regular1" class="control-label">Jumlah Barang</label>
										<input type="text" id="regular1" class="form-control"  name="jumlahbrg">
						</div>
						<div class="form-group">
										<label for="regular1" class="control-label">Harga Masuk Barang</label>
										<input type="text" id="regular1" class="form-control"  name="hargamskbrg">
						</div>
						<div class="form-group">
										<label for="regular1" class="control-label">Batas Minimum Barang</label>
										<input type="text" id="regular1" class="form-control"  name="minimumbrg">
										</div>
											<button name="simpan" data-target="#complete-dialog" data-toggle="modal" class="btn btn-primary text-right" type="submit">Simpan</button>
											<div tabindex="-1" class="modal fade" id="complete-dialog" style="display: none;" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h2 class="pmd-card-title-text">Apakah anda yakin untuk menyimpan?</h2>
														</div>
														<div class="modal-body">
														</div>
														<div class="pmd-modal-action pmd-modal-bordered text-right">
															<button data-dismiss="modal" class="btn pmd-btn-flat pmd-ripple-effect btn-primary" type="reset">Batal</button>
															<button name="simpan" data-dismiss="modal" type="submit" class="btn pmd-btn-flat pmd-ripple-effect btn-default">Simpan</button>
														</div>
													</div>
												</div>
											</div>
															</form>
														</div>
														
													</div>
												</div>
											</div>
										</div>
					
							
							</div>				
							</div>
						</div>
				</div>
			</div>
 	 
 	 <br>

 
<div class="container-fluid full-width-container value-added-detail-page">

	<div class='table-responsive pmd-card pmd-z-depth'>
		<table class='table table-mc-red pmd-table'>
		<thead>
		<tr>
				<th>Kode Barang</th>
				<th>Nama Barang</th>
				<th>Jumlah Barang</th>
				<th>Satuan Barang</th>
				<th>Harga Grosir</th>
				<th>Harga Eceran</th>
				<th>Harga Masuk</th>		
				<th>Jumlah Minimum</th>		
				<th>Ubah</th>
				<th>Hapus</th>
			</tr>
<tbody>	
	<?php echo $this->session->flashdata('message');?>
	<?php echo $this->session->flashdata('minimal');?>
	<?php
		foreach($data_barang as $data){
			echo 	"<tr>".
						"<td>".$data->kode_barang."</td>".
						"<td>".$data->nama_barang." ".$data->varian_barang." ".$data->ukuran_barang." ".$data->ukuran2_barang."</td>".
						"<td>".$data->jumlah."</td>".
						"<td>".$data->satuan."</td>".
						"<td>".$data->harga_grosir."</td>".
						"<td>".$data->harga_eceran."</td>".						
						"<td>".$data->harga_masuk."</td>".
						"<td>".$data->jumlah_minimum."</td>";?>

			<td><a href="<?php echo site_url('BarangCon/editBarang/'.$data->kode_barang);?>"><button type='button' class='btn btn-warning'> Edit </button></a></td>

			<td><a href=javascript:pesanDelete('<?php echo("$data->kode_barang")?>')> <button type='button' class='btn btn-danger'> Hapus </button></a></td>
			</tr>

<?php						
					
		}
?>			
		</tbody>
		</table>

 	

<!-- Scripts Starts -->
<!-- build:[src] asset/js/ -->
<script src="<?= base_url() ?>asset/js/jquery-1.12.2.min.js"></script>
<script src="<?= base_url() ?>asset/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>asset/js/propeller.min.js"></script>
<!-- /build -->

<!--circle chart-->
<script src="../<?= base_url() ?>assetjs/circles.min.js"></script>

<script type="text/javascript">
function pesanDelete(id){
var pesan = confirm("Apakah anda yakin ingin menghapus Barang Nomor "+id+" ?");
		if(pesan){
			window.location.href ="<?php echo site_url('BarangCon/prosesDeleteBarang/');?>"+id;
		}
	}
(function() {
  "use strict";
  var toggles = document.querySelectorAll(".c-hamburger");
  for (var i = toggles.length - 1; i >= 0; i--) {
    var toggle = toggles[i];
    toggleHandler(toggle);
  };
  function toggleHandler(toggle) {
    toggle.addEventListener( "click", function(e) {
      e.preventDefault();
      (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
    });
  }

})();
</script>

<script type="text/javascript" language="javascript" src="<?= base_url() ?>/asset/components/datetimepicker/js/moment-with-locales.js"></script>
<script>

	$(document).ready(function() {
		var sPath=window.location.pathname;
		var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
		$(".pmd-sidebar-nav").each(function(){
			$(this).find("a[href='"+sPage+"']").parents(".dropdown").addClass("open");
			$(this).find("a[href='"+sPage+"']").parents(".dropdown").find('.dropdown-menu').css("display", "block");
			$(this).find("a[href='"+sPage+"']").parents(".dropdown").find('a.dropdown-toggle').addClass("active");
			$(this).find("a[href='"+sPage+"']").addClass("active");
		});
</script>


</body>
</html>