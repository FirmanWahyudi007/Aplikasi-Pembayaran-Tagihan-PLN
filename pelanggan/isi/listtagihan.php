<?php 
	include '../config/koneksi.php';
	$query = "SELECT p.nama,t.tgl_tagihan,t.id_tagihan,t.tagihan,t.status 
		FROM tb_pelanggan p JOIN  tb_tagihan t ON p.id_pelanggan = t.id_pelanggan 
		WHERE username = '$user'";
?>
<div class="block">
	<div class="block-header block-header-default">
		<div class="block-title">List Tagihan</div>
	</div>
	<div class="block-content">
		<table class="table table-bordered table-vcenter">
			<thead>
				<tr>
					<th>NO</th>
					<th>TGL TAGIHAN</th>
					<th>TAGIHAN</th>
					<th>STATUS</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$ress= mysqli_query($koneksi,$query);
					if (mysqli_num_rows($ress)>0) {
						# code...
						$no = 1;
						while ($all = mysqli_fetch_assoc($ress)) {
							# code...
							$id = $all['id_tagihan'];
							echo "<tr>";
							echo "<td>".$no."</td>";
							echo "<td>".$all['tgl_tagihan']."</td>";
							echo "<td>".$all['tagihan']."</td>";
							if ($all['status']=='belum bayar') {
								# code...
								echo "<td><a href='pembayaran.php?id=".$id."'</a>"."bayar"."</td>";
							}else{

								echo "<td>",$all['status']."</td>";
							}
							echo "</tr>";

							$no++;
						}
					}
		 		?>
			</tbody>
		</table>
	</div>
</div>