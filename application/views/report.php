<!DOCTYPE html>
<html>
<head>
	<title>report</title>
</head>
<body>
	<form method="POST" action="" enctype="multipart/form-data">
	<br>
	<div class="container">
		<table class="table" border="1px">
			<thead>
				<tr>
					<th>No.</th>
					<th>Nama Pelanggan</th>
					<th>Alamat</th>
					<th>Nomor Telepon</th>
					<th>Tanggal Masuk</th>
					<th>Tangal Keluar</th>
					<th>Paket</th>
					<th>Jenis</th>
				</tr>
			</thead>
			<?php 
				if ($offset == "") { 
					$no = 0; }
				else {
					$no = $offset;
				}
				foreach ($query as $key)
			{
				$no++;
			?>
		 	<tbody>
				<tr>
					<td><?php echo $no ?></td>
					<td><?php echo $p->nama_pelanggan ?></td>
					<td><?php echo $p->alamat_pelanggan ?></td>
					<td><?php echo $p->no_telp_pelanggan ?></td>
					<td><?php echo $p->tanggal_masuk ?></td>
					<td><?php echo $p->tanggal_selesai ?></td>
					<td><?php echo $p->paket ?></td>
					<td><?php echo $p->jenis ?></td>
				</tr>
			</tbody>
			<?php
				}
			if($query==NULL){
			?>
			<tr>
				<td colspan="8"> <center>No Data is available</center> </td>
				<td> <?php echo $id; ?> </td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>
	</div>
	<?php } ?>
</form>
</body>
</html>