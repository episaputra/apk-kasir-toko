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
	</script>
	<style type="text/css">
            #main {
                background-image: url('<?= base_url() ?>asset/images/new.jpg');
   				background-repeat: no-repeat;
   				background-position: fixed;
   background-size: 100% 1000px;
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
 	
<!--Dialog-->
<div class="pmd-content pmd-content-custom"  style="padding: 0px; margin: 20px;" id="content">	
 	
	<div class="col-md-6 " style="padding-left: 300px;width: 2600px">
		<div class="section section-custom billinfo"> 
			<!--section-title -->
			<h2 style="padding-left: 20px; color:white">Tambah Data Barang</h2>
			<!-- section content start-->
			<div class="pmd-card pmd-z-depth">
				<div class="pmd-card-body">	
					<form class="form-horizontal" role="form" id="validationForm" action="<?php echo site_url('BarangCon/prosesEditBarang');?>" method="POST">
						<div class="form-group">
										<label for="regular1" class="control-label">Kode Barang</label>
										<input readonly type="text" id="regular1"  value="<?=$barang->kode_barang?>" class="form-control" name="kodebrg">
						</div>
						
						<div class="form-group">
										<label for="regular1" class="control-label">Nama Barang</label>
										<input type="text" id="regular1" value="<?=$barang->nama_barang?>" class="form-control" name="namabrg">
										</div>
						<div class="form-group">
										<label for="regular1" class="control-label">Varian Barang</label>
										<input type="text" value="<?=$barang->varian_barang?>" id="regular1" class="form-control" name="varianbrg">
										</div>	
						<div class="form-group row">
                                    	<label for="regular1" class="control-label">Ukuran Barang</label><br>
                                    	
                                    	<input type="text" value="<?=$barang->ukuran_barang?>" id="regular1" " class="form-control col-sm-4" style="width: 636px" name="ukuranbrg1" >
                                    	<select  class="form-control col-sm-4" style="width: 130px" name="ukuranbrg2" >
                                          <option value="gram">Gram</option>
                                           <option value="Kilogram">Kilo Gram</option>
       									  <option value="liter" >Liter </option>
                                          <option value="mili liter">Mili Liter</option>
                                        </select>           	
						</div>							
						
						<div class="form-group">
                                    	<label for="regular1" class="control-label">Satuan Barang</label>
                                    	<select class="form-control" name="satuanbrg">
                                    		<option>--Pilih Satuan--</option>
                                          <option value="pcs">Pcs</option>
                                          <option value="kg">Kilogram</option>
                                          <option value="box">Box</option>
                                        </select>
						</div>
						<div class="form-group">
										<label for="regular1" class="control-label">Jumlah Barang </label>
										<input type="text" value="<?=$barang->jumlah?>" id="regular1" class="form-control" name="jumlahbrg">
						</div>
						<div class="form-group">
										<label for="regular1" class="control-label">Harga Masuk Barang </label>
										<input value="<?=$barang->harga_masuk?>" type="text" id="regular1" class="form-control" name="hargamskbrg">
						</div>
												<div class="form-group">
										<label for="regular1" class="control-label">Batas Minimum Barang</label>
										<input type="text" id="regular1" value="<?=$barang->jumlah_minimum?>" class="form-control" name="minimumbrg">
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
			</div> <!-- section content end -->  
		</div>
	</div>


<!-- Scripts Starts -->
<script src="<?= base_url() ?>asset/js/jquery-1.12.2.min.js"></script>
<script src="<?= base_url() ?>asset/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>asset/js/propeller.min.js"></script>
<!-- /build -->
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
		$(".auto-update-year").html(new Date().getFullYear());
	});
</script> 

<!-- Scripts Ends -->
<!-- Javascript for Datepicker -->
<!-- build:[src] components/datetimepicker/js/ -->
<script type="text/javascript" language="javascript" src="<?= base_url() ?>asset/components/datetimepicker/js/moment-with-locales.js"></script>
<script type="text/javascript" language="javascript" src="<?= base_url() ?>asset/components/datetimepicker/js/bootstrap-datetimepicker.js"></script>
<!-- /build -->

<script>
	// Default date and time picker
	$('#datetimepicker-default').datetimepicker({
	format: 'YYYY-MM-DD'
	});
	
	
	// Inline datepicker
	$('#datepicker-inline').datetimepicker({
		inline: true
	});
	
	// Time picker only
	$('#timepicker').datetimepicker({
		format: 'LT'
	});
	
	// Linked date and time picker 
	// start date date and time picker 
	$('#datepicker-start').datetimepicker();

	// End date date and time picker 
	$('#datepicker-end').datetimepicker({
		useCurrent: false 
	});
	
	// start date picke on chagne event [select minimun date for end date datepicker]
	$("#datepicker-start").on("dp.change", function (e) {
		$('#datepicker-end').data("DateTimePicker").minDate(e.date);
	});
	// Start date picke on chagne event [select maxmimum date for start date datepicker]
	$("#datepicker-end").on("dp.change", function (e) {
		$('#datepicker-start').data("DateTimePicker").maxDate(e.date);
	});
	
	// Disabled Days of the Week (Disable sunday and saturday) [ 0-Sunday, 1-Monday, 2-Tuesday   3-wednesday 4-Thusday 5-Friday 6-Saturday]
	$('#datepicker-disabled-days').datetimepicker({
		 daysOfWeekDisabled: [0, 6]
	});
	
	// Datepicker in popup
	$('#datepicker-popup-inline').datetimepicker({
		inline: true
	});
	
	$("[data-header-left='true']").parent().addClass("pmd-navbar-left");
	
</script>

</body>
</html>