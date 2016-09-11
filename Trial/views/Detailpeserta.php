<?php $this->load->view('modular/header') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            User Profile
        </h1>
        <ol class="breadcrumb">

            <li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">User profile</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="<?= base_url('assets/images/user.jpg'); ?>" alt="User profile picture">

                        <h3 class="profile-username text-center">
                            <?php
                            foreach ($peserta as $value) {
                                echo $value->nm_peserta;
                                ?>
                            </h3>

                            <p class="text-muted text-center"><?= $value->email ?></p>
                        <?php } ?>
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Followers</b> <a class="pull-right">1,322</a>
                            </li>
                            <li class="list-group-item">
                                <b>Following</b> <a class="pull-right">543</a>
                            </li>
                            <li class="list-group-item">
                                <b>Friends</b> <a class="pull-right">13,287</a>
                            </li>
                        </ul>

                        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- About Me Box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">About Me</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

                        <p class="text-muted">
                            B.S. in Computer Science from the University of Tennessee at Knoxville
                        </p>

                        <hr>

                        <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                        <p class="text-muted">Malibu, California</p>

                        <hr>

                        <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

                        <p>
                            <span class="label label-danger">UI Design</span>
                            <span class="label label-success">Coding</span>
                            <span class="label label-info">Javascript</span>
                            <span class="label label-warning">PHP</span>
                            <span class="label label-primary">Node.js</span>
                        </p>

                        <hr>

                        <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#settings" data-toggle="tab">Profil</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="settings">
                            <?php
                            foreach ($peserta as $value) {
                                ?>
                                <form class="form-horizontal">

                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Nama</label>

                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" value="<?= $value->nm_peserta ?>" id="inputName" placeholder="Name" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-sm-2 control-label">Jenis Kelamin</label>

                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" value="<?= $value->jenis_kelamin ?>" disabled id="inputEmail" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Nama</label>

                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" value="<?= $value->nm_peserta ?>" id="inputName" placeholder="Name" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-sm-2 control-label">Kontak</label>

                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" value="<?= $value->email ?>" disabled id="inputEmail" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Alamat</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" value="<?= $value->alamat ?>" disabled placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Kelompok Ujian</label>

                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" value="<?php
                                            if ($value->id_kelompok_keilmuan == '1') {
                                                echo "IPA";
                                            } else if ($value->id_kelompok_keilmuan == '2') {
                                                echo "IPS";
                                            } else {
                                                echo "IPC";
                                            }
                                            ?>" id="inputName" placeholder="Name" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Username</label>

                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" value="<?= $value->username ?>" id="inputName" placeholder="Name" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Password</label>
                                        <div class="col-md-9 input-group" style="left: 15px;">
                                            <div class="input-group">
                                                <input type="password" name="viewpassword" id="viewpassword" disabled class="form-control" value="<?= $value->password ?>">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" id="btn-password" type="button" alt="tampil"><i class="fa fa-eye"></i></button>
                                                </span>
                                            </div><!-- /input-group -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputSkills" class="col-sm-2 control-label">Kelompok Peserta</label>

                                        <div class="col-sm-10">
                                            <input disabled type="text" class="form-control" id="inputSkills" value="<?php
                                            if ($value->id_kelompok_peserta == "1") {
                                                echo "Trial";
                                            } else if ($value->id_kelompok_peserta == "2") {
                                                echo "Berbayar";
                                            } else {
                                                echo "Bimbel";
                                            }
                                            ?>">
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <a data-toggle="modal" class="btn btn-info"  data-target="#myModals">Hapus</a>
                                        <a data-toggle="modal" class="btn btn-info"  data-target="#myModal">Rubah</a>
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
    <!-- /.content -->
</div>
<?php foreach ($peserta as $value) { ?>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Biodata Diri</h4>
                </div>
                <form action="<?= site_url('Trial/ubahPeserta') ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input name="nama" type="text" class="form-control" placeholder="Nama" value="<?= $value->nm_peserta ?>" required> <br>
                            <input name="id" type="hidden" value="<?= $value->id_peserta ?>" >
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-male"></i></span>
                            <select class="form-control" name="jeniskelamin" required>
                                <?php if ($value->jenis_kelamin == "pria") { ?>
                                    <option value="pria" selected>Pria</option>
                                    <option value="wanita" >Wanita</option>
                                <?php } else { ?>
                                    <option value="pria" >Pria</option>
                                    <option value="wanita" selected >Wanita</option>
                                <?php } ?>
                            </select>

                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input name="nohp" type="text" class="form-control"  placeholder="No Handphone" value="<?= $value->no_hp ?>" required> <br>
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                            <textarea name="alamat" class="form-control" placeholder="Alamat"><?= $value->alamat ?></textarea>
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input name="email" type="email" class="form-control"  placeholder="Email" value="<?= $value->email; ?>" required> <br>
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-check"></i></span>
                            <select class="form-control" name="konfirmasi" required>
                                <?php if ($value->konfirmasi == "0") { ?>
                                    <option value="0" selected>Belum Valid</option>
                                    <option value="1" >Valid</option>
                                <?php } else { ?>
                                    <option value="0" >Belum Valid</option>
                                    <option value="1" selected>Valid</option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-users"></i></span>
                            <select class="form-control" name="kelompokujian" required>
                                <?php if ($value->id_kelompok_keilmuan == "1") { ?>
                                    <option value="1" selected>IPA</option>
                                    <option value="2" >IPS</option>
                                    <option value="3" >IPC</option>
                                <?php } else if ($value->id_kelompok_keilmuan == "2") { ?>
                                    <option value="1">IPA</option>
                                    <option value="2" selected>IPS</option>
                                    <option value="3">IPC</option>
                                <?php } else { ?>
                                    <option value="1" >IPA</option>
                                    <option value="2" >IPS</option>
                                    <option value="3" selected>IPC</option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-adn"></i></span>
                            <select class="form-control" name="kelompokpeserta" required>
                                <?php if ($value->id_kelompok_peserta == "1") { ?>
                                    <option value="1" selected>Trial</option>
                                    <option value="2" >Berbayar</option>
                                    <option value="3" >Bimbel</option>
                                <?php } else if ($value->id_kelompok_peserta == "2") { ?>
                                    <option value="1">Trial</option>
                                    <option value="2" selected>Berbayar</option>
                                    <option value="3">Bimbel</option>
                                <?php } else { ?>
                                    <option value="1" >Trial</option>
                                    <option value="2" >Berbayar</option>
                                    <option value="3" selected>Bimbel</option>
                                <?php } ?>
                            </select>
                        </div>


                        <input name="username" type="hidden" class="form-control"  placeholder="Username" value="<?= $value->username ?>" required>




                        <input name="password" type="hidden" class="form-control"  placeholder="Password" required value="<?= $value->password ?>">



                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModals" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
                </div>

                <form action="<?= site_url('Trial/hapusPeserta') ?>?id=<?= $value->id_peserta ?>" method="post">
                    <div class="modal-body">
                        <h4><center>Anda yakin akan menghapus data ini ?</center></h4>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Ya</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
<?php } ?>
<!-- /.content-wrapper -->
<script type="text/javascript">
    function show() {
        var p = document.getElementById('viewpassword');
        p.setAttribute('type', 'text');
    }

    function hide() {
        var p = document.getElementById('viewpassword');
        p.setAttribute('type', 'password');
    }

    var pwShown = 0;

    document.getElementById("btn-password").addEventListener("click", function () {
        if (pwShown == 0) {
            pwShown = 1;
            show();
        } else {
            pwShown = 0;
            hide();
        }
    }, false);
</script>
<?php $this->load->view('modular/footer'); ?>

