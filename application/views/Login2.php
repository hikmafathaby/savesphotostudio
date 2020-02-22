<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Landing Page - Start Bootstrap Theme</title>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo config_item('base_url');?>assets/css/jquery-3.3.1.min.js" rel="stylesheet">
	<link href="<?php echo config_item('base_url');?>assets/css/bootstrap.bundle.min.js" rel="stylesheet">
	<link href="<?php echo config_item('base_url');?>assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template -->
	<link href="<?php echo config_item('base_url');?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="<?php echo config_item('base_url');?>assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

	<!-- Custom styles for this template -->
	<link href="<?php echo config_item('base_url');?>assets/css/landing-page.min.css" rel="stylesheet">

	<title>Login2</title>
	<style type="text/css">
		:root {
		  --input-padding-x: 1.5rem;
		  --input-padding-y: 0.75rem;
		}

		.login,
		.image {
		  min-height: 100vh;
		}

		.bg-image {
		  background-image: url('<?php echo config_item('base_url');?>assets/img/Saves.jpeg');
		  background-size: cover;
		  background-position: center;
		}

		.login-heading {
		  font-weight: 300;
		}

		.btn-login {
		  font-size: 0.9rem;
		  letter-spacing: 0.05rem;
		  padding: 0.75rem 1rem;
		  border-radius: 2rem;
		}

		.form-label-group {
		  position: relative;
		  margin-bottom: 1rem;
		}

		.form-label-group>input,
		.form-label-group>label {
		  padding: var(--input-padding-y) var(--input-padding-x);
		  height: auto;
		  border-radius: 2rem;
		}

		.form-label-group>label {
		  position: absolute;
		  top: 0;
		  left: 0;
		  display: block;
		  width: 100%;
		  margin-bottom: 0;
		  /* Override default `<label>` margin */
		  line-height: 1.5;
		  color: #495057;
		  cursor: text;
		  /* Match the input under the label */
		  border: 1px solid transparent;
		  border-radius: .25rem;
		  transition: all .1s ease-in-out;
		}

		.form-label-group input::-webkit-input-placeholder {
		  color: transparent;
		}

		.form-label-group input:-ms-input-placeholder {
		  color: transparent;
		}

		.form-label-group input::-ms-input-placeholder {
		  color: transparent;
		}

		.form-label-group input::-moz-placeholder {
		  color: transparent;
		}

		.form-label-group input::placeholder {
		  color: transparent;
		}

		.form-label-group input:not(:placeholder-shown) {
		  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
		  padding-bottom: calc(var(--input-padding-y) / 3);
		}

		.form-label-group input:not(:placeholder-shown)~label {
		  padding-top: calc(var(--input-padding-y) / 3);
		  padding-bottom: calc(var(--input-padding-y) / 3);
		  font-size: 12px;
		  color: #777;
		}
	</style>
</head>
<body>

<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Welcome and <br> Have a Sweet Day!</h3>
             	<?= form_open('website/prosesMasuk'); ?>
             <!-- <form method="POST" action="<?= base_url('index.php/website/prosesMasuk')?>"> -->
              <!-- <form action=""> -->
                <div class="form-label-group">
                   <input type="username" name="username" maxlength="10" required>
                  <label for="username">Username</label>
                  <?php echo form_error('username'); ?>
                </div>

                <div class="form-label-group">
                  <input type="password" name="password" maxlength="50" required >
                  <!-- <input type="password" id="inputPassword" class="form-control" placeholder="Password" required> -->
                  <label for="pas">Password</label>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Remember password</label>
                </div>
                <!-- <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign in</button> -->
                <?php echo form_submit('login', 'Sign in', 'class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2"'); ?>
                <div class="text-center">
                <!--   <a class="small" href="#">Forgot password?</a></div> -->
              <!-- </form> -->
              <?= form_close();  ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>

<?php
if($this->session->flashdata('Gagal')<> ''){
}
?>
<?php
echo $this->session->flashdata('Gagal');
?>
 <!-- https://source.unsplash.com/WEQbe2jBg40/414x512');
   -->