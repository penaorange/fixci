<?php $this->load->view('modular/header') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Universitas
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Universitas</li>
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
                <h3 class="box-title">Daftar Universitas</h3>
                <div class="pull-right">
                    <!--<a href = "#" type="button"  data-toggle="modal" data-target="#myModal"><span class=" fa fa-plus"></span></a>-->
                    <a data-toggle="modal" class="btn btn-default"  data-target="#myModal">Tambah</a>
                    <!-- Modal -->
                </div>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Tambah Universitas</h4>
                            </div>

                            <form action="<?= site_url('Universitas/tambahUniv') ?>" method="post">
                                <div class="modal-body">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-university"></i></span>
                                        <input type="text" placeholder="Nama Universitas" name="nm_universitas" id="nm_universitas" class="form-control" required> <br>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>                                
                                        <select class="form-control" name="wilayah">
                                            <option>Wilayah Perguruan Tinggi</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
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
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="example" class="table table-bordered table-striped" style="text-align: center">
                    <thead>
                        <tr>
                            <th style="text-align: center">Kode</th>
                            <th style="text-align: center">Nama Perguruan Tinggi</th>
                            <th style="text-align: center">Wilayah</th>
                            <th style="text-align: center">Prodi</th>
                            <th style="text-align: center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($univ as $value) { ?>
                            <tr>
                                <td><?= $value->id_universitas; ?></td>
                                <td><?= $value->nm_universitas; ?></td>
                                <td><?= $value->wilayah; ?></td>
                                <td><a href="<?= site_url('Universitas/tampilProdi/' . $value->id_universitas); ?>" class="btn btn-default">Lihat</a></td>
                                <td><a data-toggle="modal" data-target="#update<?= $value->id_universitas ?>"><i class="fa fa-edit"></i></a>&nbsp;  <a href="#" data-toggle="modal" data-target="#myModal<?= $value->id_universitas ?>"><span class="fa fa-close"></span></a></td>
                            </tr>

                        <div class="modal fade" id="myModal<?= $value->id_universitas ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
                                    </div>

                                    <form action="<?= site_url('Universitas/hapusUniv') ?>?id=<?= $value->id_universitas ?>" method="post">
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


                        <div class="modal fade" id="update<?= $value->id_universitas ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Rubah Universitas</h4>
                                    </div>

                                    <form action="<?= site_url('Universitas/ubahUniv') ?>" method="post">
                                        <div class="modal-body">
                                            <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="fa fa-university"></i></span>
                                                <input name="id" type="hidden" value="<?= $value->id_universitas ?>" >
                                                <input type="text" placeholder="Nama Universitas" name="nm_universitas" id="nm_universitas" class="form-control" required value="<?= $value->nm_universitas ?>"> <br>
                                            </div>
                                            <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>                                
                                                <select class="form-control" name="wilayah">
                                                    <?php if ($value->wilayah == "1") { ?>
                                                        <option value="1" selected>Wilayah 1</option>
                                                        <option value="2" >Wilayah 2</option>
                                                        <option value="3" >Wilayah 3</option>
                                                        <option value="4" >Wilayah 4</option>
                                                    <?php } else if ($value->wilayah == "2") { ?>
                                                        <option value="1" >Wilayah 1</option>
                                                        <option value="2" selected >Wilayah 2</option>
                                                        <option value="3" >Wilayah 3</option>
                                                        <option value="4" >Wilayah 4</option>
                                                    <?php } else if ($value->wilayah == "3") { ?>
                                                        <option value="1" >Wilayah 1</option>
                                                        <option value="2" >Wilayah 2</option>
                                                        <option value="3" selected>Wilayah 3</option>
                                                        <option value="4" >Wilayah 4</option>
                                                    <?php } else if ($value->wilayah == "4") { ?>
                                                        <option value="1" >Wilayah 1</option>
                                                        <option value="2" >Wilayah 2</option>
                                                        <option value="3" >Wilayah 3</option>
                                                        <option value="4" selected>Wilayah 4</option>
                                                    <?php } ?>
                                                </select>
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
                    <?php } ?>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php $this->load->view('modular/footer') ?>
<script type="text/javascript" language="javascript">

    $(document).ready(function () {
        $('#example').DataTable();
    });

</script>
