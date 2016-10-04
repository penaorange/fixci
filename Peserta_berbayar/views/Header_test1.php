<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title><?php echo $this->uri->uri_string(); ?></title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url();?>assets/peserta/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url();?>assets/peserta/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url();?>assets/peserta/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
		<link href="<?php echo base_url();?>assets/peserta/css/demo.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>assets/peserta/css/soal.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>assets/peserta/css/soal2.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/peserta/css/sweetalert.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
		<!-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="<?php echo base_url();?>assets/peserta/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'> -->
    <!-- <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" /> -->

</head>
<body>
<div class="wrapper">
    <div class="main-panel-soal">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
											<?php if ($this->uri->uri_string() == 'peserta-free'): ?>
													<i class="fa fa-dashboard"></i> Dashboard
												<?php elseif (strstr($this->uri->uri_string(),'tryout-free')): ?>
													<i class="fa fa-pencil-square-o"></i> Tryout
												<?php elseif ($this->uri->uri_string() == 'nilai-free'): ?>
													<i class="fa fa-book"></i> Nilai - Nilai
												<?php elseif ($this->uri->uri_string() == 'soal-free'): ?>
													<i class="fa fa-file-text-o"></i> Soal - Soal
												<?php elseif ($this->uri->uri_string() == 'pembahasan-free'): ?>
													<i class="fa fa-comment-o"></i> Pembahasan
												<?php elseif ($this->uri->uri_string() == 'profil-free'): ?>
													<i class="fa fa-user"></i> Profil Pengguna
												<?php elseif ($this->uri->uri_string() == 'soal-TO-free'): ?>
													<i class="fa fa-file-text"></i> Soal Tryout
												<?php else: ?>
													<i class="fa fa-bug"></i> ERROR!
											<?php endif; ?>
										</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">


                    </ul>

                    <ul class="nav navbar-nav navbar-right profil-menu">
											<li class="dropdown user-menu">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown">
															<span class="hidden-xs"><i class="fa fa-user"></i> Account</span>
															<b class="caret"></b>
														</a>
														<ul class="dropdown-menu">
															<!-- User image -->
															<li class="user-header">
																<img src="<?php echo base_url(); ?>/assets/peserta/img/faces/face-8.jpg" class="img-circle" alt="User Image">
																<p>
						                      <?php echo $this->session->userdata("nama"); ?>
						                    </p>
																<a href="<?php echo site_url('profil-free'); ?>"><i class="fa fa-search"></i> Lihat Profil</a>
															</li>
															<!-- Menu Footer-->
															<li class="user-footer">
																<div class="pull-left">
																	<button href="#" class="btn btn-warning btn-fill"><i class="fa fa-times"></i> Cancel</button>
																</div>
																<div class="pull-right">
																	<a href="<?php echo site_url('Logout'); ?>"><button class="btn btn-danger btn-fill"><i class="fa fa-sign-out"></i> Log out</button></a>
																</div>
															</li>
														</ul>
													</li>
                    </ul>
                </div>
            </div>
        </nav>
