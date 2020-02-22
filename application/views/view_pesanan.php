<!DOCTYPE html>
<html>
<head>
	<title>view_pesanan</title>
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
					<th>Aksi</th>
				</tr>
			</thead>
			<?php 
				$no = 1;
				foreach ($pesanan as $p) {
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
					<td>
						<?php echo anchor('website/edit/'.$p->id_pesanan,'Edit'); ?>
						<?php echo anchor('website/delete/'.$p->id_pesanan,'Delete'); ?>
					</td>
				</tr>
			</tbody>
			<?php
				$no++; }
			?>
		</table>
	</div>
	
</form>
</body>
</html>