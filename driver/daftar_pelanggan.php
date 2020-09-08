<!DOCTYPE html>
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
            </nav>
        </header>
    <div class="col-xs-2" id="sideLeft">
      <h4><strong>Driver</strong></h4>
        <ul class="nav nav-pills nav-stacked" id="data">
      <li><a href="daftar_pelanggan.php">Pelanggan</a></li>
        <li><a href="daftar_jemputan.php">Daftar Jemputan</a></li>
     <!--     <li><a href="daftar_rental.php">Daftar Rental</a></li> -->
      </ul>
    </div>
</div>
</div>
<div class="col-xs-10">
      <div class="tab-content">

        <!-- tabel pelanggan -->
        <div id="pelanggan" class="tab-pane fade in active">
          <div class="row">
            <div class="col-xs-11 col-offset-xs-1">
                <h3 class="table-title"><strong>Daftar Pelanggan</strong></h3>  
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th class="idpendaftaran ">ID User</th>
                      <th class="nama_lengkap ">Nama Lengkap</th>
                      <th class="username ">Username</th>
                       <th class="no_telepon">Nomor Telepon</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $conn = mysqli_connect('localhost', 'root', '', 'pkm');
                      $queryUser = mysqli_query($conn, "SELECT * FROM user ORDER BY id ASC");
                      while($arrayUser = mysqli_fetch_array($queryUser)){
                        echo '
                          <tr>
                            <td class="idpendaftaran ">'.$arrayUser['id'].'</td>
                            <td class="nama_lengkap ">'.$arrayUser['nama_lengkap'].'</td>
                            <td class="username ">'.$arrayUser['username'].'</td>
                            <td class="no_telepon text-justify">'.$arrayUser['telepon'].'</td>
                          </tr>
                        ';
                      }

                     ?>   
                  </tbody>
              </table>
          </div>
      </div>
  </div>
