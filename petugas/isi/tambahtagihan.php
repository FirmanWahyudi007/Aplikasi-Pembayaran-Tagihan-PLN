<?php 
	include '../config/koneksi.php';
	$tmb_tag = mysqli_query($koneksi,"SELECT * FROM tb_pelanggan");
	
 ?>
<form action="" method="post">
	<div class="form-group row">
        <label class="col-12" for="id_tagihan">ID Tagihan</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="id_tagihan">
        </div>
    </div>
	<div class="form-group row">
        <label class="col-12" for="id_pelanggan">ID Pelanggan</label>
        <div class="col-md-6">
           <select class="form-control" id="id_pelanggan" onchange="document.getElementById('nama').value = datapel[this.value]">
           	<option>Silahkan pilih...</option>
           	<?php 
				while ($data = mysqli_fetch_array($tmb_tag)) {
           	 ?>
           	<option><?php echo $data['id_pelanggan']; ?></option>
           	<?php $jsArray .= "datapel['" . $data['id_pelanggan'] . "'] = '" . addslashes($data['nama']) . "';";  ?>
           	<?php } ?>
           </select>
       	</div>
    </div>
    <div class="form-group row">
        <label class="col-12" for="id_tagihan">Nama</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="nama" id="nama" readonly="readonly">
            <script type="text/javascript">  
			<?php echo $jsArray; ?> 
			</script>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-12">
            <button type="submit" class="btn btn-alt-primary">Submit</button>
        </div>
    </div>
</form>
	</div>
</div>