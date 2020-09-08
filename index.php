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
<body>
<!--- /top-header ---->


        <!-- Preloader -->



        <!--End off Preloader -->

        <!-- Header -->
        <?php include('header.php'); ?>


        <center>
        <section id="home" class="home">
            <!-- Carousel -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <!-- Carousel-inner -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/slider_img.jpg" alt="Construction" style="width:1600px; height:600px">
                        <div class="overlay">
                            <div class="carousel-caption">
                                <h3>Perjalanan Terjamin</h3>
                                <h2>Diantar Sampai tempat tujuan</h2>
                                <h2 class="second_heading">Hanya di OVLET</h2>
                                <a  href="jemput1.php" class="btn know_btn">Booking Driver</a>
                            </div>					
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/slider_img2.jpg" alt="Construction" style="width:1600px; height:600px">
                        <div class="overlay">
                            <div class="carousel-caption">
                                <h3>Anda tidak memiliki kendaraan?</h3>
                                <h2>Gak usah repot-repot</h2>
                                <h2 class="second_heading">Booking aja mobil nya hanya disini</h2>
                                <a  href="rental.php" class="btn know_btn">Rental Mobil</a>
                            </div>					
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/slider_img3.jpg" alt="Construction" style="width:1600px; height:600px">
                        <div class="overlay">
                            <div class="carousel-caption">
                                <h3>Mau diantar kemana?</h3>
                                <h2>Tersedia angkot dan mobil</h2>
                                <h2 class="second_heading">yang dapat menjemput anda</h2>
                                <a  href="jemput1.php" class="btn know_btn">Booking Sekarang</a>
                            </div>					
                        </div>
                    </div>
                </div><!-- Carousel-inner end -->



                <!-- Controls -->
                <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div><!-- Carousel end-->

        </section>
    </center>

        <!-- Services -->
        <section id="services">
            <div class="container">
                <center><h2>Layanan Kami</h2></center>
                <div class="row">
                    <div class="col-md-6">
                        <center>                            
                        <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
                        <div class="service_item">
                            <img class="img-circle img-responsive" src="images/airport.png" style= "width:500px; height:300px"/>
                            <h3>Rental Mobil</h3>
                            <a href="rental.php" class="btn know_btn">Rental Sekarang</a>
                        </div>
                    </div>
                        </center>
                    </div>
                    <!-- <div class="col-md-4">
                        <center>
                        <div class="service_item">
                            <img class="img-circle img-responsive" src="images/2 (2).png" style= "width:500px; height:300px" />
                            <h3>Airport - Tempat Tujuan</h3>
                            <a href="silangit.html" class="btn know_btn">Booking Driver</a>
                        </div>
                    </center>
                    </div> -->
                    <div class="col-md-6">
                        <center>
                        <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
                        <div class="service_item" >
                            <img class="img-circle img-responsive" src="images/3(1).jpg" style= "width:500px; height:300px"/>
                            <h3>Jemput Saya</h3>
                            <a href="jemput1.php" class="btn know_btn">Booking Driver</a>
                        </div>
                    </div>
                    </center>
                    </div>
                </div>
            </div>
            
        </section><!-- Services end -->

        <!-- Footer -->
        <?php include('konten.php'); ?>
        
        
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
</div>


<!---footer ---->
                <?php include('footer.php'); ?>

<!--- /footer ---->
<!-- login -->
			     <?php include('login.php') ?>
<!-- //login -->
<!-- signin -->
		          <?php include('daftaruser.php') ?>
<!-- //signin -->

<!-- write us -->
<!-- //write us -->
</body>
</html>