<!DOCTYPE html>
<html>
<head>
	<title>Halaman Edit Obat</title>
</head>
<body>
	<h3>Halaman Edit Obat</h3>
	<?php echo form_open_multipart('home/fungsiEdit');?>
	<table>
		<label>ID</label><br>
        <input type="text" name="id" value="<?php echo $queryObtDetail->id ?>" readonly><br><br>
        <label>Email Admin</label><br>
        <input type="text" name="email" value="<?php echo $queryObtDetail->email ?>" readonly><br><br>
        <label>Password</label><br>
        <input type="password" name="password" value="<?php echo $queryObtDetail->password ?>" ><br><br>
        <label>Nama Obat</label><br>
        <input type="text" name="nama" value="<?php echo $queryObtDetail->nama ?>"><br><br>
        <label>Jenis Obat</label><br>
        <input type="radio" name="jenis" value="<?php echo $queryObtDetail->jenis ?>" value="Kapsul">Kapsul<input type="radio" name="jenis" value="Salep">Salep<br><br>
        <label>Deskripsi</label><br>
        <textarea id="deskripsi" name="deskripsi" value="<?php echo $queryObtDetail->deskripsi ?>"></textarea><br><br>
        <label>Penyimpanan</label><br>
        <input type="checkbox" name="penyimpanan" value="<?php echo $queryObtDetail->penyimpanan ?>" value="Rak 1">Rak 1<input type="checkbox" name="penyimpanan" value="Rak 2">Rak 2<br><br>
		<label>Penyuplai</label><br>
		<select name="penyuplai" value="<?php echo $queryObtDetail->penyuplai ?>"><option>Pilih</option>
		<option>RS AMINAH</option>
		<option>RS MARDI WALUYO</option></select><br><br>
		<label>Kadaluwarsa</label><br>
        <input type="date" name="tanggal" value="<?php echo $queryObtDetail->tanggal ?>"><br><br>
        <label>Upload Foto</label><br>
        <input type="file" name="foto" value="<?php echo $queryObtDetail->foto ?>"><br><br>
        <input type="submit" name="submit" class="btn btn-default">
			<script src="<?php echo base_url(); ?>ckeditor/ckeditor.js"></script>
			<script> 
			CKEDITOR.replace('deskripsi');
		</script>
				<?php echo form_close(); ?>
		</table>
		<?php echo form_close(); ?>
	</table>
	</form>
</body>
</html>