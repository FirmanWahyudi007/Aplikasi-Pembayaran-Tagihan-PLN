<?php 
	include '../config/koneksi.php';

	$id = $_POST['id_tagihan'];
	$tgl_pembayaran = date('Y-m-d');
	$tgh = filter_input(INPUT_POST, 'tagihan',FILTER_SANITIZE_STRING);
	$via = filter_input(INPUT_POST, 'via',FILTER_SANITIZE_STRING);
	$norek = $_POST['norek'];
	$adminis = "2500";
	$total = $tgh + $adminis;

	$query = mysqli_query($koneksi,"INSERT INTO tb_pembayaran VALUES('','$id','$adminis','$tgl_pembayaran','$total','$via','$norek')");

	if ($query) {
		# code...
		echo "<script>alert('Data sudah di input');window.location='index.php?page=listtagihan'</script>";
				mysqli_query($koneksi,"UPDATE tb_tagihan SET status = 'dibayar' WHERE id_tagihan = $id");
	}else{
			echo "Data gagal di input ";
	}
 ?>