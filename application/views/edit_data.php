<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>
	<center>
		<h2>Halaman Edit Data</h2>
	</center>
	<?php foreach ($data as $p) { ?>
	<form action="<?php echo base_url(). 'index.php/website/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td> Nama Pelanggan </td>
				<td>
					<input type="hidden" name="id_pesanan" value="<?php echo $p->id_pesanan; ?>">
					<input type="text" name="nama_pelanggan" value="<?php echo $p->nama_pelanggan; ?>">
				</td>
			</tr>
			<tr>
				<td> Alamat </td>
				<td>
					<input type="text" name="alamat_pelanggan" value="<?php echo $p->alamat_pelanggan; ?>">
				</td>
			</tr>
			<tr>
				<td> Telp./HP </td>
				<td>
					<input type="number" name="no_telp_pelanggan" value="<?php echo $p->no_telp_pelanggan; ?>">
				</td>
			</tr>
			<tr>
				<td> Tanggal Masuk </td>
				<td>
					<input type="date" name="tanggal_masuk" value="<?php echo $p->tanggal_masuk; ?>">
				</td>
			</tr>
			<tr>
				<td> Tanggal Selesai </td>
				<td>
					<input type="date" name="tanggal_selesai" value="<?php echo $p->tanggal_selesai; ?>">
				</td>
			</tr>
			<tr>
				<td> Paket </td>
				<td>
					<select name="paket" value="<?php echo $p->paket; ?>">
					<option selected="selected" value="none">(Pilih Paket)</option>
					<option value="SINGLE">SINGLE PHOTO</option>
					<option value="COUPLE">COUPLE PHOTO</option>
					<option value="GROUP">GROUP PHOTO</option>
					<option value="FAMILY">FAMILY PHOTO</option>
					<option value="GRADUATE">GRADUATE PHOTO</option>
					<option value="PINDOOR">PREWEDDING INDOOR</option>
					<option value="POUTDOOR">PREWEDDING OUTDOOR</option>
					<option value="PASPHOTO">PAS PHOTO</option>
				</select></td>
			</tr>
			<tr>
				<td> Jenis </td>
				<td> <select name="jenis" value="<?php echo $p->jenis; ?>">
					<option selected="selected" value="none">(Pilih Jenis)</option>
					<option value="SEXTRA">EXTRA</option>
					<option value="SMEDIUM">MEDIUM</option>
					<option value="SSIMPLE">SIMPLE</option>
				</select></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" value="Simpan">
				</td>
			</tr>
		</table>
	</form>

	<?php } ?>

</body>
</html>