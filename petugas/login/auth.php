<?php 
session_start();
if($_SESSION['status']!="login"){
	header("location:pesan.php?pesan=belum_login");
}elseif ($_SESSION['level']!="admin") {
	# code...
	header("location:pesan.php?pesan=akses_gagal");
}
?>