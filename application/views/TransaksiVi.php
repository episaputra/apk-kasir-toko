<!doctype html>
<html lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Modal | Propeller - Admin Dashboard">
<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
<title>Toko Yayan</title>
<link rel="shortcut icon" type="image/x-icon" href="<?= base_url()?>asset/images/toko.jpg">

<!-- Google icon -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Bootstrap css -->
<!-- build:[href] assets/css/ -->
<link rel="stylesheet" type="text/css" href="<?= base_url()?>asset/css/bootstrap.min.css">
<!-- /build -->

<!-- Propeller css -->
<!-- build:[href] assets/css/ -->
<link rel="stylesheet" type="text/css" href="<?= base_url()?>asset/css/propeller.min.css">
<!-- /build -->

<!-- Propeller theme css-->
<link rel="stylesheet" type="text/css" href="<?= base_url()?>asset/css/propeller-theme.css" />

<!-- Propeller admin theme css-->
<link rel="stylesheet" type="text/css" href="<?= base_url()?>asset/css/propeller-admin.css">
<script type="text/javascript">

	function startCalc(){
		interval = setInterval("calc()",1);
	}
	
function calc(){
one = document.transaksi.jml_total.value;
two = document.transaksi.jml_bayar.value;
//three = document.transaksi.jml_kembalian.value;
document.transaksi.jml_kembalian.value = (one - two);}
function stopCalc(){
clearInterval(interval);
	}
</script>
    <!--Google Analytics code-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-124615-22', 'auto');
      ga('send', 'pageview');
    </script>
<style type="text/css">
            #main {
                background-image: url('<?= base_url()?>asset/images/new.jpg');
   				background-repeat: no-repeat;
   				background-position: fixed;
   background-size: 100% 100%;

            }
        </style>

</head>

<!-- Styles Ends -->
</head>

<body style=" height: 550px;" id="main">

     <div class="col-md-20"  >            
            	<div class="component-box">
                  <div class="pmd-card pmd-z-depth pmd-card-custom-form" style="background-color:#D1DBBD">
					<section>
					<nav class="navbar navbar-inverse" style="background-color:#44749d">
							  <div class="container-fluid"  >
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
								<a class="navbar-brand" href="">| Transaksi</a>



							</div>
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								  <ul class="nav navbar-nav">
									
								  </ul>
								
								  <ul class="nav navbar-nav navbar-right">

									<div>
			
					<a href="<?php echo base_url()?>login/logout">
					<div class="material-icons md-light pmd-sm pmd-badge  pmd-badge-overlap" style="padding-top: 12px;">power_settings_new</div>
				</a>

				<a class="navbar-brand" ><?php echo $this->session->userdata('akses');?></a>
            </div>

								  </ul>
								</div>
							  </div>
							</nav>
						</section>
                    </div>
                </div>	
        	</div>

 

<div class="section section-custom billinfo"> 
			<!--section-title -->
			<h2></h2><!--section-title end -->
			<!-- section content start-->
			<div class="pmd-card pmd-z-depth">
				<div class="pmd-card-body" >	
					<form class="form-horizontal" action="<?= base_url() ?>TransaksiCon/prosesTambahKeranjang" method="POST" role="form">
						
						<div class="form-group pmd-textfield">
							<label  class="col-sm-2 control-label"><strong>Kode Barang</strong></label>
							<div class="col-sm-10">

								<div class="fg-line">
									<input class="form-control input-sm" id="search" name="kodebrg" placeholder="Kode Barang" type="text"><span class="pmd-textfield-focused"></span>
								</div>

							</div>
						</div>

						<div class="form-group pmd-textfield">
							<label for="inputPassword3" class="col-sm-2 control-label"><strong>Jumlah Barang</strong></label>
							<div class="col-sm-10">
								<div class="fg-line">
									<input class="form-control input-sm" id="inputPassword3" name="jumlahbrg" placeholder="Jumlah Barang" type="text"><span class="pmd-textfield-focused"></span>
								</div>
							</div>
						</div>


						<div class="form-group">
							<div class="col-sm-offset-10 col-sm-10">
								<button type="submit" name="tambah" class="btn btn-primary pmd-checkbox-ripple-effect">Tambah</button>
							</div>
						</div>
			</form>
		</div>
	</div> <!-- section content end -->  
</div>
<br>

<div class="pmd-card pmd-z-depth pmd-card-custom-view" style="padding: 10px">
						
		<form action='<?=base_url()?>TransaksiCon/prosesInsertTransaksi' name="transaksi" method="POST">

		<div class='table-responsive pmd-card pmd-z-depth'>
		<table class='table table-mc-red pmd-table'>
		<thead>
		<tr>
				<th>Nomor</th>
				<th>Kode Barang</th>
				<th>Nama Barang</th>
				<th>Jumlah Barang</th>
				<th>Satuan Barang</th>
				<th>Harga Satuan</th>
				<th>Jumlah Harga</th>
				<th>Hapus</th>
			</tr>
		</thead>	
		<tbody>	
		<?php
		
		$total=0;

		foreach($data_trans as $data){

			echo 	"<tr>".
						"<td>".$data->nomor."</td>".
						"<td>".$data->kode_barang."</td>".
						"<td>".$data->nama_barang."</td>".
						"<td>".$data->jumlah_barang."</td>".
						"<td>".$data->satuan_barang."</td>".
						"<td> Rp.".number_format($data->harga_satuan)."</td>".
						"<td> Rp.".number_format($data->jumlah_harga)."</td>";

						$total=$total+$data->jumlah_harga;
						?>	


			<td><a href=javascript:pesanDelete('<?php echo("$data->nomor")?>')> <button type='button' class='btn btn-danger'> Hapus </button></a></td>
			</tr>
		
<?php 
	}
?>

		</tbody>
		</table>
<?php
		if(isset($data)){?>
		<input type="hidden" name="kode" value="<?= $data->kode_barang ?>">
		<input type="hidden" name="nama" value="<?= $data->nama_barang ?>">
		<input type="hidden" name="jumlah_brg" value="<?= $data->jumlah_barang ?>">
		<input type="hidden" name="satuan" value="<?= $data->satuan_barang ?>">
		<input type="hidden" name="harga_st" value="<?= $data->harga_satuan ?>">
		<input type="hidden" name="jumlah_hrg" value="<?= $data->jumlah_harga ?>">
		<input type="hidden" name="tanggal" value="<?= $data->tanggal_transaksi ?>">  <?php } ?>
	<div class="form-group col-sm-offset-0 col-sm-2">
								
							</div>

<div class="form-group col-sm-3 col-sm-offset-8 f" style="padding-right: 0px" >
										<label for="inputPassword3"  class="col-sm-2 control-label">Total</label>
							<div class="col-sm-10">

								

								<div class="fg-line">
									<input  readonly onFocus="startCalc();" onBlur="stopCalc();" class="form-control input-sm" value="<?php echo number_format($total);?>" id="inputPassword3" name="jml_total"  type="text"><span class="pmd-textfield-focused"></span>
								</div>
							</div>
									</div>

	</div>
</div>

<br>

							<div class="form-group col-sm-5 ">
										<label for="inputPassword3" class="col-sm-2 control-label" style="color:white">Bayar</label>
							<div class="col-sm-10">

								<div class="fg-line">
									<input class="form-control input-sm"  onFocus="startCalc();" onBlur="stopCalc();" id="inputPassword3" name="jml_bayar" type="text"><span class="pmd-textfield-focused"></span>
								</div>
							</div>
							</div>



							<div class="form-group col-sm-5 col-sm-offset-0">
										<label for="inputPassword3"  onFocus="startCalc();" onBlur="stopCalc();" class="col-sm-2 control-label" name="jml_kembalian" onchange='tryNumberFormat(this.form.thirdBox);' style="color:white">Kembalian</label>
							<div class="col-sm-10">

								<div class="fg-line">
									<input readonly class="form-control input-sm" id="inputPassword3"  type="text"><span class="pmd-textfield-focused"></span>
								</div>
							</div>
							</div>


							<div class="col-sm-offset-1 col-sm-1" >
								<button type="submit" class="btn btn-primary pmd-checkbox-ripple-effect">Simpan</button>
							</div>
</form>
								</div>
							</div>
							</div>


							



		

 	
<!-- Scripts Starts -->
<!-- build:[src] assets/js/ -->
<script src="<?= base_url() ?>asset/js/jquery-1.12.2.min.js"></script>
<script src="<?= base_url() ?>asset/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>asset/js/propeller.min.js"></script>
<!-- /build -->
<script src="../<?= base_url() ?>assetjs/circles.min.js"></script>

<script type="text/javascript">
function pesanDelete(id){
var pesan = confirm("Apakah anda yakin ingin menghapus Barang dengan Kode "+id+" ?");
		if(pesan){
			window.location.href="<?= base_url() ?>/TransaksiCon/prosesDeleteKeranjang/"+id;
			//.location.href ="<?php //echo site_url('BarangCon/prosesDeleteKeranjang/'"+id+');?>";
	
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
		$(".auto-update-year").html(new Date().getFullYear());
	});
</script> 

<!-- Scripts Ends -->

</body>
</html>