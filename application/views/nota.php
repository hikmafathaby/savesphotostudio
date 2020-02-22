<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Heroic Features - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo config_item('base_url');?>assetsweb/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo config_item('base_url');?>assetsweb/css/heroic-features.css" rel="stylesheet">
	<title></title>
</head>
<body>
	<center>
	<fieldset style="width: 90%">
	<table border="1px" style="width: 100%">
	<tr>
		<td width="150px">Konsumen</td>
		<td width="200px"><?php echo $detail_pesanan['nama_pelanggan']; ?></td>
		<td rowspan="5" width="210px">Save Your Fondest Moment</td>
		<td rowspan="5" width="210px"><img width="210px" src="<?php echo config_item('base_url'); ?>assets/saa1.jpeg"></td>
		<td>-</td>
		<td rowspan="5" width=150px></td>
	</tr>
	<tr>
		<td width="150px">Alamat</td>
		<td width="200px"><?php echo $detail_pesanan['alamat_pelanggan']; ?></td>
		<td></td>
	</tr>
	<tr>
		<td>Telp/hp</td>
		<td><?php echo $detail_pesanan['no_telp_pelanggan']; ?></td>
		<td></td>
	</tr>
	<tr>
		<td>Msuk Order</td>
		<td><?php echo $detail_pesanan['tanggal_masuk']; ?></td>
		<td></td>
	</tr>
	<tr>
		<td>Selesai order</td>
		<td><?php echo $detail_pesanan['tanggal_selesai']; ?></td>
		<td></td>
	</tr>
</table>
<table border="1px" width="100%">
	<tr>
		<th>NO</th>
		<th>order</th>
		<th>Media</th>
		<th>size</th>
		<th>qty</th>
		<th>Price</th>
		<th>Sub total</th>
	</tr>
	<!-- <?php
	$nomor=$this->uri->segment('3') + 1;
	foreach ($detail_pesanan as $key) {
	?> -->
	<tr>
		<td><!-- <?php echo $nomor++ ?> --></td>
		<td><!-- <?php echo $key->paket ?> --></td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
	</tr>
	<?php } ?>
	<tr>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
	</tr>
	<tr>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
	</tr>
	<tr>
		<td colspan="5">-</td>
		<td>Total</td>
		<td>Rp</td>
	</tr>
	<tr>
		<td colspan="5" rowspan="3" style="text-align: center;"><hr>
		<b>-TERIMA KASIH </b>atas kunjungan Anda-<br>
		Kami tunggu kedatangan Anda kembali
		<hr></td>
		<td>Discount%</td>
		<td>-</td>
	</tr>
	<tr>
		<td>Uang Muka</td>
		<td>Rp</td>
	</tr>
	<tr>
		<td>Sisa Pembayaran</td>
		<td>Rp</td>
	</tr>
	<tr>
		<td colspan="7">
			<center>MAAF, untuk pengambilan foto, kami hanya melayani <b>PUKUL 16.00 WIB</b> (sesuai deadline/tanggal pengambilan foto)</center>
		</td>
	</tr>
</table>
</fieldset>
<br>
<br>
<br>
<br>
<br>
<br>

<input type="submit" name="cetak" value="Cetak Nota">

</center>
</body>
</html>
