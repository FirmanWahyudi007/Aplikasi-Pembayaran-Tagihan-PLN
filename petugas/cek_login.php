<?php

session_start();
if (isset($_SESSION['username'])) {
	# code...
	header('location:../petugas');
}else{
	require_once("../config/koneksi.php");

	$username = $_POST['username'];
	$password = $_POST['password'];

	$data = mysqli_query($koneksi,"SELECT p.nama , p.username , p.password , l.level 
		FROM tb_petugas p JOIN tb_level l ON p.id_level = l.id_level 
		WHERE username='$username' && password='$password'");

	if (mysqli_num_rows($data)>0) {
        # code...
        $row_akun = mysqli_fetch_array($data);
        $_SESSION["level"] = $row_akun["level"];
        $_SESSION["nama"] = $row_akun["nama"];
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:../petugas/");
	}else{
		header("location:pesan.php?pesan=gagal");
	}

}

?>