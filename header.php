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
        
    </div>
</div>
<!--- /top-header --

        <!--End off Preloader -->
<br>

        <!-- Header -->
        <header>
            <!-- Navbar -->
            <nav class="navbar bootsnav" >
                <!-- Top Search -->
                <!-- <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div> -->

                <div class="container">
                    <!-- Atribute Navigation -->
                    <div class="attr-nav">
                        <!-- <ul>
                            <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        </ul> -->
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
                            <li><a href="index.php">Home</a></li>                    
                            <li><a href="layanan.php">Layanan Kami</a></li>
                            <li><a href="riwayatpemesanan.php">Riwayat Pemesanan</a></li>
                            </ul>
                    </div>
                </div>   
            </nav><!-- Navbar end -->
        </header><!-- Header end -->
