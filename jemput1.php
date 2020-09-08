
<?php 
include 'admin/proses.php';
$do = new ClassMobil();
?>
<?php 
$koneksi =  new mysqli("localhost","root","","pkm");
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
    <script type="text/javascript">
    function submitForm(action){
        var form = document.getElementById('form1');
        form.action=action;
        form.submit();
    }
</script>

        <?php include('header.php'); ?>
<div class="body">
        <!-- Services -->
        <section id="services">
            <div class="container">
                <h2>Jemput Saya</h2>
                <div class="row">
                    <div class="col-md-6">

                    <table class="table table-bordered table-striped table-hover" width='200%' border=1>
                    <form id="form1" name="form1" method="post" onsubmit="" onreset="" action="jarak.php">
                    <div class="form-group">
                    <label for="origin">Tujuan Berangkat</label>
                        
                    </div>
                    <select class="form-control" name="tujuan">
                                <option value="">Pilih Lokasi awal - Lokasi Tujuan (Tarif)</option>
                                <?php 
                                    $ambil=$koneksi->query("SELECT * FROM tujuan");
                                    while ($perongkir = $ambil->fetch_assoc()) {
                                ?>
                                <option value="<?php echo $perongkir["id_tujuan"]?>">
                                    <?php echo $perongkir['tujuan']?>
                                </option>
                                <?php } ?>
                    </select>
                    <br>
                    <div class="form-group">
                        <label for="alamat_penjemputan">Masukkan Lokasi Penjemputan Driver</label><br>
                        <input type="text" class="form-control" placeholder="Cth : Jl. Setapak no 30 " name="alamat_penjemputan">
                    </div>

                    <input type="button" class="btn btn-success" onclick="submitForm('jemput_proses.php')" value="Request"/>
                        </form>
                    </div>

                    
                </table>
            </div>
            <div class="col-md-6">
                <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
                    <img class="img img-rounded" src="img/angkot.png">
                </div>
            </div>
                    
            </div>

            </div>

</section>
<br>
<br>
<br>
<div class="container">
<section class="box" style="background-color:#f8f8f8;">
    <br>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wow fadeIn" data-wow-offset="0" data-wow-delay="0.8s">
                            <center><i><h4>Mengapa Menggunakan layanan Jemput Saya?</h4></i></center>
                            <br>
                             1. *Layanan ini menyediakan tarif harga yang umum, sehingga masyarakat terhindar dari penipuan.<br>
                             2. *Dengan memilih lokasi awal dan lokasi tujuan anda akan dijemput driver.<br>
                             3. *Fasilitas yang disediakan dalam layanan ini adalah angkutan umum.
                            
                        </div>
                        <hr>
                    </div>
                    
                </div>
            </div>
        </section>
    </div>

<br>
<br>
<br>
<br>

<?php 
        include('footer.php');

        ?>
</div>



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

<?php include('login.php') ?>
<!-- //sign -->
<!-- signin -->
                  <?php include('daftaruser.php') ?>
<!-- //signin -->

</html>