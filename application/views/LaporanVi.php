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
					
					<nav class="navbar navbar-inverse"  style="background-color:#44749d">
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
           					    } ?> >Toko Yayan| Laporan</a>


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
      	</section>
      </div>
 </div> 

			<!--section-title -->
			<h2 style="padding-left: 15px;color:white">Laporan Penjualan Toko Yayan</h2><!--section-title end -->
			<!-- section content start-->
			<div style="padding-left: 15px">
			<div class="pmd-card-body pmd-card pmd-z-depth" style="width: 45%; padding-left: 15px">	
						<form class="row" action="<?= base_url() ?>LaporanCon/cariData"  method="POST" role="form">
							<div class="col-sm-4">
								<div class="form-group pmd-textfield 	">
								<h3>Tanggal Penjualan</h3>
								</div>
							</div>
							<div class="col-sm-4" style="padding-top: 8px">
								<div class="form-group pmd-textfield ">
									<input class="form-control input-sm" id="datetimepicker-default"  type="text" name="tglhutang"><span class="pmd-textfield-focused"></span>
								</div>
							</div>
							
							<div class="col-sm-3" style="padding-top: 10px; padding-left: 40px">
								<button type="submit" class="btn btn-primary pmd-ripple-effect">Tampilkan</button>
							</div>
						</form>
				</div>
				</div>



 







<div class="col-md-9">
					<h1 style="color:white">Laporan</h1>
					<div class="component-box" style="width: 135%">
						
						<!-- Basic Bootstrap Table example -->
						<div class="pmd-card pmd-z-depth pmd-card-custom-view">
                        	<div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" class="table" id="table-bootstrap">
                                    <thead>
                                        <tr>
                                            
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Jumlah Barang</th>
                                            <th>Satuan Barang</th>
                                            <th>Harga Satuan</th>
                                            <th>Jumlah Harga</th>
                                            <th>Tanggal Keluar</th>
                                        </tr>
                                    </thead>
                              
<?php if(isset($data_laporan)){
			
		foreach($data_laporan as $data){
			$tanggal = $data->tanggal_transaksi;
			$tgl = date('d-m-Y',strtotime($tanggal));
			echo 	"<tr>".
						"<td>".$data->kode_barang."</td>".
						"<td>".$data->nama_barang."</td>".
						"<td>".$data->jumlah_barang."</td>".
						"<td>".$data->satuan."</td>".
						"<td>".$data->harga."</td>".
						"<td>".$data->total_harga."</td>".
						"<td>".$tgl."</td>";
		}
	}else{
		echo 	"<tr>".
						"<td></td>".
						"<td></td>".
						"<td></td>".
						"<td></td>".
						"<td></td>".
						"<td></td>".
						"<td></td>";
	}
		?>
		  </table>
                            </div>
						</div>
					</div> 
			
		<div style="padding-left: 1254px; padding-bottom: 10px">

			<form action="<?= base_url() ?>LaporanCon/printLaporan" method="POST">
			
					<button value="cetak" type="submit" name="cetak"  class="btn pmd-ripple-effect btn-primary">Cetak</button>
				</div>
				</div>
</form>
         
<!-- Footer Ends -->
<script type="text/javascript">
function cetak(){
 print();
}
</script>
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