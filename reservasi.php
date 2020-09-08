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
<?php include('header.php'); ?>

<!--- /header ---->
<!--- selectroom ---->
<div class="selectroom">
	<div class="container">	

		<?php

	$id = $_GET['pesan'];

					$value = $do->beliMobil($id);
						$m = $do->selectOneMobil($value[1]);
						/*$n = $do->selectOneKota($value[2]);*/

		echo "<div class='selectroom_top'>
			<div class='col-md-4 selectroom_left wow fadeInLeft animated' data-wow-delay='.5s'>
				<img src='gambar/".$m['gambar']."' class='img-responsive' alt=''>
			</div>
			<div class='col-md-8 selectroom_right wow fadeInRight animated' data-wow-delay='.5s'>
				<h2>$m[nama]</h2>
				
				<ul>
						<li>
							<h4>Merk</h4>
							<h6>$m[2]</h6>
						</li>
						<li>
							<h4>Tahun</h4>
							<h6>$m[3]</h6>
						</li>
						<li>
							<h4>No Polisi</h4>
							<h6>$m[5]</h6>
						</li>
						<li>
							<h4>Banyak kursi</h4>
							<h6>$m[4]</h6>
						</li>
					</ul>
						<div class='clearfix'></div>
				<div class='grand'>
					<p>Harga Total</p>
					<h3>RP. $value[2]</h3>
				</div>
			</div>
			<div class='clearfix'></div>
		</div>"
					;
					?>
		<div class="selectroom_top">
			<h2>Travels</h2>
			<br>
			<form method="post">
				<div class="selectroom-info animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
					<div class="bnr-right">
					<label class="inputLabel">Tanggal Pinjam</label>
					<input class="date" name="tglawal" id="datepicker" type="text" placeholder="dd-mm-yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'yyyy-mm-dd';}" required=>
				</div>
				<div class="bnr-right">
					<label class="inputLabel">Tanggal Kembali<span class="opt">&nbsp;(Optional)</span></label>
					<input class="date" name="tglakhir" id="datepicker1" type="text" placeholder="dd-mm-yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'yyyy-mm-dd';}" required=>
				</div>
				<br><br><br>
				<div class='bus-txt4'>
					<div class="sear">
					<button class="seabtn" name="book" id="book">Booking</button>
					</div>
						<div class='clearfix'></div>
				</div>
				<input type="hidden" name="idmobil" value="<?=$id?>">
				<input type="hidden" name="harga" value="<?=$value[2]?>">
			</form>
			<?php
			if(isset($_POST['book'])){
				$idmobil = $_POST['idmobil'];
				$harga = $_POST['harga'];
				$tglawal = $_POST['tglawal'];
				$newDate1 = date("Y-m-d", strtotime($tglawal));
				$tglakhir = $_POST['tglakhir'];
				$newDate2 = date("Y-m-d", strtotime($tglakhir));
				$status = 'On Progress';
				$kode = $do->acak(10);
				$userid = $_SESSION['userid'];
				if(!empty($tglawal) and !empty($tglakhir)){
					//echo "<script>alert('$newDate1')</script>";
					$proses = $do->reservasi($idmobil,$userid,$kode,$harga,$newDate1,$newDate2,$status);
				}else{
					echo "<script>alert('Tanggal tidak ada')</script>";
				}
			}
			
			?>
			<div class="clearfix"></div>
			<!---start-date-piker---->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
					<script>
						$(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
						});
					</script>
			<!---/End-date-piker---->

			</div>
			
		</div>
	</div>
</div>
<div class="footer-top">
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
					<div class="clearfix"></div>
				</ul>
		</div>
		
		</div>
		</div>
<?php include('footer.php'); ?>
<!-- login -->
			     <?php include('login.php') ?>
<!-- //login -->
<!-- signin -->
		          <?php include('daftaruser.php') ?>
<!-- //signin -->



</body>
</html>

			