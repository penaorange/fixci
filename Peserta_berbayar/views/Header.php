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
    <link href="<?php echo base_url();?>assets/peserta/css/pagination/jpages.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/peserta/css/pagination/bjqs.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
		<!-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="<?php echo base_url();?>assets/peserta/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'> -->
    <!-- <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" /> -->

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="green" data-image="<?php echo base_url();?>assets/peserta/img/sidebar-14.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    Cermat-Institute
                </a>
            </div>

            <ul class="nav">
                <li class="<?php echo ($this->uri->uri_string() == 'peserta-berbayar') ? 'active' : ''; ?>">
                    <a href="<?php echo site_url('peserta-berbayar'); ?>">
                        <i class="fa fa-dashboard"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="<?php echo (strstr($this->uri->uri_string(),'tryout-berbayar')) ? 'active' : ''; ?>">
                    <a href="<?php echo site_url('tryout-berbayar'); ?>">
                        <i class="fa fa-pencil-square-o"></i>
                        <p>Tryout</p>
                    </a>
                </li>
                <li class="<?php echo ($this->uri->uri_string() == 'nilai-berbayar') ? 'active' : ''; ?>">
                    <a href="<?php echo site_url('nilai-berbayar'); ?>">
                        <i class="fa fa-book"></i>
                        <p>Nilai</p>
                    </a>
                </li>
                <li class="<?php echo ($this->uri->uri_string() == 'soal-berbayar') ? 'active' : ''; ?>">
                    <a href="<?php echo site_url('soal-berbayar'); ?>">
                        <i class="fa fa-file-text-o"></i>
                        <p>Soal - Soal</p>
                    </a>
                </li>
                <li class="<?php echo ($this->uri->uri_string() == 'pembahasan-berbayar') ? 'active' : ''; ?>">
                    <a href="<?php echo site_url('pembahasan-berbayar'); ?>">
                        <i class="fa fa-comment-o"></i>
                        <p>Pembahasan</p>
                    </a>
                </li>
								<li class="active-pro">
				                    <a href="#">
				                        <i class="fa fa-star-o"></i>
				                        <p>PRO Version</p>
				                    </a>
				        </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
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
											<?php if ($this->uri->uri_string() == 'peserta-berbayar'): ?>
													<i class="fa fa-dashboard"></i> Dashboard
												<?php elseif (strstr($this->uri->uri_string(),'tryout-berbayar')): ?>
													<i class="fa fa-pencil-square-o"></i> Tryout
												<?php elseif ($this->uri->uri_string() == 'nilai-berbayar'): ?>
													<i class="fa fa-book"></i> Nilai - Nilai
												<?php elseif ($this->uri->uri_string() == 'soal-berbayar'): ?>
													<i class="fa fa-file-text-o"></i> Soal - Soal
												<?php elseif ($this->uri->uri_string() == 'pembahasan-berbayar'): ?>
													<i class="fa fa-comment-o"></i> Pembahasan
												<?php elseif ($this->uri->uri_string() == 'profil-berbayar'): ?>
													<i class="fa fa-user"></i> Profil Pengguna
												<?php elseif ($this->uri->uri_string() == 'soal-TO-berbayar'): ?>
													<i class="fa fa-file-text"></i> Soal Tryout
												<?php else: ?>
													<i class="fa fa-bug"></i> ERROR!
											<?php endif; ?>
										</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">


                    </ul>

                    <ul class="nav navbar-nav navbar-right">
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
																<a href="<?php echo site_url('profil-berbayar'); ?>"><i class="fa fa-search"></i> Lihat Profil</a>
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
