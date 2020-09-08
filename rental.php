<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
include 'admin/proses.php';

$do = new ClassMobil();
 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Rental mobil</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Green Wheels Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Custom Fonts -->
        <link rel="stylesheet" href="custom-font/fonts.css" />
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- Bootsnav -->
        <link rel="stylesheet" href="css/bootsnav.css">
        <!-- Fancybox -->
        <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />	
        <!-- Custom stylesheet -->
        <link rel="stylesheet" href="css/custom.css" />

    <link rel="stylesheet" href="css/csstambahan.css" type="text/css">

<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
<body>
<!-- top-header -->
<?php include('header.php');?>

<!--- header ---->
<br>
	<!-- <div class="container">
		<ul class="breadcrumb">
			<li><a href="rental.php">Rental</a></li>
			<li><a href="reservasi.php">Reservasi</a></li>
			<li><a href="bayar.php">Cetak Dokumen</a></li>
						
		</ul>
	</div> -->
<br>
<div class="bus-btm">
		<center><h2>Rental</h2></center>
		<br>
	<div class="container">
		<ul>
			<li class="trav"><a href="#">Nama Mobil</a></li>
			
			<li class="arriv"><a href="#">Tahun</a></li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li class="seat"><a href="#">No Polisi</a></li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li class="kursi"><a href="#">Banyak Kursi</a></li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>

			<li class="fare"><a href="#">Harga</a></li>
				<div class="clearfix"></div>
		</ul>
	</div>
</div>
<!--- /bus-btm ---->

<!--- bus-midd ---->
<div class="bus-midd wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
	<div class="container">
	<!--- ul-first  ---->
			<?php 

			if (isset($_GET['id'])) {
				require 'kategorimerek.php';
			}else if (isset($_GET['kota'])) {
				require 'kategoriperjalanan.php';
			}else{
				require 'listmobil.php';
			}

			 ?>
	</div>
<br>
</div>
<!--- /bus-midd ---->
<!--- footer-top ---->
<br>
	<div class="container">
		<div class="col-md-6 footer-left wow fadeInLeft animated" data-wow-delay=".5s">
			<h3 style="color: #222">Kategori Mobil</h3>
				<ul>
				 <?php
					$row = $do->selectMerek();
					$no = 1;
					foreach ($row as $val) {

						echo "<li><a href='rental.php?id=$val[0]'>$val[1]</a></li>";
						$no++;
					}
				 ?>
					
				</ul>
		</div>
		
		</div>

<!--- /footer-top ---->
<!---copy-right ---->
<?php include('footer.php');?>
<!-- login -->
			     <?php include('login.php') ?>
<!-- //login -->
<!-- signin -->
		          <?php include('daftaruser.php') ?>
<!-- //signin -->

</body>
</html>