
<!doctype html>
<html lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Modal | Propeller - Admin Dashboard">
<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
<title>Toko Yayan</title>
<link rel="shortcut icon" type="image/x-icon" href="themes/images/favicon.ico">

<!-- Google icon -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Bootstrap css -->
<!-- build:[href] assets/css/ -->
<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
<!-- /build -->

<!-- Propeller css -->
<!-- build:[href] assets/css/ -->
<link rel="stylesheet" type="text/css" href="../../assets/css/propeller.min.css">
<!-- /build -->
<link rel="stylesheet" type="text/css" href="../../components/datetimepicker/css/bootstrap-datetimepicker.css" />
<link rel="stylesheet" type="text/css" href="../../components/datetimepicker/css/pmd-datetimepicker.css" />
<!-- Propeller theme css-->
<link rel="stylesheet" type="text/css" href="themes/css/propeller-theme.css" />

<!-- Propeller admin theme css-->
<link rel="stylesheet" type="text/css" href="themes/css/propeller-admin.css">

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
                background-image: url('themes/images/new.jpg');
   				background-repeat: no-repeat;
   				background-position: fixed;
   background-size: 100% 100%;

            }
        </style>
</head>

<!-- Styles Ends -->
</head>

<body style=" height: 550px;" id="main">


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
								  <a class="navbar-brand" href="index.html">Toko Yayan</a>
								</div>
								<div class="navbar-header">
								  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								  </button>
								  <a class="navbar-brand" href="index.html">| Data Barang</a>
								</div>
							
							
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								  
								  
								  <ul class="nav navbar-nav navbar-right">

									
									  <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pemilik Toko <span class="caret"></span></a>
									
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
 
<div class="container-fluid full-width-container value-added-detail-page"> 
	</aside><!-- End Left sidebar -->
<!-- Sidebar Ends -->  
<?php 
		require_once "config.php";
		if(isset($_GET["id"])){
		$idf = $_GET["id"];
	
	try{
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
		if($conn){
			$query = 	"SELECT * FROM master_barang ".
						"WHERE kode_barang = '".$idf."'";
			$statement = $conn->prepare($query);
			$proses = $statement->execute();
			$hasil = $statement->fetchAll(PDO::FETCH_ASSOC);
			
			
			$kode_barang=$hasil[0]["kode_barang"];
			$nama_barang=$hasil[0]["nama_barang"];
			$satuan_barang=$hasil[0]["satuan_barang"];
			$kategori_barang=$hasil[0]["kategori_barang"];
			$ukuran_barang=$hasil[0]["ukuran_barang"];
			$varian_barang=$hasil[0]["varian_barang"];			
		}
	}catch(PDOException $e){
		echo "Error-nya : ".$e->getMessage();
	}
}

		?>

<div class="pmd-card pmd-z-depth">
<div class="pmd-card-body">	
					<form class="form-horizontal" role="form">
						<div class="form-group pmd-textfield">
							<label for="inputEmail3"  class="col-sm-2 control-label"><strong>Kode Barang</strong></label>
							<div class="col-sm-10">
								<input value="<?php echo "$kode_barang"; ?>" disabled class="form-control input-sm"  type="text"><span class="pmd-textfield-focused"></span>
							</div>
						</div>
						<div class="form-group pmd-textfield">
							<label for="inputEmail3" class="col-sm-2 control-label"><strong>Nama Barang</strong></label>
							<div class="col-sm-10">
								<input class="form-control input-sm" disabled value="<?php echo $nama_barang." ".$varian_barang." ".$ukuran_barang; ?>"type="text"><span class="pmd-textfield-focused"></span>
							</div>
						</div>
						<div class="form-group pmd-textfield">
							<label for="inputEmail3" class="col-sm-2 control-label"><strong>Tanggal Masuk</strong></label>
							<div class="col-sm-10">
								<input  id="datetimepicker-default"  class="form-control" name="kadaluarsabrg"><span class="pmd-textfield-focused"></span>
							</div>
						</div>
						<div class="form-group pmd-textfield">
							<label for="inputEmail3" class="col-sm-2 control-label"><strong>Tanggal Kadaluarsa</strong></label>
							<div class="col-sm-10">
								<input  id="datetimepicker-default2"  class="form-control" name="kadaluarsabrg"><span class="pmd-textfield-focused"></span>
							</div>
						</div>
						<div class="form-group pmd-textfield">
							<label for="inputEmail3" class="col-sm-2 control-label"><strong>Jumlah Barang</strong></label>
							<div class="col-sm-10">
								<input class="form-control input-sm" id="inputEmail3" type="email"><span class="pmd-textfield-focused"></span>
							</div>
						</div>
						<div class="form-group pmd-textfield">
							<label for="inputEmail3" class="col-sm-2 control-label"><strong>Harga Masuk</strong></label>
							<div class="col-sm-10">
								<input class="form-control input-sm" id="inputEmail3" type="number"><span class="pmd-textfield-focused"></span>
							</div>
						</div>
						
					
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-primary pmd-checkbox-ripple-effect">Tambah</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<br>
		<div  class="container-fluid"  class="navbar navbar-inverse navbar-fixed-top pmd-navbar pmd-z-depth"> 
<?php

require_once "config.php";

$conn = null;
$statement = null;

try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);

	if($conn){
		$query = 	"SELECT * FROM data_barang";
		$statement = $conn->prepare($query);
		$proses = $statement->execute();
		$hasil = $statement->fetchAll(PDO::FETCH_ASSOC);
		echo"<div class='table-responsive pmd-card pmd-z-depth'>";
		echo "<table class='table table-mc-red pmd-table'>";
		echo "<thead>";
		echo "<tr>
				<th>Kode Barang</th>
				<th>Nama Barang</th>
				<th>Kadaluarsa</th>
				<th>Tanggal Masuk</th>
				<th>Jumlah</th>
				<th>Satuan</th>
				<th>Harga Masuk</th>
				<th>Harga Jual</th>
				<th colspan=2>Aksi</th>
			</tr>";
		echo"<tbody>";	
		foreach($hasil as $data){
			
			echo 	"<tr>".
						"<td>".$data["Kode_Barang"]."</td>".
						"<td>".$data["Nama_Barang"]."</td>".
						"<td>".$data["Kadaluarsa"]."</td>".
						"<td>".$data["tgl_masuk"]."</td>".
						"<td>".$data["Jumlah"]."</td>".
						"<td>".$data["Satuan"]."</td>".
						"<td>".$data["harga_masuk"]."</td>".
						"<td>".$data["harga_jual"]."</td>".
						"<td><a href='editBarang.php?id=".$data["Kode_Barang"]."'><button type='button' class='btn btn-warning'> Edit </button></a></td>".
						"<td><a href=javascript:pesanDelete('".$data["Kode_Barang"]."'><button type='button' class='btn btn-danger'> Hapus </button></a></td>".
					"</tr>";
		}
		echo"</tbody>";
		echo "</table>";
		
	}
}catch(PDOException $e){
	echo "Error-nya : ".$e->getMessage();
}finally{
	$conn = null;
	$statement = null;
}

?>					
				</tbody>
		
			</div>

	</div>

 	






<!-- Scripts Starts -->
<!-- build:[src] assets/js/ -->
<script src="../../assets/js/jquery-1.12.2.min.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/js/propeller.min.js"></script>
<!-- /build -->

<script type="text/javascript"> 
	function pesanDelete(id){
var pesan = confirm("Apakah anda yakin ingin menghapus ID UNIT "+id+"?");
		if(pesan){
			window.location.href = "deleteBarang.php?id="+id;
		}
	}
</script>

<script type="text/javascript" language="javascript" src="../../components/datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript">
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

<script type="text/javascript" language="javascript" src="../../components/datetimepicker/js/moment-with-locales.js"></script>
<script type="text/javascript" language="javascript" src="../../components/datetimepicker/js/bootstrap-datetimepicker.js"></script>
<!-- /build -->

<script>
	// Default date and time picker
	$('#datetimepicker-default').datetimepicker({
	format: 'YYYY-MM-DD'
	});
	$('#datetimepicker-default2').datetimepicker({
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

</script>

<!-- Scripts Ends -->

</body>
</html>