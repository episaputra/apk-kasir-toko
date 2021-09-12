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
<style type="text/css">
	#notifications {
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


<body style=" height: 550px;" id="main">

<!-- Navbar -->


	  	<!-- bootstrap basic Navbar code and example -->
            <div class="col-md-20">            
            	<div class="component-box">
                   	<!-- bootstrap basic Navbar example-->
					<div class="pmd-card pmd-z-depth" style="background-color:#D1DBBD">
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
           					    } ?> >Toko Yayan |  Kelola Akun</a>
								</div>
							
								<!-- Collect the nav links, forms, and other content for toggling -->
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
								</div><!-- /.navbar-collapse -->
							  </div><!-- /.container-fluid -->
							</nav>
						</section>
                    </div><!-- bootstrap basic Navbar example end-->
                </div>	
        	</div><!-- bootstrap basic Navbar code and example end -->
      
  <div class="pmd-card pmd-z-depth">

				
				<div class="pmd-card-body">	
					<form class="form-horizontal" action="<?= base_url() ?>KelolaAkunCon/prosesEditAkun" method="POST" role="form">
						
						<div class="form-group pmd-textfield">
							<label for="inputPassword3" class="col-sm-2 control-label"><strong>Username</strong></label>
							<div class="col-sm-10">

								<div class="fg-line">
									<input readonly name="user" value="<?=$data_ubah->nama_pengguna ?>" class="form-control input-sm" id="inputPassword3"  type="text"><span class="pmd-textfield-focused"></span>
								</div>
							</div>
						</div>
						<div class="form-group pmd-textfield">
							<label for="inputEmail3" value="" class="col-sm-2 control-label"><strong>Nama Pegawai</strong></label>
							<div class="col-sm-10">
								<input name="namapgw" value="<?=$data_ubah->nama_pegawai?>" class="form-control input-sm" id="inputEmail3" type="text" ><span class="pmd-textfield-focused"></span>
							</div>
						</div>
						<div class="form-group pmd-textfield">
							<label for="inputPassword3" class="col-sm-2 control-label"><strong>Password</strong></label>
							<div class="col-sm-10">

								<div class="fg-line">
									<input name="pass" value="<?=$data_ubah->password ?>" class="form-control input-sm" id="inputPassword3"  type="password"><span class="pmd-textfield-focused"></span>
								</div>
							</div>
						</div>
						
					<div class="form-group pmd-textfield">
							<label for="inputPassword3" class="col-sm-2 control-label"><strong>Level</strong></label>
							<div class="form-group pmd-textfield">
										
										<label class="radio-inline pmd-radio">
										<input type="radio" name="level" id="inlineRadio1" value="1"><span >&nbsp;</span>
										<span for="inlineRadio1">1</span> </label>
																 

										<label class="radio-inline pmd-radio">
										<input type="radio" name="level" id="inlineRadio1" value="2"><span >&nbsp;</span>
										<span for="inlineRadio2">2</span> </label>
							
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button name="simpan" type="submit" class="btn btn-primary pmd-checkbox-ripple-effect">Simpan</button>
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
	
	
				<th><strong>Username</strong></th>
				<th><strong>Nama Pegawai</strong></th>
				<th><strong>Password</strong></th>
				<th><strong>Level</strong></th>
				
				<th><strong>Ubah</strong></th>
				<th><strong>Hapus</strong></th>
			</tr>
		<tbody>
<?php	
		foreach($pengguna as $data){
			
			echo 	"<tr>".
						"<td>".$data->nama_pengguna."</td>".
						"<td>".$data->nama_pegawai."</td>".
						"<td>".$data->password."</td>".
						"<td>".$data->level."</td>";
						?>

						<td><a href="<?php echo site_url('KelolaAkunCon/editPengguna/'.$data->nama_pengguna);?>"><button type='button' class='btn btn-warning'> Ubah </button></a>
						</td>
			<td><a href=javascript:pesanDelete('<?php echo("$data->nama_pengguna")?>')> <button type='button' class='btn btn-danger'> Hapus </button></a></td>
			</tr>
		<?php
		}
		echo"</tbody>";
		echo "</table>";
		
	?>					
				</div>
		</div>


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
var pesan = confirm("Apakah anda yakin ingin menghapus Pengguna dengan Username "+id+" ?");
		if(pesan){
			window.location.href ="<?php echo site_url('KelolaAkunCon/prosesDeletePengguna/'.$data->nama_pengguna);?>";
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

<script type="text/javascript" language="javascript" src="../../components/datetimepicker/js/moment-with-locales.js"></script>
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