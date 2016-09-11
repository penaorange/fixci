<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Cermat Institute</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body onload="getTime()">

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>Login</b> User</a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
              <ul class="nav pull-right top-menu navbar-right">
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle logout" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Profil</a>
                      <ul class="dropdown-menu">
                          <li><a href="profil.html"><span class="glyphicon glyphicon-user"></span> Lihat Profil</a></li>
                          <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Another action</a></li>
                          <li><a href="#"><span class="glyphicon glyphicon-book"></span> Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="login.html"><button class="btn btn-danger"><span class="glyphicon glyphicon-log-out"></span> Logout</button></a></li>
                      </ul>
                    </li>
              </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="assets/img/fr-05.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">User</h5>
              	  	
                  <li class="mt">
                      <a href="index.html">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Soal</span>
                      </a>
                  </li>


              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            
              <div class="row">
  
                  <div class="col-lg-9 main-chart">
            
                       <div class="alert alert-danger">
                          Untuk Dapat Mengaktifkan Semua Fitur, Aktifkan Versi <a href="#"><strong><big>Premium</big></strong></a>!
                        </div>

<div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-book"></i> Matematika</h4>
                     <div id="showtime1"></div>
                      <form class="form-horizontal style-form" method="get">
                          <div class="form-group">
                              <div class="col-md-12">
                                  <h5 class="form-control-static"><strong>1. Tahun Berapa Kekhilafahan Runtuh? </strong></h5>
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-6">
                                  <p class="form-control-static">
                                    <div class="radio">
                                      <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">1911
                                      </label>
                                    </div>

                                    <div class="radio">
                                      <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">1924
                                      </label>
                                    </div>

                                    <div class="radio">
                                      <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">1912
                                      </label>
                                    </div>

                                    <div class="radio">
                                      <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">1910
                                      </label>
                                    </div>
                                  </p>
                              </div>
                          </div>

                          <ul class="pager pagination-lg">
                                <li><a href="#">Previous</a></li>
                                <li><a href="#">Next</a></li>
                          </ul>
                          
                      </form>
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
	
                  <!-- <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel fn-table">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-book"></i> Matematika <span class="label label-info label-mini"><div id="showtime1"></div></span></h4>
                            <hr>
                              <tbody>
                              <h3>1.Pada Tahun Berapa Kekhilafahan Runtuh ?</h3>
                                <div class="pilihan">
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">1911
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">1921
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">1924
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">1922
                                  </label>
                                </div>
                                </div>
                              
                              <ul class="pager pagination-lg">
                                <li><a href="#">Previous</a></li>
                                <li><a href="#">Next</a></li>
                              </ul>
                              </tbody>
                          </table>
                      </div>

                      -->
                      <!-- /content-panel -->
                  <!-- </div> -->
                  <!-- /col-md-12 -->
              <!--</div> -->

              <!-- /row -->
                      
                            				

					
					<div class="row mt">
                      <!--CUSTOM CHART START -->
                      
                      <!--custom chart end-->
					</div><!-- /row -->	
					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
						<h3>Nomor Soal</h3>
                      <!-- CALENDAR-->
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
                        </div><!-- / calendar -->

                       <!-- USERS ONLINE SECTION -->
						<h3></h3>
                      <!-- First Member -->
                     
                      <!-- Second Member -->
                      
                      <!-- Third Member -->
                        
                      
                  </div><!-- /col-lg-3 -->
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
	
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
     <script>
        function getTime()
        {
            var today=new Date();
            var h=today.getHours();
            var m=today.getMinutes();
            var s=today.getSeconds();
            // add a zero in front of numbers<10
            m=checkTime(m);
            s=checkTime(s);
            document.getElementById('showtime1').innerHTML=h+":"+m+":"+s;
            t=setTimeout(function(){getTime()},500);
        }

        function checkTime(i)
        {
            if (i<10)
            {
                i="0" + i;
            }
            return i;
        }
    </script>
  

  </body>
</html>
