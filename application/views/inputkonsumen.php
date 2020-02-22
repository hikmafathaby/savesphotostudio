<!DOCTYPE html>
<html>
<head>
	<title>data konsumen</title>
</head>
<body bgcolor="pink">
	<!-- <button type="button"><img src=""></button> -->
  <div class="container">
	<!-- <h2 style="text-align: center;">SAVE'S PHOTO STUDIO</h2>
	<h6 style="text-align: center;">Save Your Fondest Moment</h6> -->
	<br>

	<form action="<?php echo base_url().'index.php/Web/actiondata'; ?>" method="post">
	<hr style="width: 90%; height: 1px; background-color: black">
		<table width="25%">
			<tr>
				<td> Id Pelanggan </td>
				<td> <input type="text" name="id_pelanggan"></td>
			</tr>
			<tr>
				<td> Konsumen </td>
				<td> <input type="text" name="nama_pelanggan"></td>
			</tr>
			<tr>
				<td> Alamat </td>
				<td> <textarea name="alamat_pelanggan" cols="20px" rows="3"></textarea></td>
			</tr>
			<tr>
				<td> Telp./HP </td>
				<td> <input type="number" name="no_telp_pelanggan" maxlength="12"></td>
			</tr>
			<tr>
				<td> Tanggal Masuk </td>
				<td> <input type="date" name="tanggal_masuk"></td>
			</tr>
			<tr>
				<td> Tanggal Selesai </td>
				<td> <input type="date" name="tanggal_selesai"></td>
			</tr>
			<tr>
				<td> Jam foto </td>
				<td> <input type="time" name="jam_foto"></td>
			</tr>
			<tr>
				<td> Paket : </td>
				<td>
					<select name="paket">
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
				<td> Jenis : </td>
				<td> <select name="jenis">
					<option selected="selected" value="none">(Pilih Jenis)</option>
					<option value="SEXTRA">EXTRA</option>
					<option value="SMEDIUM">MEDIUM</option>
					<option value="SSIMPLE">SIMPLE</option>
				</select></td>
			</tr>
			<tr>
				<td><input type="submit" value="Submit"></td>
			</tr>			
		</table>
	</form>	
	<br>
		<br>
		<hr width="30%">
		<p style="text-align: center;"><b>-TERIMA KASIH </b>atas kunjungan Anda-<br>
		Kami tunggu kedatangan Anda kembali</p>
		<hr width="30%">
		<br>
		<br>

</div>
</body>
</html> 