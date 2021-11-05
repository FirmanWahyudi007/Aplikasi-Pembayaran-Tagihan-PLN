<?php 
session_start();
    if (isset($_SESSION['login-username'])) {
        # code...
        header('location:../pelanggan/');
    }else{
    	if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "Login gagal! username dan password salah!"."<a href = 'login.php'>"." Login"."</a>";
			}else if($_GET['pesan'] == "logout"){
				echo "Anda telah berhasil logout"."<a href = 'login.php'>"." Login"."</a>";
			}else if($_GET['pesan'] == "belum_login"){
				echo "Anda harus login untuk mengakses halaman admin"."<a href = 'login.php'>"." Login"."</a>";
			}else if($_GET['pesan'] == "akses_gagal"){
				echo "Anda tidak bisa mengakses halaman ini";
			}
		}
    }
    require_once("../config/koneksi.php");
?>