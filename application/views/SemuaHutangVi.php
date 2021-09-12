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
    $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
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
<body style=" height: 550px;" id="main" >
		
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
								<a class="navbar-brand" href="">| Data Hutang</a>



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
        	
  <div class="pmd-card pmd-z-depth">
				<h2 style="padding-left: 20px">Tambah Data</h2>
				<div class="pmd-card-body">	
					<form class="form-horizontal" role="form" action="<?= base_url() ?>HutangCon/prosesInsertHutang" method="post">
						<div class="form-group pmd-textfield">
							<label for="inputEmail3" class="col-sm-2 control-label"><strong>NIK</strong></label>

							<div class="col-sm-10">
								<input class="form-control input-sm"  type="text" name="idhutang"><span class="pmd-textfield-focused"></span>
							</div>
							
						</div>
						<div class="form-group pmd-textfield">
							<label for="inputPassword3" class="col-sm-2 control-label"><strong>Nama</strong></label>
							<div class="col-sm-10">

								<div class="fg-line">
									<input class="form-control input-sm"   type="text" name="namahutang"><span class="pmd-textfield-focused"></span>
								</div>
							</div>
						</div>
						<div class="form-group pmd-textfield">
							<label for="inputPassword3" class="col-sm-2 control-label"><strong>Jumlah Hutang</strong></label>
							<div class="col-sm-10">

								<div class="fg-line">
									<input class="form-control input-sm" id="inputPassword3"  type="text" name="jmlhhutang"><span class="pmd-textfield-focused"></span>
								</div>
							</div>
						</div>
						
					<div class="form-group pmd-textfield">
							<label for="inputPassword3" class="col-sm-2 control-label"><strong>Tanggal Transaksi</strong></label>
							<div class="col-sm-10">

								<div class="fg-line">
									<input class="form-control input-sm" id="datetimepicker-default"  type="text" name="tglhutang"><span class="pmd-textfield-focused"></span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button onclick="pesanSimpan()" name="simpan" type="submit" class="btn btn-primary pmd-checkbox-ripple-effect">Simpan</button>
							</div>
						</div>
					</form>
				</div>
			</div>
 	 
 	 <br>

			<div class='table-responsive pmd-card pmd-z-depth'>
			<table class='table table-mc-red pmd-table'>
			<thead>
			<tr>
				<th><strong>NO ID </strong></th>
				<th><strong>Nama </strong></th>
				<th><strong>Jumlah Hutang </strong></th>
				<th><strong>Tanggal Transaksi</strong></th>
				<th><strong>Ubah</strong></th>
				<th><strong>Hapus</strong></th>
			</tr>
			</thead>
		<tbody>	
		<?php

		foreach($data_hutang as $data){
			
			echo 	"<tr>".
						"<td>".$data->id_hutang."</td>".
						"<td>".$data->nama_hutang."</td>".
						"<td>".$data->jumlah_hutang."</td>".
						"<td>".$data->tanggal_hutang."</td>";?>

						<td><a href="<?php echo site_url('HutangCon/prosesDetailHutang/'.$data->id_hutang);?>"><button type='button' class='btn btn-warning'> Ubah </button></a></td>


						<td><a href=javascript:pesanDelete('<?php echo("$data->id_hutang")?>')> <button type='button' class='btn btn-danger'> Hapus </button></a></td>
			</tr>

<?php
		}
?>
			</tbody>
			</table>
            	
            </a>
        </li>
    </ul>
 </div>

</footer>
<!-- Footer Ends -->

<!-- Scripts Starts -->
<!-- build:[src] assets/js/ -->
<script src="<?= base_url() ?>asset/js/jquery-1.12.2.min.js"></script>
<script src="<?= base_url() ?>asset/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>asset/js/propeller.min.js"></script>
<!-- /build -->

<!--circle chart-->
<script src="../<?= base_url() ?>assetjs/circles.min.js"></script>

<script type="text/javascript">

function pesanDelete(id){
var pesan = confirm("Apakah anda yakin ingin menghapus Hutang dengan NIK "+id+" ?");
	 	if(pesan){
			window.location.href ="<?php echo site_url('BarangCon/prosesDeleteHutang/'.$data->kode_barang);?>";
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

})();</script>

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
<script type="text/javascript">
function pesanSimpan(){

var pesan = confirm("Apakah anda yakin ingin menyimpan data Pengguna Baru ?");
		if(pesan){
			window.location.href ="<?php echo site_url('HutangCon/prosesInsertHutang/');?>";
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
<script src="<?= base_url() ?>asset/js/jquery-1.12.2.min.js"></script>
<script src="<?= base_url() ?>asset/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>asset/js/propeller.min.js"></script>
<script src="<?= base_url() ?>asset/js/circles.js"></script>
<script src="<?= base_url() ?>asset/js/circles.min.js"></script>



<!-- /build -->
<script type="text/javascript" language="javascript" src="<?= base_url() ?>asset/components/datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" language="javascript" src="<?= base_url() ?>asset//components/datetimepicker/js/moment-with-locales.js"></script>

<script type="text/javascript" language="javascript" src="<?= base_url() ?>asset/components/datetimepicker/js/moment-with-locales.js"></script>
<script type="text/javascript" language="javascript" src="<?= base_url() ?>asset/components/datetimepicker/js/bootstrap-datetimepicker.js"></script>
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