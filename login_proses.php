<?php 


  $conn = mysqli_connect('localhost', 'root', '', 'ovlet');
  
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $query = mysqli_query($conn, " SELECT idpendaftaran FROM user WHERE username='$username' ");
  $count = mysqli_num_rows($query);
  if($count > 0){
    $queryId = mysqli_query($conn, "SELECT idpendaftaran FROM user WHERE username='$username' AND password = '$password' ");
    $numRow = mysqli_num_rows($queryId);
    if($numRow == 0){
      echo '
        <script>
          alert("Password Salah.");
          window.location = "login.php"
        </script>
      ';
    } else {
      $arrayId = mysqli_fetch_array($queryId);
      $_SESSION['idpendaftaran'] = $arrayId['idpendaftaran']; 
      if(isset($_SESSION['idpendaftaran'])){
        echo '
        <script>
          alert("Login Sukses, Nikmati Pelayanan Kami");
          window.location = "home.php"
        </script>
        ';
      }
    }
  } else {
    echo '
      <script>
        alert("Usename tidak terdaftar.");
        window.location = "login.php"
      </script>
    ';


  }