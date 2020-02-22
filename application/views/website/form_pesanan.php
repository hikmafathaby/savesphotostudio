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

	<form action="<?php echo base_url().'index.php/website/actionorder'; ?>" method="post">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" placeholder="Nama Konsumen" name="nama_pelanggan">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" placeholder="Alamat" name="alamat_pelanggan">
        </div>
        <div class="form-group">
            <label>Nomor Telepon</label>
            <input type="number" class="form-control" placeholder="Nomor Telepon" name="no_telp_pelanggan">
        </div>
        <div class="form-group">
            <label>Tanggal Selesai</label>
            <input type="date" class="form-control" name="tanggal_selesai">
        </div>
        <hr>
        <div class="form-group">
            <label>Paket</label>
            <select name="paket" class="form-control">
                <option selected="selected" value="none">(Pilih Paket)</option>
                <?php foreach ($paket as $key): ?>
                    <option value="<?= $key->nama_paket?>"><?= $key->nama_paket?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Jenis</label>
            <select name="jenis" class="form-control">
                <option selected="selected" value="none">(Pilih Jenis Foto)</option>
                <?php foreach ($jenis as $key): ?>
                    <option value="<?= $key->nama_jenis_foto?>"><?= $key->nama_jenis_foto?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control btn btn-primary">
        </div>
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