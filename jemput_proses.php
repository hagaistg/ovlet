<?php 
session_start();
$user_id = $_SESSION["userid"]; ?>
<?php 
$conn = mysqli_connect('localhost', 'root', '', 'pkm');
        
         $id_tujuan = $_POST['tujuan'];	
         $tanggal = date('Y-m-d');
         $status= 'On Progress';
         $alamat_penjemputan = $_POST['alamat_penjemputan'];
         
    
       
         if(empty($_SESSION["userid"])){
    echo '
      <script>
        alert("Request belum dilakukan, Login terlebih dahulu");
        window.location = "index.php"
      </script>
    ';
  }else{
      $query = mysqli_query($conn, "INSERT INTO pemesanan
          (user_id, id_tujuan, tanggal, status, alamat_penjemputan) VALUES ('$user_id','$id_tujuan', '$tanggal','$status','$alamat_penjemputan')");
      if($sql){
        echo"
        <script>
          alert('Tidak terkirim, coba ulangi !');
      
        </script>";
      }else{
        echo
     '<script>
        alert("Request sudah dikirim, Silahkan menunggu konfir dari admin");
        window.location = "riwayatpemesanan.php"
      </script>
    ';
  }

         }
?>