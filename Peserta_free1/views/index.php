<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="">
	<title>Cermat Institute</title>
	<!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/dist/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>assets/dist/font-awesome/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/dist/css/index.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/dist/css/style-responsive.css" rel="stylesheet">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
          <script src="<?php echo base_url();?>js/html5shiv.js"></script>
          <script src="<?php echo base_url();?>js/respond.min.js"></script>
        <![endif]-->

</head>
<body>
	<!-- ====================================================
	header section -->
	<header class="top-header">
		<div class="container">
			<div class="row header-row">
				<div class="col-md-12">
					<nav class="navbar navbar-default">
                                            
					  <div class="container-fluid">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>
					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      
					      <ul class="nav navbar-nav navbar-right">
					        <li><a href="#sec1">Home</a></li>
					        <li><a href="#sec2">Tentang</a></li>
					        <!--<li><a href="#sec3">Fasilitas</a></li>-->
					        <li><a href="#sec4">Fasilitas</a></li>
					        <li><a href="#sec5">Kontak</a></li>
					        <li><a href="#sec6">Testimonial</a></li>
					        <li><a href="<?php echo site_url("halaman-login");?>">Login</a></li>
					      </ul>
					    </div><!-- /.navbar-collapse -->
					  </div><!-- /.container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header>

	<!-- banner area starts here -->
	<section class="banner text-center" id="sec1">
            <div class="container">
			<div class="row">
				<!--<h3>Lorem ipsum dolor sit iusmod tempor </h3>-->
                                <h3></h3>
				<h1>Cermatinstitute.com</h1>

<!--				<p>Keberhasilan program ini merupakan hasil IKHTIAR yang maksimal, 
                                    dengan metode latiha yang TEPAT dan TERUKUR, 
                                    metode belajar dengan penanaman konsep dasar yang melekat, 
                                    agar siswa dapat mengerjakan semua tipe soal dengan cepat.</p>-->
                                <br><br><br><br><br><br><br>

				<button class="know-more">KNOW MORE</button>
<!--				<button class="know-more">KNOW MORE</button>
				<button class="know-more">KNOW MORE</button>
				<button class="know-more">KNOW MORE</button>-->
                                
                        <h3></h3>
			</div>
		</div>
	</section><!-- end of banner section -->

	<!-- about section -->
	<section class="about text-center" id="sec2">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 about-heading">
					<h2>
						TENTANG 
                                        </h2><br>
					<img src="img/daag.png" alt=""><br>
					
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <span>quis nostrud exercitation ullamco</span> laboris nisi ut aliquip ex ea 
							commodo consequat duis aute irure dolor.</p>
				</div>

				<div class="col-md-4 single-about col-xs-6 col-sm-4">
					<div class="about-inside">
						<i class="fa fa-user"></i>
						<h3>Berbayar</h3>
						<p>onsectetur adipisicaing elit, sedo eiusmod tempor incidi
						et dolorerserss eerhfre mag.</p>
					</div>
				</div>

				<div class="col-md-4 single-about col-xs-6 col-sm-4">
					<div class="about-inside">
						<i class="fa fa-users"></i>
						<h3>Bimbel</h3>
						<p>onsectetur adipisicaing elit, sedo eiusmod tempor incidi
						et dolorerserss eerhfre mag.</p>
					</div>
				</div>

				<div class="col-md-4 single-about col-xs-6 col-sm-4">
					<div class="about-inside">
						<i class="fa fa-book"></i>
						<h3>Trials</h3>
						<p>onsectetur adipisicaing elit, sedo eiusmod tempor incidi
						et dolorerserss eerhfre mag.</p>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of about section -->

	<!-- portfolio section -->

	<section class="portfolio text-center" id="sec4">
		<div class="row portfolio-row">
			<div class="portfolio-heading">
				<h2>FASILITAS</h2>
				<img src="<?php echo base_url();?>assets/dist/img/daag.png" alt="">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt <br><br> 
				ut labore et dolore magna aliqua.</p>
			</div>

			<div class="col-md-3 single-portfolio col-sm-6">
				<figure class="portfolio-item">
                                    <img class="img-responsive" src="<?php echo base_url();?>assets/dist/img/soal.jpg" alt="">
					<figcaption class="portfolio-details">
						<h4>Belajar Soal SBMPTN</h4>
						<p>onsectetur adipisicing elit, sedo eiusmod tempor incidi
						et dolorerserss eerhfre mag.</p>
					</figcaption>
				</figure>
				<a href="<?php echo base_url();?>assets/dist/img/soal.jpg"><i class="fa fa-search"></i></a>
			</div>

			<div class="col-md-3 single-portfolio col-sm-6">
				<figure class="portfolio-item">
					<img class="img-responsive" src="<?php echo base_url();?>assets/dist/img/Passing.jpg" alt="">
					<figcaption class="portfolio-details">
						<h4>Passing Grade</h4>
						<p>onsectetur adipisicing elit, sedo eiusmod tempor incidi
						et dolorerserss eerhfre mag.</p>
					</figcaption>
				</figure>
				<a href="<?php echo base_url();?>assets/dist/img/passing.jpg"><i class="fa fa-search"></i></a>
			</div>

			<div class="col-md-3 single-portfolio col-sm-6">
				<figure class="portfolio-item">
                                    <img class="img-responsive" src="<?php echo base_url();?>assets/dist/img/ujian.jpg" alt="">
					<figcaption class="portfolio-details">
						<h4>Test Bimbel</h4>
						<p>onsectetur adipisicing elit, sedo eiusmod tempor incidi
						et dolorerserss eerhfre mag.</p>
					</figcaption>
				</figure>
                            <a href="<?php echo base_url();?>assets/dist/img/ujian.jpg"><i class="fa fa-search"></i></a>
			</div>

			<div class="col-md-3 single-portfolio col-sm-6">
				<figure class="portfolio-item">
                                    <img class="img-responsive" src="<?php echo base_url();?>assets/dist/img/olahraga.jpg" alt="">
					<figcaption class="portfolio-details">
						<h4>Olah Raga</h4>
						<p>onsectetur adipisicing elit, sedo eiusmod tempor incidi
						et dolorerserss eerhfre mag.</p>
					</figcaption>
				</figure>
                            <a href="<?php echo base_url();?>assets/dist/img/olahraga.jpg"><i class="fa fa-search"></i></a>
			</div>

		</div>
	</section><!-- end of portfolio section -->

	<section class="contact text-center" id="sec5">
		<div class="container">
			<div class="row">
				<article class="contact-heading">
					<h2>KONTAK KAMI</h2><br><br>
                                        <img src="<?php echo base_url();?>assets/dist/img/daag.png" alt=""><br><br>
				
                                        <div class="col-md-4 single-about col-xs-6 col-sm-4">
					<div class="about-inside">
						<i class="fa fa-location-arrow"></i>
						<!--<h3>Jl. Cikole Dalam No. 27 Sukabumi</h3>-->
						<p>Jl. Cikole Dalam No. 27 Sukabumi</p>
					</div>
				</div>

				<div class="col-md-4 single-about col-xs-6 col-sm-4">
					<div class="about-inside">
						<i class="fa fa-envelope"></i>
						<!--<h3>Title goes here</h3>-->
						<p>cermatinstitute@gmail.com</p>
					</div>
				</div>

				<div class="col-md-4 single-about col-xs-6 col-sm-4">
					<div class="about-inside">
						<i class="fa fa-phone-square"></i>
						<!--<h3>085723294808</h3>-->
						<p>085723294808</p>
					</div>
				</div>
                                </article>
			</div>
		</div>
	</section><!-- end of contact section -->
        
        <section class="contact text-center" id="sec6">
		<div class="container">
			<div class="row">
				<article class="contact-heading">
                                    <!----------conten---------->
					<h2>TESTIMONIAL</h2><br><br>
                                        <img src="<?php echo base_url();?>assets/dist/img/daag.png" alt=""><br><br>
                                        
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      
					<div class="about-inside">
						<i class="fa fa-user"></i>
						<h3>M. Shidqi Aulia</h3>
<!--						<p>Teknik Arsitektur</p>
						<p>Universitas Pendidikan Indonesia</p>-->
                                                <p>CERMAT. Bimbel yang ga bikin bosen. Asik banget belajarnya. 
                                                    Pengajarnya gaul semua. haha. gak akan nyesel ikut bimbel dicermat.
                                                    Thank CERAMAT
                                                </p>
					</div>
				</div>
    
    <div class="item">
      
					<div class="about-inside">
						<i class="fa fa-user"></i>
						<h3>Wildan Novrizal</h3>
						<p>Belajar di CI itu SERU!!! Suasana belajar asyik. Ada 
                                                   om ded dan tim managjemen lainnya yang kocak dan care abis.
                                                </p>
					</div>
      
    </div>

    <div class="item">
    					<div class="about-inside">
						<i class="fa fa-user"></i>
						<h3>Andina Mutiara</h3>
						<p>Seneng banget belajar di CI. Nyaman Cepet ngerti dan gurunya
                                                   ramah2 bgt... Pokoknya CI is number one...
                                                </p>
					</div>
				</div>
    

    <div class="item">
    					<div class="about-inside">
						<i class="fa fa-user"></i>
						<h3>Anisa Chairannisa</h3>
						<p>Dengan rasa kekeluargaan yang begitu erat, dengan pembelajaran yang
                                                   enjoy serta tidak membosankan membuat saya nyaman ketika belajar
                                                </p>
					</div>
                                </div>
    
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
                                    </div><br><br>
    </article>
	</div>
		</div>
	</section><!-- end of contact section -->

	<section class="contact-form">
		<div class="container">
			<div class="row">
<!--				<div class="form">
						<form action="contact.php">
							<div class="sbtn col-md-12 text-center">
								<input class="name form-input" type="text" placeholder="NAME">
								<input class="email form-input" type="email" placeholder="EMAIL">
								<input class="message form-input" type="text" placeholder="MASSAGE">
								<input  class="submit-btn" type="submit">
							</div>
						</form>
				</div>
			</div>-->
		</div>
	</section>

	<!-- footer starts here -->
	<footer class="footer text-center">
		<p>&copy; mostafizur</p>
	</footer>

	<!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>assets/dist/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/dist/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/dist/js/smoothscroll.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/dist/js/custom.js"></script>


	<!-- script tags
	============================================================= -->
	<script src="<?php echo base_url();?>js/jquery-2.1.1.js"></script>
	<script src="<?php echo base_url();?>js/smoothscroll.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>js/custom.js"></script>
</body>
</html>