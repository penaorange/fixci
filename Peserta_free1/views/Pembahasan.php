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

  <body>

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
                          <i class="fa fa-comment"></i>
                          <span>Pembahasan</span>
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
      <!-- <section id="main-content">
          <section class="wrapper">
            
              <div class="row">
  
                  <div class="col-lg-9 main-chart">
            
                       <div class="alert alert-danger">
                          Untuk Dapat Mengaktifkan Semua Fitur, Aktifkan Versi <a href="#"><strong><big>Premium</big></strong></a>!
                        </div> -->

                        <section id="main-content">
          <section class="wrapper main-chart">
          <div class="alert alert-danger">
                          Untuk Dapat Mengaktifkan Semua Fitur, Aktifkan Versi <a href="#"><strong><big>Premium</big></strong></a>!
                        </div>
            <h3><i class="fa fa-comment"></i> Pembahasan</h3>
            
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel fn-table">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> Download Soal-Soal</h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th>No</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Tanggal</th>
                                  <th><i class="fa fa-bookmark"></i> TryOut Ke-</th>
                                  <th><i class=" fa fa-edit"></i> Status</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>

                              <tr id="package1" class="accordion-toggle" data-toggle="collapse" data-parent="#OrderPackages" data-target=".tabel-01">
                                  <td>1</td>
                                  <td>01/03/2016</td>
                                  <td>01</td>
                                  <td><span class="label label-info label-mini">selesai</span></td>
                                  <td>
                                      <button class="btn btn-success btn-md"><i class="fa fa-download fa-2x"></i></button>
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="hiddenRow sub-tabel" colspan="5">
                                      <div class="accordion-body collapse tabel-01 fn-table" id="accordion1">
                                          <table class="table table-striped table-advance table-hover">
                                              <tr class="info">
                                                  <th>No</th>
                                                  <th>Mata Pelajaran</th>
                                                  <th>Durasi</th>
                                                  <th>Aksi</th>
                                              </tr>
                                              <tr>
                                                  <td>01</td>
                                                  <td>Matematika</td>
                                                  <td>60 Menit</td>
                                                  <td>
                                                    <a href="mulai-ujian.html"><button class="btn btn-success btn-md"><i class="fa fa-download fa-2x"></i></button></a>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td>02</td>
                                                  <td>IPA</td>
                                                  <td>60 Menit</td>
                                                  <td>
                                                    <button class="btn btn-success btn-md"><i class="fa fa-download fa-2x"></i></button>
                                                  </td>
                                              </tr>
                                          </table>
                                      </div>
                                  </td>
                              </tr>

                              <tr id="package1" class="accordion-toggle" data-toggle="collapse" data-parent="#OrderPackages" data-target=".tabel-02">
                                  <td>1</td>
                                  <td>01/03/2016</td>
                                  <td>01</td>
                                  <td><span class="label label-info label-mini">selesai</span></td>
                                  <td>
                                      <button class="btn btn-success btn-md"><i class="fa fa-download fa-2x"></i></button>
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="hiddenRow sub-tabel" colspan="5">
                                      <div class="accordion-body collapse tabel-02 fn-table" id="accordion1">
                                          <table class="table table-striped table-advance table-hover">
                                              <tr class="info">
                                                  <th>No</th>
                                                  <th>Mata Pelajaran</th>
                                                  <th>Durasi</th>
                                                  <th>Aksi</th>
                                              </tr>
                                              <tr>
                                                  <td>01</td>
                                                  <td>Matematika</td>
                                                  <td>60 Menit</td>
                                                  <td>
                                                    <button class="btn btn-success btn-md"><i class="fa fa-download fa-2x"></i></button>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td>02</td>
                                                  <td>IPA</td>
                                                  <td>60 Menit</td>
                                                  <td>
                                                    <button class="btn btn-success btn-md"><i class="fa fa-download fa-2x"></i></button>
                                                  </td>
                                              </tr>
                                          </table>
                                      </div>
                                  </td>
                              </tr>

                              <tr id="package1" class="accordion-toggle" data-toggle="collapse" data-parent="#OrderPackages" data-target=".tabel-03">
                                  <td>1</td>
                                  <td>01/03/2016</td>
                                  <td>01</td>
                                  <td><span class="label label-info label-mini">selesai</span></td>
                                  <td>
                                      <button class="btn btn-success btn-md"><i class="fa fa-download fa-2x"></i></button>
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="hiddenRow sub-tabel" colspan="5">
                                      <div class="accordion-body collapse tabel-03 fn-table" id="accordion1">
                                          <table class="table table-striped table-advance table-hover">
                                              <tr class="info">
                                                  <th>No</th>
                                                  <th>Mata Pelajaran</th>
                                                  <th>Durasi</th>
                                                  <th>Aksi</th>
                                              </tr>
                                              <tr>
                                                  <td>01</td>
                                                  <td>Matematika</td>
                                                  <td>60 Menit</td>
                                                  <td>
                                                    <button class="btn btn-success btn-md"><i class="fa fa-download fa-2x"></i></button>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td>02</td>
                                                  <td>IPA</td>
                                                  <td>60 Menit</td>
                                                  <td>
                                                    <button class="btn btn-success btn-md"><i class="fa fa-download fa-2x"></i></button>
                                                  </td>
                                              </tr>
                                          </table>
                                      </div>
                                  </td>
                              </tr>

                              <tr id="package1" class="accordion-toggle" data-toggle="collapse" data-parent="#OrderPackages" data-target=".tabel-04">
                                  <td>1</td>
                                  <td>01/03/2016</td>
                                  <td>01</td>
                                  <td><span class="label label-info label-mini">selesai</span></td>
                                  <td>
                                      <button class="btn btn-success btn-md"><i class="fa fa-download fa-2x"></i></button>
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="hiddenRow sub-tabel" colspan="5">
                                      <div class="accordion-body collapse tabel-04 fn-table" id="accordion1">
                                          <table class="table table-striped table-advance table-hover">
                                              <tr class="info">
                                                  <th>No</th>
                                                  <th>Mata Pelajaran</th>
                                                  <th>Durasi</th>
                                                  <th>Aksi</th>
                                              </tr>
                                              <tr>
                                                  <td>01</td>
                                                  <td>Matematika</td>
                                                  <td>60 Menit</td>
                                                  <td>
                                                    <button class="btn btn-success btn-md"><i class="fa fa-download fa-2x"></i></button>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td>02</td>
                                                  <td>IPA</td>
                                                  <td>60 Menit</td>
                                                  <td>
                                                    <button class="btn btn-success btn-md"><i class="fa fa-download fa-2x"></i></button>
                                                  </td>
                                              </tr>
                                          </table>
                                      </div>
                                  </td>
                              </tr>

                              <tr id="package1" class="accordion-toggle" data-toggle="collapse" data-parent="#OrderPackages" data-target=".tabel-05">
                                  <td>1</td>
                                  <td>01/03/2016</td>
                                  <td>01</td>
                                  <td><span class="label label-info label-mini">selesai</span></td>
                                  <td>
                                      <button class="btn btn-success btn-md"><i class="fa fa-download fa-2x"></i></button>
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="hiddenRow sub-tabel" colspan="5">
                                      <div class="accordion-body collapse tabel-05 fn-table" id="accordion1">
                                          <table class="table table-striped table-advance table-hover">
                                              <tr class="info">
                                                  <th>No</th>
                                                  <th>Mata Pelajaran</th>
                                                  <th>Durasi</th>
                                                  <th>Aksi</th>
                                              </tr>
                                              <tr>
                                                  <td>01</td>
                                                  <td>Matematika</td>
                                                  <td>60 Menit</td>
                                                  <td>
                                                    <button class="btn btn-success btn-md"><i class="fa fa-download fa-2x"></i></button>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td>02</td>
                                                  <td>IPA</td>
                                                  <td>60 Menit</td>
                                                  <td>
                                                    <button class="btn btn-success btn-md"><i class="fa fa-download fa-2x"></i></button>
                                                  </td>
                                              </tr>
                                          </table>
                                      </div>
                                  </td>
                              </tr>

                              <tr id="package1" class="accordion-toggle" data-toggle="collapse" data-parent="#OrderPackages" data-target=".tabel-06">
                                  <td>1</td>
                                  <td>01/03/2016</td>
                                  <td>01</td>
                                  <td><span class="label label-info label-mini">selesai</span></td>
                                  <td>
                                      <button class="btn btn-success btn-md"><i class="fa fa-download fa-2x"></i></button>
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="hiddenRow sub-tabel" colspan="5">
                                      <div class="accordion-body collapse tabel-06 fn-table" id="accordion1">
                                          <table class="table table-striped table-advance table-hover">
                                              <tr class="info">
                                                  <th>No</th>
                                                  <th>Mata Pelajaran</th>
                                                  <th>Durasi</th>
                                                  <th>Aksi</th>
                                              </tr>
                                              <tr>
                                                  <td>01</td>
                                                  <td>Matematika</td>
                                                  <td>60 Menit</td>
                                                  <td>
                                                    <button class="btn btn-success btn-md"><i class="fa fa-download fa-2x"></i></button>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td>02</td>
                                                  <td>IPA</td>
                                                  <td>60 Menit</td>
                                                  <td>
                                                    <button class="btn btn-success btn-md"><i class="fa fa-download fa-2x"></i></button>
                                                  </td>
                                              </tr>
                                          </table>
                                      </div>
                                  </td>
                              </tr>

                              <tr id="package1" class="accordion-toggle" data-toggle="collapse" data-parent="#OrderPackages" data-target=".tabel-07">
                                  <td>1</td>
                                  <td>01/03/2016</td>
                                  <td>01</td>
                                  <td><span class="label label-info label-mini">selesai</span></td>
                                  <td>
                                      <button class="btn btn-success btn-md"><i class="fa fa-download fa-2x"></i></button>
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="hiddenRow sub-tabel" colspan="5">
                                      <div class="accordion-body collapse tabel-07 fn-table" id="accordion1">
                                          <table class="table table-striped table-advance table-hover">
                                              <tr class="info">
                                                  <th>No</th>
                                                  <th>Mata Pelajaran</th>
                                                  <th>Durasi</th>
                                                  <th>Aksi</th>
                                              </tr>
                                              <tr>
                                                  <td>01</td>
                                                  <td>Matematika</td>
                                                  <td>60 Menit</td>
                                                  <td>
                                                    <button class="btn btn-success btn-md"><i class="fa fa-download fa-2x"></i></button>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td>02</td>
                                                  <td>IPA</td>
                                                  <td>60 Menit</td>
                                                  <td>
                                                    <button class="btn btn-success btn-md"><i class="fa fa-download fa-2x"></i></button>
                                                  </td>
                                              </tr>
                                          </table>
                                      </div>
                                  </td>
                              </tr>
                              
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
            
      
            
    </section><! --/wrapper -->
      </section>
                    
          
          
                  <!-- </div> -->
                  <!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *****************************************************************************************************************************************
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
  

  </body>
</html>
