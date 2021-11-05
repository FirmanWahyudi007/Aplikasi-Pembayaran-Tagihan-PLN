<?php
	if (isset($_POST['tambah'])) {
		# code...
		include '../config/koneksi.php';

		$id = $_POST['id'];
		$level = "2";
		$username = $_POST['username'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$alamat = $_POST['alamat'];
		$daya = $_POST['daya'];

		$input = mysqli_query($koneksi,"INSERT INTO tb_pelanggan VALUES('$id','$level','$username','$email','$nama','$password','$alamat','$daya')") or die(mysqli_error());
		if ($input) {
			# code...
			echo "<script>alert('Data sudah di input');window.location='index.php?page=listpelanggan'</script>";
		}else{
			echo "Data gagal di input ";
			echo "<a href ='index.php?page=tambahpelanggan'>kembali</a>";
		}
		
	}
?>
<div class="block">
	<div class="block-header block-header-default">
		<div class="block-title">Tambah Pelanggan</div>
	</div>
	<div class="block-content">
<form action="" method="post">
	<div class="form-group row">
		<div class="col-md-6">
			<div class="form-material floating">
				<input type="text" class="form-control" name="id">
				<label for="id">ID</label>
			</div>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-6">
			<div class="form-material floating">
				<input type="text" class="form-control" name="username">
				<label for="username">Username</label>
			</div>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-6">
			<div class="form-material floating">
				<input type="text" class="form-control" name="nama">
				<label for="nama">Nama</label>
			</div>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-6">
			<div class="form-material floating">
				<input type="email" class="form-control" name="email">
				<label for="email">Email</label>
			</div>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-6">
			<div class="form-material floating">
				<input type="password" class="form-control" name="password">
				<label for="password">Password</label>
			</div>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-6">
			<div class="form-material floating">
				<input type="text" class="form-control" name="alamat">
				<label for="alamat">Alamat</label>
			</div>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-6">
			<div class="form-material floating">
				<input type="number" class="form-control" name="daya">
				<label for="daya">Daya</label>
			</div>
		</div>
	</div>
	<div class="form-group row">
        <div class="col-md-9">
            <button type="submit" name="tambah" value="tambah" class="btn btn-alt-primary">Submit</button>
    	</div>
    </div>

</form>
	</div>
</div>