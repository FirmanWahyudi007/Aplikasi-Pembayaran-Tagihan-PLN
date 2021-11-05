<?php 
	include '../config/koneksi.php';
	$data = mysqli_query($koneksi,"SELECT * FROM tb_pelanggan ORDER BY nama ASC");
?>
<div class="block">
	<div class="block-header block-header-default">
		<div class="block-title">List Pelanggan</div>
	</div>
	<div class="block-content">
		<table class="table table-bordered table-vcenter">
			<thead>
				<tr>
					<th>NO</th>
					<th>NAMA</th>
					<th>EMAIL</th>
					<th>ALAMAT</th>
					<th>DAYA</th>
					<th>AKSI</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					if (mysqli_num_rows($data)>0) {
						# code...
						$no = 1;
						while ($all = mysqli_fetch_array($data)) {
							# code...
							echo "<tr>";
							$id = $all['id_pelanggan'];
							echo "<td>".$no."</td>";
							echo "<td>".$all['nama']."</td>";
							echo "<td>".$all['email']."</td>";
							echo "<td>".$all['alamat']."</td>";
							echo "<td>".$all['daya']."</td>";
							echo "<td><a href ='tagihan.php?id=".$id."'<button class='btn btn-rounded btn-alt-primary min-width-125'>"."Tambah Tagihan"."</button>"."</a>"."</td>";
							echo "</tr>";

							$no++;
						}
					}
		 		?>
			</tbody>
		</table>
	</div>
</div>