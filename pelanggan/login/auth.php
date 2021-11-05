<?php 
session_start();
if($_SESSION['status']!="login"){
	header("location:pesan.php?pesan=belum_login");
}elseif ($_SESSION['level']!="pelanggan") {
	# code...
	header("location:pesan.php?pesan=akses_gagal");
}
?>