<?php
include 'config.php';
?>
<!DOCTYPE html>
 
<html lang="en">
 
<head>

  <link rel="stylesheet" href="css/admin.css"/>
 
</head>
 <body style="background: grey">
 <center>
       <form method="post" action="login_proses_driver.php">
 
   <div class="form">
        <div class="main">
        <div class="gambar" style="background-image: 'img/driver.png'">
        <h1 >OVLET - Driver</h2>
      <form method="POST">
        
            <label>Username </label>
            <input size="30" class="login_regis" id="name" name="username" placeholder="Masukan username admin" type="text">
          <br>
          <br>

            <label>Password </label>
            <input size="30" class="login_regis" id="password" name="password" placeholder="Masukan password admin" type="password">
            <br>
 
        <input type="submit" name="loginadmin" id="submit" value="Login">
            <p><a href="../index.php" class="back">Kembali ke beranda</a></p> 
 
       </form>
     </div>
 
       <div class="text-center">
 
         
 </div>
</div>
</div>
 </center>
 
</body> 
</html>

