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
        <?php if ($this->session->flashdata('notif') != '') : ?>
            <br>
            <div class="col-md-4 col-md-offset-4">
                <div class="alert alert-info">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <center><?php echo $this->session->flashdata('notif'); ?></center>
                </div>
            </div>
        <?php endif; ?>


        <div class="row">
            <div class="col-md-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#settings" data-toggle="tab">Profil</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="settings">
                            <form class="form-horizontal" action="<?= base_url('index.php/Dashboard/rubahpassword') ?>" method="post">
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Username</label>
                                    <div class="col-sm-10">
                                        <?php
                                        foreach ($admin as $value) {
                                            ?>
                                            <input value="<?= $value->username; ?>" type="text" name="username" class="form-control" id="inputName" placeholder="Username" required>
                                        <?php } ?>
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
                                        <input type="password" name="newpassword" id="password" class="form-control" placeholder="Password Baru" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Konfirmasi Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password2" name="confirmpassword" placeholder="Konfirmasi Password" required onkeyup="checkPass(); return false;">
                                        <span id="confirmMessage" class="confirmMessage"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button disabled id="btn-password" type="submit" class="btn btn-info">Rubah Data</button>
                                        <!--<a data-toggle="modal" class="btn btn-info"  data-target="#myModal">Rubah Password</a>-->
                                        <a data-toggle="modal" class="btn btn-primary"  href="<?= site_url('Dashboard') ?>">Kembali</a>
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
<script type="text/javascript">
    function checkPass() {
        //Store the password field objects into variables ...
        var pass1 = document.getElementById('password');
        var pass2 = document.getElementById('password2');
        //Store the Confimation Message Object ...
        var message = document.getElementById('confirmMessage');
        //Set the colors we will be using ...
        var goodColor = "#66cc66";
        var badColor = "#ff6666";
        var blank = "#fff"
        //Compare the values in the password field
        //and the confirmation field

        if (pass2.value == "") {
            message.style.color = blank;
            message.innerHTML = ""
        } else if (pass1.value == pass2.value) {
            //The passwords match.
            //Set the color to the good color and inform
            //the user that they have entered the correct password
            message.style.color = goodColor;
            message.innerHTML = "Passwords Cocok!";
            document.getElementById("btn-password").disabled = false;
        } else {
            //The passwords do not match.
            //Set the color to the bad color and
            //notify the user.
            message.style.color = badColor;
            message.innerHTML = "Passwords Tidak Cocok!";

            document.getElementById("btn-password").disabled = true;
        }
    }

</script>



<?php $this->load->view('modular/footer'); ?>