<?php
	include '../config/koneksi.php';
	$query = "SELECT p.nama,p.daya,t.id_tagihan,b.total_bayar,b.via,b.no_rek 
		FROM tb_pelanggan p JOIN  tb_tagihan t ON p.id_pelanggan = t.id_pelanggan 
		JOIN tb_pembayaran b ON t.id_tagihan = b.id_tagihan ORDER BY nama ASC";
?>
<div class="block">
	<div class="block-header block-header-default">
		<div class="block-title">List Pembayaran</div>
	</div>
	<div class="block-content">
		<table class="table table-bordered table-vcenter">
	<thead>
		<tr>
			<th>NO</th>
			<th>ID TAGIHAN</th>
			<th>NAMA</th>
			<th>DAYA</th>
			<th>VIA</th>
			<th>NO REK</th>
			<th>TOTAL</th>
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
					echo "<tr>";
					echo "<td>".$no."</td>";
					echo "<td>",$all['id_tagihan']."</td>";
					echo "<td>",$all['nama']."</td>";
					echo "<td>",$all['daya']."</td>";
					echo "<td>",$all['via']."</td>";
					echo "<td>",$all['no_rek']."</td>";
					echo "<td>",$all['total_bayar']."</td>";
					echo "</tr>";

					$no++;
				}
			}
		 ?>
	</tbody>
</table>
	</div>
</div>