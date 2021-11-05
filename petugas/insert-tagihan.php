<?php 
	include '../config/koneksi.php';

	$id_tagihan = $_POST['id_tagihan'];
	$idpelanggan = $_POST['id_pelanggan'];
	$tgl = $_POST['tanggal'];
	$tagihan = $_POST['tagihan'];
	$status = "belum bayar";

	$input = mysqli_query($koneksi,"INSERT INTO tb_tagihan VALUES('$id_tagihan','$idpelanggan','$tgl','$tagihan','$status')");
		if ($input) {
			# code...
			echo "<script>alert('Data sudah di input');window.location='index.php?page=listpelanggan'</script>";
		}else{
			echo "Data gagal di input ";
			echo "<a href ='index.php?page=listpelanggan'>kembali</a>";
		}
 ?>