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

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url(). 'index.php/website/worker'; ?>">SAVE'S PHOTO STUDIO</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url(). 'index.php/website/index'; ?>">Home   
             <!-- <span class="sr-only">(current)</span> -->
            </a>
          </li>
          <li style="color: white"> __ </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(). 'index.php/website/reserv'; ?>">Reservation</a>
            <!-- <span class="sr-only">(current)</span> -->
          </li>
          <li style="color: white"> __ </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url().'index.php/website/worker'; ?>">Team</a>
          </li>
          <li style="color: white"> __ </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url().'index.php/website/contactus'; ?>">Contact Us</a>
          </li>
          <li>
            <button class="btn btn-primary btn-sm"><a class="nav-link" href="<?php echo base_url(). 'index.php/website/regis'; ?>">Regist</a></button>
          </li>
          <li style="color: white"> &emsp; </li>
          <li>
            <button class="btn btn-primary btn-sm"><a class="nav-link" href="<?php echo base_url(). 'index.php/website/masuk'; ?>">Login</a></button>
          </li>
        </ul>
      </div>
    </div>
  </nav>
