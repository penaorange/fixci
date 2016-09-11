<!DOCTYPE html>
<html lang="en">
	<?php
	// if (isset($this->session->userdata['logged_in'])) {

	// header("location: http://localhost/halamanPeserta");
	// };
	?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Login Cermat Institute</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/login/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>assets/login/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/login/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/login/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<!-- <script type="text/javascript">
            $(document).ready(function() {
                $('#login-notifikasi').fadeIn('800');
            });
        </script> -->
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">

		      <form class="form-login" action="<?php echo site_url('login_admin');?>" method="post">
		        <h2 class="form-login-heading">Login Admin</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" name="username" placeholder="User ID" autofocus required>
		            <input type="password" class="form-control" name="password" placeholder="Password" required>
		            <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> Lupa Password?</a>
		                </span>
		            </label>
		            <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> Masuk</button>


		            <?php if ($this->session->flashdata('notif') != '') : ?>
						<br>
						<div class="alert alert-danger">
						<center><i class="fa fa-times"></i> <?php echo $this->session->flashdata('notif'); ?></center>
						</div>
                    <?php endif;?>
                    <?php if ($this->session->flashdata('terimakasih') != '') : ?>
						<br>
						<div class="alert alert-info">
						<center><i class="fa fa-check"></i> <?php echo $this->session->flashdata('terimakasih'); ?></center>
						</div>
                    <?php endif;?>

		            <hr>
		            <div class="registration">
		                Anda Tidak Memiliki Akun ?<br/>
		                <a class="" href="<?php echo site_url('Daftar'); ?>">
		                    Buat Akun
		                </a>
		            </div>

		        </div>

		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->

		      </form>

	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>assets/login/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/login/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/login/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("<?php echo base_url();?>assets/login/img/bg-2.jpg", {speed: 500});
    </script>


  </body>
</html>
