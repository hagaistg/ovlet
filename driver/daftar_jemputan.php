<!DOCTYPE html>
<?php
include 'koneksi.php';
?>
 <html> 
    <head>
        <meta charset="utf-8">
        <title>ONLINE VEHICLE TOBA (OVLET)</title>
        <!-- Mobile Specific Meta -->
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
         <link rel="stylesheet" type="text/css" href="../plugin/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../asset/css/admin.css">

    </head>
    <body style="background-color: white">


        <header>
            <nav class="navbar bootsnav">
                <div class="input-group"></div>

                    <!-- Header Navigation -->
                    <div class="container-fluid">
                      <div class="cols">
                         <div class="col-xs-2" id="sideLeft">
                       </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href=""><img class="logo" src="../images/logokita.png" alt="" width="10px" height="40px"></a>
                    </div>
                       <!-- Navigation -->
                      <div class="collapse navbar-collapse" id="navbar-menu" >
                        <div class="cols">
                        <ul class="nav navbar-nav menu">
                            <li><a href="driver.php">Home</a></li>  
                            <li><a href="login_driver.php">Login</a></li>
                            </ul>
                    </div>
                </div>   
              </div>
            </nav>
        </header>
    <div class="col-xs-2" id="sideLeft">
      <h4><strong>Driver</strong></h4>
        <ul class="nav nav-pills nav-stacked" id="data">
          
        <li><a href="daftar_pelanggan.php">Pelanggan</a>
        </i></span></li>
        <li><a href="daftar_jemputan.php">Daftar Jemputan</a></li>
       <!--   <li><a href="daftar_rental.php">Daftar Rental</a></li> -->
      </ul>
    </div>
</div>
</div>
 <div class="col-xs-10">
      <div class="tab-content">
        <div class="col-xs-11 col-offset-xs-1">
          <br>
                <h3 class="table-title"><strong>Daftar Jemputan</strong></h3>  
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th class="idPemesanan ">ID Pemesanan</th>
                      <th class="nama">Nama Pemesan</th>
                      <th class="telp">Telp. Pemesan</th>
                      <th class="lokasi_awal ">Tanggal</th>
                      <th class="tujuan ">Tujuan (Tarif)</th>
                      <th class="alamat_penjemputan">Alamat Penjemputan</th>
                       <th class="tanggal ">Tanggal</th>
                         <th class="Opsi ">Opsi</th>

                    </tr>
                  </thead>
                  <tbody>
       <?php 
                      $conn = mysqli_connect('localhost', 'root', '', 'pkm');
                       $queryPemesanan = mysqli_query($conn, "SELECT * FROM pemesanan JOIN user on pemesanan.user_id = user.id JOIN tujuan on pemesanan.id_tujuan=tujuan.id_tujuan");
                      while($arrayPemesanan = mysqli_fetch_array($queryPemesanan)){
                       
                       echo '
                           <tr>
                             <td class="idPemesanan ">'.$arrayPemesanan['idPemesanan'].'</td>
                             <td class="nama">'.$arrayPemesanan['username'].'</td>
                             <td class="telp">'.$arrayPemesanan['telepon'].'</td>
                             <td class="tanggal ">'.$arrayPemesanan['tanggal'].'</td>                             
                             <td class="tujuan ">'.$arrayPemesanan['tujuan'].'</td>                             
                             <td class="tujuan ">'.$arrayPemesanan['alamat_penjemputan'].'</td>
                               <td class="status">'.$arrayPemesanan['status'].'</td>

                            <td class="opsi"><a href="confirm.php?idPemesanan='.$arrayPemesanan['idPemesanan'].'">
                               <button type="button" class="btn btn-info">Confirm</button>
                                  
                           </tr>
                         ';

                       }

                     ?>

			
                  </tbody>   
                     </table>   
    </header>
               
</div>
</div>
</div>
</nav>
</body>
</html>