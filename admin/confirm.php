<?php
 
  $conn = mysqli_connect('localhost', 'root', '', 'pkm');

$r = mysqli_query($conn, "SELECT * FROM pemesanan ORDER BY id ASC");
$id=$_GET['id'];
$status = '0';
mysqli_query($conn,"UPDATE reservasi SET status = 'Confirmed' WHERE id='$id'")or die(mysqli_error($r));

echo'
<script>
alert("Sudah berhasil dikonfirmasi")
window.location = "awal.php?daftarpesanan"
</script>'
;
?>
