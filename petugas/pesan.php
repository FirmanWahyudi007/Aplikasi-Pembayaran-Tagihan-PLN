<?php 
session_start();
    if (isset($_SESSION['username'])) {
        # code...
        header('location:../petugas/');
    }else{
    	if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "Login gagal! username dan password salah!"."<a href = 'login.php'>"." Login"."</a>";
			}else if($_GET['pesan'] == "logout"){
				echo "Anda telah berhasil logout"."<a href = 'login.php'>"." Login"."</a>";
			}else if($_GET['pesan'] == "belum_login"){
				echo "Anda harus login untuk mengakses halaman admin"."<a href = 'login.php'>"." Login"."</a>";
			}else if($_GET['pesan'] == "akses_gagal"){
				echo "Anda bukan admin silahkan kembali ke halaman awal";
			}
		}
	}
    require_once("../config/koneksi.php");
?>