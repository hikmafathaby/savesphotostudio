<!DOCTYPE html>
<html>
<head>
	<title>strukpembayaran</title>
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
				<td> Konsumen </td>
				<td> <input type="text" name="custname"></td>
			</tr>
			<tr>
				<td> Alamat </td>
				<td> <textarea name="addy" cols="20px" rows="3"></textarea></td>
			</tr>
			<tr>
				<td> Telp./HP </td>
				<td> <input type="number" name="phone" maxlength="12"></td>
			</tr>
			<tr>
				<td> Tanggal Masuk </td>
				<td> <input type="date" name="start"></td>
			</tr>
			<tr>
				<td> Tanggal Selesai </td>
				<td> <input type="date" name="end"></td>
			</tr>
			<tr>
				<td> paket </td>
				<td> <textarea name="paket" cols="20px" rows="3"></textarea></td>
			</tr>
			<tr>
				<td> jenis </td>
				<td> <textarea name="jenis" cols="20px" rows="3"></textarea></td>
			</tr>
			<tr>
				<td ><input type = "Submit" value="Simpan"></td>
			</tr>

			
		</table>
	</form>	
	<br>

</div>
	

</body>
</html> 