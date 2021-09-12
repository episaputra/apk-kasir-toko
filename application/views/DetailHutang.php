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
    $('#berhasil').slideDown('slow').delay(3000).slideUp('slow');
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
								  <a class="navbar-brand">| Data Hutang</a>
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
 
 <div  class="container-fluid"  class="navbar navbar-inverse navbar-fixed-top pmd-navbar pmd-z-depth"> 

	  	<!-- bootstrap basic Navbar code and example -->
            
  <div class="pmd-card pmd-z-depth">
				
				<div class="pmd-card-body">	
					<form action="<?=base_url()?>HutangCon/prosesInsertDetailHutang" class="form-horizontal" role="form" method="POST">
						<div class="form-group pmd-textfield">
							<label for="inputEmail3" class="col-sm-2 control-label"><strong>Tanggal Transaksi</strong></label>

								<div class="col-sm-10">
									<input class="form-control input-sm" id="datetimepicker-default"  type="text" name="tglhutang"><span class="pmd-textfield-focused"></span>
								</div>
						</div>
						<div class="form-group pmd-textfield">
							<label for="inputPassword3" class="col-sm-2 control-label"><strong>Jenis Transaksi</strong></label>
							
							<div class="form-group pmd-textfield">
										
										<label class="radio-inline pmd-radio">
										<input type="radio" name="jenis_transaksi" id="inlineRadio1" value="bayar"><span >&nbsp;</span>
										<span for="inlineRadio1">Bayar</span> </label>
																 

										<label class="radio-inline pmd-radio">
										<input type="radio" name="jenis_transaksi" id="inlineRadio1" value="hutang"><span >&nbsp;</span>
										<span for="inlineRadio2">Hutang</span> </label>
							
							</div>
						<div class="form-group pmd-textfield">
							<label for="inputPassword3" class="col-sm-2 control-label"><strong>Jumlah Transaksi</strong></label>
							<div class="col-sm-10">

								<div class="fg-line">
									<input class="form-control input-sm" name="jumlah"  type="text"><span class="pmd-textfield-focused"></span>
								</div>
							</div>
						</div>
					
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-primary pmd-checkbox-ripple-effect">Simpan</button>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
 <br>
 <div class="container-fluid full-width-container value-added-detail-page">
	
		<div class='table-responsive pmd-card pmd-z-depth'>
		<table class='table table-mc-red pmd-table'>
		<thead>
		<tr>
				<th>NO ID</th>

				<th>Tanggal Transaksi</th>
				<th>Jenis Transaksi</th>
				<th>Jumlah Hutang</th>
				<th>Hapus</th>
			</tr>
		<tbody>
	<?php		
	$total=0;
		foreach($hutang as $data){
			
			echo 	"<tr>".
						"<td>".$data->id_hutang."</td>".
						"<td>".$data->tanggal_hutang."</td>".
						"<td>".$data->jenis_transaksi."</td>".
						"<td>".abs($data->jumlah_hutang)."</td>";?>
					

						<td><a href="javascript:pesanDelete('".$data["Id_Hutang"]."')"><button type='button' class='btn btn-danger'> Hapus </button></a></td>
		</tr>
	<?php	
	$total=$total+$data->jumlah_hutang;		
		}
		echo "<tr><td  colspan='3'>Total </td><td>$total</td><td></td></tr>";
?>
		</tbody>
		</table>
		
				</tbody>
		
			</div>

	</div>
 	
</footer>
<!-- Footer Ends -->

<!-- Scripts Starts -->
<!-- build:[src] assets/js/ -->
<script src="<?= base_url() ?>asset/js/jquery-1.12.2.min.js"></script>
<script src="<?= base_url() ?>asset/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>asset/js/propeller.min.js"></script>
<script src="<?= base_url() ?>asset/js/circles.js"></script>
<script src="<?= base_url() ?>asset/js/circles.min.js"></script>



<!-- /build -->
<script type="text/javascript" language="javascript" src="<?= base_url() ?>asset/components/datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" language="javascript" src="<?= base_url() ?>asset//components/datetimepicker/js/moment-with-locales.js"></script>
<script>
	$(document).ready(function() {
		var sPath=window.location.pathname;
		var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
		$(".pmd-sidebar-nav").each(function(){
			$(this).find("a[href='"+sPage+"']").parents(".dropdown").addClass("open");
			$(this).find("a[href='"+sPage+"']").parents(".dropdown").find('.dropdown-menu').css("display", "block");
			$(this).find("a[href='"+sPage+"']").parents(".dropdown").find('a.dropdown-toggle').addClass("active");
			$(this).find("a[href='"+sPage+"']").addClass("active");
</script>

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