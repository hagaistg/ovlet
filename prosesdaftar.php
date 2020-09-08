<?php 

include 'admin/proses.php';
$do = new ClassMobil();

if (isset($_POST['daftar'])) {
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$alamat = $_POST['alamat'];
	$Telepon = $_POST['telepon'];
	$password = $_POST['password'];
	
	$do->insertUser($nama,$username,$alamat,$Telepon,$password);
}

if (isset($_POST['masuk'])){
		$user = $_POST['username'];
		$pass = $_POST['password'];

		if($_POST['username']== $user && $_POST['password']== $pass){
		$do->selectUser($user,$pass);
}
}

 ?>