<?php include ('header.php') ?>
<?php include ('admin/proses.php') ?>
<?php
 //koneksi ke database 
$koneksi =  new mysqli("localhost","root","","pkm"); 
 //jika tidak ada sessio pelanggan (belum Login)
 if (!isset($_SESSION["namamember"]) OR empty($_SESSION["namamember"]))
  {
 	echo "<script>alert('Untuk melihat Riwayat Pemesanan, silahkan Login terlebih dahulu');</script>";
 	echo "<script>location='index.php';</script>";
 	exit();
 }

?>
        
<!DOCTYPE html>
<html>
<head>
	<title>Riwayat Pemesanan Anda</title>
	<meta charset="utf-8">
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

</head>
<body>
	<br>
	<center><h2>Riwayat Pemesanan <?php echo $_SESSION['namamember'] ?></h2></center>
	<div class="container">
<div class="row">
							<h4>Rental Mobil</h4>
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<table id="simple-table" class="table  table-bordered table-hover">
											<thead>
												<tr>
													<th>No</th>													
													<th>Nama Mobil</th>
													<th>Tanggal Pinjam</th>
													<th>Tanggal Kembali</th>
													<th>Harga</th>
													<th>Jumlah Kursi</th>
													<th>Plat Mobil</th>
													<th>Status</th>
													
												</tr>
											</thead>

											<tbody>
						<?php 
							//mendapatkan id pelanggan yang login dari session
							$user_id = $_SESSION["userid"];

							$nomor=1;
							$ambil = $koneksi->query("SELECT * FROM reservasi join mobil on reservasi.id_mobil=mobil.id WHERE user_id = 	'$user_id'");
				 			while($pecah = $ambil->fetch_assoc()) { 
				 		?>
				 		
								<tbody>
									<tr>
										<td><?php echo $nomor; ?></td>
										<td><?php echo $pecah["nama"] ?></td>
										<td><?php echo $pecah["tgl_pinjam"] ?></td>
										<td><?php echo $pecah["tgl_kembali"] ?></td>
										<td><?php echo $pecah["harga"] ?></td>
										<td><?php echo $pecah["kursi"] ?></td>
										<td><?php echo $pecah["no_plat"] ?></td>
										<td><?php echo $pecah["status"] ?></td>
										
									</tr>
									<?php $nomor++; ?>
									<?php } ?>
								</tbody>
								</tbody>
										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->
								<a href="rental.php" class="btn btn-default">Kembali ke Rental Mobil</a>
		
								<div class="hr hr-18 dotted hr-double"></div>

								

								<div class="hr hr-18 dotted hr-double"></div>

						</div><!-- /.row -->

					
						</div>
						<br>Keterangan Status :<br>
						

							<div class="row">
								<div class="col-md-6">
									<div class="alert alert-info">
										<p>
											Status On Progress, <br>
											<strong>Pembayaran anda belum dikonfirmasi</strong>
											<br>
										</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="alert alert-success">
										<p>
											Status Confirmed, <br>
											<strong>Pembayaran sudah dikonfirmasi admin, dan mobil sudah diantar ke alamat anda</strong>
										</p>
									</div>
								</div>
								
							</div>
						<br>
						<br>
						<br>
	<div class="row">
					<h4>Jemput Saya</h4>
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<table id="simple-table" class="table  table-bordered table-hover">
											<thead>
												<tr>
													<th>No</th>													
													<th>Tanggal</th>
													<th>Alamat Tujuan (Tarif)</th>
													
													<th>Status</th>
													
												</tr>
											</thead>

											<tbody>
						<?php 
							//mendapatkan id pelanggan yang login dari session
							$user_id = $_SESSION["userid"];

							$nomor=1;
							$ambil = $koneksi->query("SELECT * FROM pemesanan join tujuan on pemesanan.id_tujuan = tujuan.id_tujuan where user_id='$user_id'");
				 			while($pecah = $ambil->fetch_assoc()) { 
				 		?>
								<tbody>
									<tr>
										<td><?php echo $nomor; ?></td>
										<td><?php echo $pecah["tanggal"] ?></td>
										<td><?php echo $pecah["tujuan"] ?></td>
										<td><?php echo $pecah["status"] ?></td>
									</tr>
									<?php $nomor++; ?>
									<?php } ?>
								</tbody>
								</tbody>
										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->

								<div class="hr hr-18 dotted hr-double"></div>

								<a href="jemput1.php" class="btn btn-default">Kembali ke Jemput Saya</a>
								<br>
								<br>

								<div class="hr hr-18 dotted hr-double"></div>

						</div><!-- /.row -->
					
</div>
<br>Keterangan Status :<br>

<div class="row">
	<div class="col-md-6">
		<div class="alert alert-info">
			<p>
				Status On Progress, <br>
				<strong>Driver Belum melihat request anda</strong>
			</p>
		</div>
	</div>
	<div class="col-md-6">
		<div class="alert alert-success">
			<p>
				Status Confirmed, <br>
				<strong>Driver sudah menuju lokasi anda</strong>
			</p>
		</div>
	</div>
	
</div>


	
</div>
</div>
</body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php include ('footer.php') ?>
<!-- login -->
			     <?php include('login.php') ?>
<!-- //login -->
<!-- signin -->
		          <?php include('daftaruser.php') ?>
<!-- //signin -->

</html>