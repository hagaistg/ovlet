<?php
include 'koneksi.php';
 $queryPemesanan = mysqli_query($conn, "SELECT * FROM pemesanan ORDER BY idPemesanan ASC");
$idPemesanan=$_GET['idPemesanan'];
$status = 'Confirmed';
mysqli_query($conn,"UPDATE pemesanan SET status= 'Confirmed'WHERE idPemesanan='$idPemesanan'")or die(mysqli_error($queryPemesanan));

echo'
<script>
alert("Sudah berhasil dikonfirmasi")
location="daftar_jemputan.php";
</script>'
;
?>
