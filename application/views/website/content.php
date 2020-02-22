<!-- Page Content -->
<div class="container">
    <div class="row text-center">
    <?php
        foreach ($paket as $key) {
            // code...

    ?>
    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card h-100">
        <img class="card-img-top" src="<?php echo config_item('base_url'); ?>assets/foto_karyawan/<?= $key->gambar?>" alt="">
        <div class="card-body">
          <h4 class="card-title"><?= $key->nama_paket?></h4>
          <p class="card-text"> <b><center>EXTRA <?= $key->harga?></center></b> <br>
            <?= $key->keterangan?>
        </div>
        <div class="card-footer">
          <!-- <a href="#" class="btn btn-primary">Find Out More!</a> -->
        </div>
      </div>
    </div>
    <?php
        }
    ?>

<!--
    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card h-100">
        <img class="card-img-top" src="<?php echo config_item('base_url'); ?>assets/IMG-20190211-WA0017.jpg" alt="">
        <div class="card-body">
          <h4 class="card-title">Photo</h4>
          <p class="card-text"></p>
        </div>
        <div class="card-footer">
          <a href="#" class="btn btn-primary">Find Out More!</a>
        </div>
      </div>
    </div>
-->
  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
