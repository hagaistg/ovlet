<?php 


  $conn = mysqli_connect('localhost', 'root', '', 'pkm');
  
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $query = mysqli_query($conn, " SELECT iddriver FROM driver WHERE username='$username' ");
  $count = mysqli_num_rows($query);
  if($count > 0){
    $queryId = mysqli_query($conn, "SELECT iddriver FROM driver WHERE username='$username' AND password = '$password' ");
    $numRow = mysqli_num_rows($queryId);
    if($numRow == 0){
      echo '
        <script>
          alert("Password Salah.");
          window.location = "login_driver.php"
        </script>
      ';
    } else {
      $arrayId = mysqli_fetch_array($queryId);
      $_SESSION['iddriver'] = $arrayId['iddriver']; 
      if(isset($_SESSION['iddriver'])){
        echo '
        <script>
          alert("Login Sukses, Nikmati Pelayanan Kami");
          window.location = "driver.php"
        </script>
        ';
      }
    }
  } else {
    echo '
      <script>
        alert("Username tidak terdaftar.");
        window.location = "login_driver.php"
      </script>
    ';


  }