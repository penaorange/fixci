<?php $this->load->view('modular/header') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Admin
            <small>Profil</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Beranda</li>
        </ol>
    </section>
    <!-- Main content -->
    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#settings" data-toggle="tab">Profil</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="settings">
                            <?php
                            foreach ($admin as $value) {
                                ?>

                            <?php } ?>
                            <form class="form-horizontal" >
                                <div class="form-group">
                                    <?= $this->session->set_userdata('admin_data');?>
                                    <label for="inputName" class="col-sm-2 control-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="username" class="form-control" id="inputName" placeholder="Username" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Password Lama</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="oldpassword" class="form-control" id="inputName" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Password Baru</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="newpassword" id="viewpassword" class="form-control" placeholder="Password Baru" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Konfirmasi Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" placeholder="Konfirmasi Password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-info">Rubah Data</button>
                                        <!--<a data-toggle="modal" class="btn btn-info"  data-target="#myModal">Rubah Password</a>-->
                                        <a data-toggle="modal" class="btn btn-primary"  href="<?= site_url('Trial') ?>">Kembali</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
</div><!-- /.content-wrapper -->
<!-- /.content-wrapper -->
<?php $this->load->view('modular/footer'); ?>