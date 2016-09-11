<?php $this->load->view('modular/header') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Prodi
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Universitas</li>
            <li class="active">Prodi</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <?php if ($this->session->flashdata('gagal') != '') : ?>
            <br>

            <div class="alert alert-danger" style="color:redlight;">
                <center><?php echo $this->session->flashdata('gagal'); ?></center>
            </div>
        <?php endif; ?>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Daftar Prodi</h3>
                <div class="pull-right">
                    <!--<a href = "#" type="button"  data-toggle="modal" data-target="#myModal"><span class=" fa fa-plus"></span></a>-->
                    <!--<a data-toggle="modal" class="btn btn-info"  data-target="#myModal">Tambah</a>-->
                    <a href="<?= site_url('Universitas') ?>" class="btn btn-default">Kembali</a>
                    <a data-toggle="modal" class="btn btn-info"  data-target="#myModal">Tambah</a>
                    <!-- Modal -->
                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="example" class="table table-bordered table-striped" style="text-align: center">
                    <thead>
                        <tr>
                            <th style="text-align: center">Kode</th>
                            <th style="text-align: center">Nama Prodi</th>
                            <th style="text-align: center">Jenis</th>
                            <th style="text-align: center">Nilai Aman</th>
                            <th style="text-align: center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($prodi as $value) { ?>
                            <tr>
                                <td><?= $value->id_prodi; ?></td>
                                <td><?= $value->nm_prodi; ?></td>
                                <?php if ($value->id_jenis == "1") { ?>
                                    <td>SAINTEK</td>
                                <?php } else { ?>
                                    <td>SOSHUM</td>
                                <?php } ?>
                                <td><?= $value->nilai_aman; ?></td>
                                <td><a data-toggle="modal" data-target="#update<?= $value->id_prodi ?>"><i class="fa fa-edit"></i></a>&nbsp;<a href="#" data-toggle="modal" data-target="#delete<?= $value->id_prodi ?>"><span class="fa fa-close"></span></a></td>
                            </tr>

                            <!--modal update data-->
                        <div class="modal fade" id="update<?= $value->id_prodi ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Rubah Prodi</h4>
                                    </div>

                                    <form action="<?= site_url('Universitas/ubahProdi') ?>" method="post">
                                        <div class="modal-body">
                                            <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="fa fa-university"></i></span>
                                                <input name="id_universitas" type="hidden" value="<?= $value->id_universitas ?>">
                                                <input name="id_prodi" type="hidden" value="<?= $value->id_prodi ?>" >
                                                <input type="text" placeholder="Nama Prodi" name="nm_prodi" id="nm_prodi" class="form-control" required value="<?= $value->nm_prodi ?>"> <br>
                                            </div>
                                            <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>                                
                                                <select class="form-control" name="jenis_prodi">
                                                    <?php if ($value->jenis_prodi == "1") { ?>
                                                        <option value="1" selected>SAINTEK</option>
                                                        <option value="2" >SOSHUM</option>
                                                    <?php } else { ?>
                                                        <option value="1" >SAINTEK</option>
                                                        <option value="2" selected >SOSHUM</option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="fa fa-university"></i></span>
                                                <input type="number" placeholder="Nilai Aman" name="nilai_aman" id="nilai_aman" class="form-control" required value="<?= $value->nilai_aman?>"> <br>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Ya</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!--//modal update data-->

                        <!--modal delete data-->
                        <div class="modal fade" id="delete<?= $value->id_prodi ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
                                    </div>

                                    <form action="<?= site_url('Universitas/hapusProdi') ?>?id=<?= $value->id_prodi ?>" method="post">
                                        <div class="modal-body">
                                            <div class="form-group input-group">
                                                <input name="id_prodi" type="hidden" value="<?= $value->id_prodi ?>" >
                                                <input name="id_universitas" type="hidden" value="<?= $value->id_universitas ?>">
                                            </div>
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
                        <!--modal delete data-->
                    <?php } ?>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Tambah Prodi</h4>
            </div>

            <form action="<?= site_url('Universitas/tambahProdi') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input type="text" placeholder="Kode Prodi" name="id_prodi" id="id_prodi" class="form-control" required> <br>
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                        <input name="id_universitas" type="hidden" value="<?= $this->uri->segment(3); ?>" >
                        <input type="text" placeholder="Nama Prodi" name="nm_prodi" id="nm_prodi" class="form-control" required> <br>
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>                                
                        <select class="form-control" name="jenis_prodi">
                            <option>Jenis Prodi</option>
                            <option value="1">SAINTEK</option>
                            <option value="2">SOSHUM</option>
                        </select>
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-caret-square-o-down"></i></span>
                        <input type="number" placeholder="Nilai aman" name="nilai_aman" id="nilai_aman" class="form-control" required> <br>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Ya</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                </div>
            </form>

        </div>
    </div>
</div>
<?php $this->load->view('modular/footer') ?>
<script type="text/javascript" language="javascript">

    $(document).ready(function () {
        $('#example').DataTable();
    });

</script>
