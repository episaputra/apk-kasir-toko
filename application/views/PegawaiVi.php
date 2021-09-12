<!doctype html>
<html lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Modal | Propeller - Admin Dashboard">
<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
<title>Toko Yayan</title>
<link rel="shortcut icon" type="image/x-icon" href="asset/images/toko.jpg">



<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Bootstrap css -->
<!-- build:[href] assets/css/ -->
<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
<!-- /build -->

<!-- Propeller css -->
<!-- build:[href] assets/css/ -->
<link rel="stylesheet" type="text/css" href="asset/css/propeller.min.css">
<!-- /build -->

<!-- Propeller theme css-->
<link rel="stylesheet" type="text/css" href="asset/css/propeller-theme.css" />

<!-- Propeller admin theme css-->
<link rel="stylesheet" type="text/css" href="asset/css/propeller-admin.css">

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
                background-image: url('asset/images/new.jpg');
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
					
					<nav class="navbar navbar-inverse" style="background-color:#44749d">
							  <div class="container-fluid"  >
								<div class="navbar-header">
								  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>

								  </button>

								  <a class="navbar-brand" href="index.html">Toko Yayan</a>
								<img src="asset/images/dd.png" style="width: 60px; height: 50px; ">



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

         <div class="col-md-20" style="padding-top: 100px"> 
						<div>
							<div class="pmd-card-body text-center" > 
								<div id="popover-bottom" style="display:none;">	
							</div>	
								<button  class="pmd-z-depth " data-target="#data-barang" data-toggle="modal" class="btn btn-primary" type="button" style="background-color:#fff" ><a href="<?= base_url() ?>BarangCon"><img class="btn pmd-ripple-effect btn-default pmd-btn-raised" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-html="true" data-content="Data Barang" src="asset/images/data_barang.png" style="width: 250px;height: 250px;" /></a></button>

								
								<button style="background-color:#fff;" class="pmd-z-depth"  class="btn btn-primary"><a href="<?= base_url() ?>TransaksiCon"> <img img class="btn pmd-ripple-effect btn-default pmd-btn-raised" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-html="true" data-content="Transaksi" src="asset/images/transaksi.jpg" style="width: 250px;height: 250px;" /></a></button>
									
								<button style="background-color:#fff ;" class="pmd-z-depth" data-target="#btn-hutang" data-toggle="modal" class="btn btn-primary" type="button"><a href="<?= base_url() ?>HutangCon"><img img class="btn pmd-ripple-effect btn-default pmd-btn-raised" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-html="true" data-content="Data Hutang" src="asset/images/hutang.png" style="width: 250px;height: 250px; "/></button>
											
								


									<button style="background-color:#fff;" class="pmd-z-depth"  class="btn btn-primary" ><a href="<?= base_url() ?>LaporanCon">  <img img class="btn pmd-ripple-effect btn-default pmd-btn-raised" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-html="true" data-content="Laporan" src="asset/images/laporan.png" style="width: 250px;height: 250px; margin: 10;" ></a></button>

								<!--<button style="background-color:#fff;" class="pmd-z-depth"  class="btn btn-primary"><img src="asset/images/kelola_akun.png" style="width: 250px;height: 250px;"></button>	-->
							</div>
						</div>
					</div>	<!-- Footer Starts -->

<script src="asset/js/jquery-1.12.2.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>
<script src="asset/js/propeller.min.js"></script>
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


</body >
</html>