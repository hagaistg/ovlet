<!DOCTYPE html>

<html>
<head>
<title>Penginputan Data Pesawat</title>
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

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
     <link rel="stylesheet" href="custom-font/fonts.css" />
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- Bootsnav -->
        <link rel="stylesheet" href="css/bootsnav.css">

        <link rel="stylesheet" href="css/custom.css" />

         <link rel="stylesheet" href="custom-font/fonts.css" />

</head>
<body style="background-color: white">
    <br>
  <header>
    <div class="top-header navbar navbar-fixed-top">
    <div class="container">
        <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
            <li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>  
        </ul>
        <?php
        session_start();
        if(empty($_SESSION['namamember'])){
        ?>
        <script type="text/javascript">
        function validasi_input(form){
        if (form.username.value == "" && form.password.value== ""){
        alert("Username atau password masih kosong!");
        form.username.focus();
        return (false);
        }
        return (true);
        }
        </script>
        <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">                
            <li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Daftar</a></li> 
            <li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" >/ Masuk</a></li>
        </ul>
        <?php
        }else{
        ?>
        <?php
        ?>
<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">                
            <li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Halo <?php echo"$_SESSION[nama]";?></a></li> 
            <li class="sigi"><a href="logout.php">/ Keluar</a></li>
        </ul>
        <?php
        }
        ?>
        <div class="clearfix"></div>
    </div>
</div>

    <nav class="navbar bootsnav">
                <!-- Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <!-- Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div>
                    <!-- Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href=""><img class="logo" src="images/logokita.png" alt="" width="10px" height="40px"></a>
                    </div>
                    <!-- Navigation -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav menu">
                            <li><a href="home.php">Home</a></li>                    
                            <li><a href="layanan.php">Layanan Kami</a></li>
                            <li><a href="index.php">Logout</a></li>
                            
                            </ul>

                    </div>
                </div>   
            </nav><!-- Navbar end -->
  </header>
<form class="bg-info" action="airport.php" method="post" name="airport" id="pesan">
<table width="600" border="0" align="center" cellpadding="0" cellspacing="80">
<div class="f-center"><h3>Airport Sampai Tujuan</h3></div>
 <td class="td-title">Asal</td>
      <td>:</td>
 <td><select class="form-control" name="origin" id="origin">
  <div id="font">
        <option id="opt"
        < value="Silangit">Silangit
<tr>
      <td class="td-title">Tujuan</td>
      <td>:</td>
      <td><select class="form-control" name="destination" id="destination">
        <option id="opt">
        <option value="Sibolga">Sibolga</option>
        <option value="Balige">Balige</option>
        <option value="Laguboti">Laguboti</option>
        <option value="Sitoluama">Sitoluama</option>
        <option value="Parapat">Parapat</option>
        </option>
      </select></td>
</tr>
<tr>
      <td class="td-title" style="padding-top:0px;">Type Penjemputan</td>
      <td></td>
      <td>
        <p>
          <label>
            <input type="radio" name="jenis_pemesanan" value="reguler" id="jenis_tiket">Private</label>
         
          <label>
            <input type="radio" name="jenis_pemesanan" value="promosi" id="jenis_tiket">Public</label>
          <br>
        </p>
      </td>
</tr>
</table>
<div class="submit">
<a href="airport.php">Pesan</a>
</div>
</form>
</option>
</div>
</select>
</td>
</table>
</form>

<br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                            <section>
                                <div class="modal-body modal-spa">
                                    <div class="login-grids">
                                        <div class="login">
                                            <div class="login-right">
                                                <form action="prosesdaftar.php" method="post">
                                                    <center><h3>Buat akun Anda </h3></center>
                                                    <div class="imgcontainer">
                                                        <img src="img/regist.jpg" alt="Avatar" class="avatar">
                                                    </div>
                                                    <input type="text" name="nama" placeholder="Masukan Nama lengkap anda">
                                                    <input type="text" name="username" placeholder="Masukan Username anda">
                                                    <input type="text" name="alamat" placeholder="Masukan Alamat anda">
                                                    <input type="text" name="telepon" placeholder="Masukan Telepon anda">
                                                    <input type="password" name="password" placeholder="Masukan Password anda"> 
                                                    <input type="submit" name="daftar" value="CREATE ACCOUNT">
                                                </form>
                                            </div>
                                                <div class="clearfix"></div>                                
                                        </div>
                                        </div>
                                </div>
                            </section>
                    </div>
                </div>
            </div>
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>                      
                        </div>
                        <div class="modal-body modal-spa">
                            <div class="login-grids">
                                <div class="login">
                                    <div class="login-right">
                                        <form action="prosesdaftar.php" method="post" onsubmit="return validasi_input(this)">
                                            <h3 ><center>Masuk Dengan Akun Anda</center></h3>
                                            <div class="imgcontainer">
                                                <img src="img/user.png" alt="Avatar" class="avatar">
                                              </div>

                                            <label><b>Username</b></label>
                                            <input type="text" placeholder="Enter Username" name="username">

                                            <label><b>Password</b></label>
                                            <input type="password" placeholder="Enter Password" name="password" required>
                                            <button type="submit" value="SIGNIN" name="masuk">Masuk</button>
                                            <input type="checkbox" checked="checked"><span>Ingat Saya</span>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>                                
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer bottom -->
            <div class="footer_bottom text-center">
                <p class="wow fadeInRight">
                   <!-- Made with 
                    <i class="fa fa-heart"></i>-->
                    by 
                    <a target="_blank" href="http://bootstrapthemes.co">Institut Teknologi Del</a> 
                    2018. All Rights Reserved
                </p>
            </div><!-- Footer bottom end -->
        </footer><!-- Footer end -->

        <!-- JavaScript -->
        <script src="js/jquery-1.12.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- Bootsnav js -->
        <script src="js/bootsnav.js"></script>

        <!-- JS Implementing Plugins -->
        <script src="js/isotope.js"></script>
        <script src="js/isotope-active.js"></script>
        <script src="js/jquery.fancybox.js?v=2.1.5"></script>

        <script src="js/jquery.scrollUp.min.js"></script>

        <script src="js/main.js"></script>
    </body> 
</html> 