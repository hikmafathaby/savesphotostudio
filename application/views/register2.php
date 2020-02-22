<!DOCTYPE html>
<html>
<head>


  <title>register2</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/allcss.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/boostrap.min.css">


</head>
<body>
  <?php echo validation_errors(); ?> 
  <?php echo base_url(). 'index.php/website/daftarAdmin'; ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
            <img src="<?php echo config_item('base_url');?>assets/img/Saves.jpeg">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Register</h5>
            <!-- <p class="card-subtitle text-center">Admin Only</p> -->
            <form class="form-signin">
              <div class="form-label-group">
                <input type="text" id="username" class="form-control" placeholder="Username" required autofocus>
                <label for="username">Username</label>
              </div>

              <div class="form-label-group">
                <input type="email" id="email" class="form-control" placeholder="Email address" required>
                <label for="email">Email address</label>
              </div>
              
              <hr>

              <div class="form-label-group">
                <input type="password" id="pas" class="form-control" placeholder="Password" required>
                <label for="pas">Password</label>
              </div>
              


              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
              <hr class="my-4">
              <a class="d-block text-center mt-2 small" href="<?php echo base_url(). 'index.php/website/masuk'; ?>">Sign In</a>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
