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
                background-image: url('asset/images/duit.jpg');
                
            }
        </style>
</head>
<body style=" height: 550px;">

<!-- Navbar -->
<div  class="container-fluid" class="navbar navbar-inverse navbar-fixed-top pmd-navbar pmd-z-depth"> 

	  	<!-- bootstrap basic Navbar code and example -->
            <div class="col-md-20">            
            	<div class="component-box">
                   	<!-- bootstrap basic Navbar example-->
					<div class="pmd-card pmd-z-depth">
						<section class="nav-show" style="position: relative;">
							<nav class="navbar navbar-inverse">
							  <div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
								  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								  </button>
								  <a class="navbar-brand" href="index.html">Toko Yayan</a>
								</div>
							
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								  <ul class="nav navbar-nav">
									
								  </ul>

								  <ul class="nav navbar-nav navbar-right">

									<li class="dropdown">
									  <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pegawai <span class="caret"></span></a>
									  <ul class="dropdown-menu dropdown-menu-right">
										<li><a href="javascript:void(0);">Akun</a></li>
										<li><a href="javascript:void(0);">Keluar</a></li>
									  </ul>
									</li>
								  </ul>
								</div><!-- /.navbar-collapse -->
							  </div><!-- /.container-fluid -->
							</nav>
						</section>
                    </div><!-- bootstrap basic Navbar example end-->
                </div>	
        	</div><!-- bootstrap basic Navbar code and example end -->
        
      	</section><!-- bootstrap basic Navbar end -->
      </div>
 </div> 
 

 	
<!--Dialog-->
<div class="pmd-content pmd-content-custom" id="content" >	
			<!-- alert code and example -->

					<div class="col-md-11"> 
						<div class="pmd-card pmd-z-depth pmd-card-custom-form">
							<div class="pmd-card-body text-center"> 
									
								<button style="background-color:#fff ;" class="pmd-z-depth" data-target="#data-barang" data-toggle="modal" class="btn btn-primary" type="button"><img src="asset/images/data_barang.png" style="width: 250px;height: 250px;" /></button>
											
								<div tabindex="-1" class="modal fade" id="data-barang" style="display: none;" aria-hidden="true">
									<div class="modal-dialog" >
													<div class="modal-content" style="width: 250px; ">
														<div style="width: 10px height:10px;" class="modal-body">
															<a href=""><img src="asset/images/add.png" style="width: 100px"/></a>
														<a href="proses.php?menu=barang">	<img src="asset/images/edit.png" style="width: 100px"/></a>
															
															
														</div>
													</div>
									</div>
								</div>

								<button style="background-color:#fff;" class="pmd-z-depth"  class="btn btn-primary"><a href="transaksi.html"> <img src="asset/images/transaksi.png" style="width: 250px;height: 250px;" /></a></button>
									
								<button style="background-color:#fff ;" class="pmd-z-depth" data-target="#btn-hutang" data-toggle="modal" class="btn btn-primary" type="button"><img src="asset/images/hutang.png" style="width: 250px;height: 250px; "/></button>
											
								<div tabindex="-1" class="modal fade" id="btn-hutang" style="display: none;" aria-hidden="true">
									<div class="modal-dialog" >
													<div class="modal-content" style="width: 250px; ">
														<div style="width: 10px height:10px;" class="modal-body">
															<a href="tambah_hutang.php"><img src="asset/images/add.png" style="width: 100px"/></a>
														<a href="edit_hutang.php">	<img src="asset/images/edit.png" style="width: 100px"/></a>
															
															
														</div>
													</div>
									</div>
								</div>



									<button style="background-color:#fff;" class="pmd-z-depth"  class="btn btn-primary" ><a href="laporan.html">  <img src="asset/images/laporan.png" style="width: 250px;height: 250px; margin: 10;" ></a></button>

								<!--<button style="background-color:#fff;" class="pmd-z-depth"  class="btn btn-primary"><img src="asset/images/kelola_akun.png" style="width: 250px;height: 250px;"></button>	-->
							</div>
						</div>
					</div>
				</div>
			</div> <!-- alert code and example end -->
			<!-- Footer Starts -->

<!-- Footer Ends -->

<!-- Scripts Starts -->
<!-- build:[src] assets/js/ -->
<script src="../../assets/js/jquery-1.12.2.min.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/js/propeller.min.js"></script>
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

</body>
</html>