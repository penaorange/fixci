<?php $this->load->view('modular/header') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Beranda
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Beranda</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Total Peserta Ujian</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>53</h3>
                        <p>Peserta Ujian Trial</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>44</h3>
                        <p>Peserta Ujian Berbayar</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>65</h3>
                        <p>Peserta Ujian Bimbel</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
        </div><!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-6">
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <i class="fa fa-info"></i>
                            <h3 class="box-title">Informasi Peserta</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="alert alert-dismissable" style="background-color: #f2dede">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                10 peserta trial ditambahkan
                            </div>
                            <div class="alert alert-dismissable" style="background-color: #f2dede">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <!--<h4><i class="icon fa fa-info"></i>info</h4>-->
                                Admin mengubah 3 peserta trial menjadi peserta berbayar
                            </div>
                            <div class="alert alert-dismissable" style="background-color: #f2dede">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <!--<h4>	<i class="icon fa fa-info"></i>info</h4>-->
                                Admin menambahkan 5 peserta bimbel
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                <!--</div>-->
            </section>
            <section class="col-lg-6">
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <i class="fa fa-info"></i>
                            <h3 class="box-title">Informasi Try Out</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="alert alert-dismissable" style="background-color: #f2dede">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <!--<h4><i class="icon fa fa-info"></i>Info</h4>-->
                                1 Try Out Baru Ditambahkan
                            </div>
                            <div class="alert alert-dismissable" style="background-color: #f2dede">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <!--<h4><i class="icon fa fa-info"></i>info</h4>-->
                                19 Maret 2016 akan dimulai try out ke 4
                            </div>
                            <div class="alert alert-dismissable" style="background-color: #f2dede">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <!--<h4>	<i class="icon fa fa-info"></i>info</h4>-->
                                Success alert preview. This alert is dismissable.
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                <!--</div>-->
            </section>
            <div class="col-lg-12">
            <section class="col-lg-3 connectedSortable">
                <a href="<?= site_url('tryOut')?>"><div class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-pencil"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Try Out</span>
                            <span class="info-box-number">14</span>
                        </div><!-- /.info-box-content -->
                    </div></a>
            </section>
            <section class="col-lg-3 connectedSortable">
                <a href="<?= site_url('bankSoal')?>"><div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="fa fa-briefcase"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Soal</span>
                            <span class="info-box-number">30</span>
                        </div><!-- /.info-box-content -->
                    </div></a>
            </section>
            <section class="col-lg-3 connectedSortable">
                <a href="<?= site_url('trial')?>"><div class="info-box">
                        <span class="info-box-icon bg-teal"><i class="fa fa-user"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Peserta Baru</span>
                            <span class="info-box-number">7</span>
                        </div><!-- /.info-box-content -->
                    </div></a>
            </section>
            <section class="col-lg-3 connectedSortable">
                <a href="<?= site_url('trial')?>"><div class="info-box">
                        <span class="info-box-icon bg-aqua-active"><i class="fa fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Peserta Aktif</span>
                            <span class="info-box-number">87</span>
                        </div><!-- /.info-box-content -->
                    </div></a>
            </section>
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
        </div><!-- /.row (main row) -->
        </div>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<?php $this->load->view('modular/footer'); ?>
