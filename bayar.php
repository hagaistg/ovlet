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

<!-- Custom Theme files -->
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
<!--- header ---->
	<!-- Navbar end -->
      <?php include('header.php');?>  

<!--- /header ---->
<!--- selectroom ---->
<div class="selectroom">
	<div class="container">	
	<?php 

	$kodebooking = $_GET['kodebooking'];

					foreach ($do->infotagihan($kodebooking) as $value) {

	echo "<div class='selectroom_top'>
		
		<div id='pilih'>
		<h2>Sistem Pembayaran Mobil</h2>
			</br>
			<table>
			<tr>
			<td>Nama Mobil </td>
			<td>&nbsp : $value[nama]</td>
			</tr>
			<tr>			
			<tr>
			<td>Tahun </td>
			<td>&nbsp : $value[tahun]</td>
			</tr>
			<tr>
			<td>No Polisi Mobil </td>
			<td>&nbsp : $value[no_plat]</td>
			</tr>
			<tr>
			<td>Banyak Kursi </td>
			<td>&nbsp : $value[kursi]</td>
			</tr>
			<tr>			
			<tr>			
			<tr>
			<td>Tanggal Pinjam </td>
			<td>&nbsp : $value[tgl_pinjam]</td>
			</tr>
			<tr>
			<td>Tanggal Kembali </td>
			<td>&nbsp : $value[tgl_kembali]</td>
			</tr>
			<tr>
			<td>Nama Pemesan </td>
			<td>&nbsp : $value[nama_lengkap]</td>
			</tr>
			<tr>
			<td>Alamat Pemesan </td>
			<td>&nbsp : $value[alamat]</td>
			</tr>
			<tr>
			<td>Telepon </td>
			<td>&nbsp : $value[telepon]</td>
			</tr>
			<tr>			
			<tr>
			<td><b><i>Harga Total </i></b></td>
			<td><b><i>&nbsp : Rp. $value[harga]</i></b></td>
			</tr>
		  </table>
		  <br>
		  <h3>Silahkan transfer ke rekening berikut ini</h3><br>
		  <h5> <b>BNI :988889987697</b><br><br>
		  <h5> <b>BCA :773858345668</b><br><br>
		  <h5> <b>BRI :539439332379</b><br><br>
		  Silahkan berikan kertas ini kepada pihak OVLET dan disertai bukti transfer bank.

		  </div>
		  </div>";
		}

	 ?>
	 <p>Cetak Dokumen diatas dan lakukan transfer ke nomor rekening diatas. Kertas dokumen diatas dan bukti transfer bank ditunjukkan ke pihak OVLET</p>
	 <br>
	 <br>
<style type="text/css">
	.b{
		background-color: #eaeaea;
		padding: 10px;

	}
</style>
<button class='b' onclick="printContent('pilih')">Cetak Dokumen</pilih>
 <script>
function printContent(el){
 var restorepage = document.body.innerHTML;
 var printcontent = document.getElementById(el).innerHTML;
 document.body.innerHTML = printcontent;
 window.print();
 document.body.innerHTML = restorepage;
}
</script>
	 </div>
</div>
<!--- /selectroom ---->
<!--- /about ---->
<!--- footer-top ---->
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
<?php include('footer.php');?>


<!-- //write us -->
</body>
</html>

			