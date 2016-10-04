<?php $this->load->view('modular/header') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Try Out
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('Dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Try Out</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Daftar Try Out</h3>
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
                                <h4 class="modal-title" id="myModalLabel">Tambah Try Out</h4>
                            </div>

                            <form action="<?= site_url('Tryout/tambahTryout') ?>" method="post">
                                <div class="modal-body">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-adn"></i></span>
                                        <input name="nm_to" type="text" class="form-control" placeholder="Nama Tryout" required> <br>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input name="tanggal" type="date" min="<?= date('Y-m-d'); ?>" class="form-control" placeholder="tahun/bulan/tanggal" required> <br>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                                        <select class="form-control" name="jenis_to">
                                            <option> Pilih Jenis TO</option>
                                            <option value="1">TRIAL</option>
                                            <option value="2">BERBAYAR</option>
                                            <option value="3">BIMBEL</option>
                                        </select>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-users"></i></span>                                
                                        <select class="form-control" name="kelompokujian">
                                            <option> Pilih Kelompok Ujian</option>
                                            <option value="1">IPA</option>
                                            <option value="2">IPS</option>
                                            <option value="3">IPC</option>
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
            </div>
            <!-- /.box-header -->
        </div><!-- /.box -->
        <div class="row">
            <div class="col-md-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#activity" data-toggle="tab">Trial</a></li>
                        <li><a href="#berbayar" data-toggle="tab">Berbayar</a></li>
                        <li><a href="#bimbel" data-toggle="tab">Bimbel</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                            <table id="example" class="table table-bordered table-striped " style="text-align: center">
                                <thead >
                                    <tr> 
                                        <th></th>
                                        <th style="text-align: center">Nama TryOut</th> 
                                        <th style="text-align: center">Kelompok Keilmuan</th> 
                                        <th style="text-align: center;">Tanggal</th>  
                                        <th style="text-align: center">Kelompok Peserta</th> 
                                        <th style="text-align: center">Mata Pelajaran</th> 
                                        <th style="text-align: center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($tryouttrial as $value) {
                                        ?>
                                        <tr>
                                            <td><a href="#" data-toggle="modal" data-target="#delete<?= $value->id_tryout ?>"><span class="fa fa-close"></span></a></td>
                                            <td><?= $value->nm_tryout; ?></td>
                                            <td><?php
                                                if ($value->to_kk == '1') {
                                                    echo "IPA";
                                                } else if ($value->to_kk == '2') {
                                                    echo "IPS";
                                                } else {
                                                    echo "IPC";
                                                }
                                                ?></td>  
                                            <td><?php
                                                $tgl = $value->tgl_to;
                                                $exp = explode('-', $tgl);
                                                if (count($exp) == 3) {
                                                    $tgl = $exp[2] . '-' . $exp[1] . '-' . $exp[0];
                                                }echo $tgl;
                                                ?>
                                            </td>
                                            <td><?php
                                                if ($value->to_kp == '1') {
                                                    echo "TRIAL";
                                                } else if ($value->to_kp == '2') {
                                                    echo "BERBAYAR";
                                                } else {
                                                    echo "BIMBEL";
                                                }
                                                ?></td>
                                            <td><a href="<?= site_url('Tryout/tampilMapel/' . $value->id_tryout); ?>" class="btn btn-default">Lihat</a></td>
                                            <td><a class="btn btn-info"><i></i>Edit</a>&nbsp;&nbsp;<a href="Tryout/laporan/<?= $value->id_tryout ?>/<?= $value->to_kp ?>" class="btn btn-primary">Laporan</a></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table> 
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="berbayar">
                            <table id="example1" class="table table-bordered table-striped " style="text-align: center">
                                <thead >
                                    <tr> 
                                        <th></th>
                                        <th style="text-align: center">Nama TryOut</th> 
                                        <th style="text-align: center">Kelompok Keilmuan</th> 
                                        <th style="text-align: center;">Tanggal</th>  
                                        <th style="text-align: center">Kelompok Peserta</th> 
                                        <th style="text-align: center">Mata Pelajaran</th> 
                                        <th style="text-align: center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($tryoutberbayar as $value) {
                                        ?>
                                        <tr>
                                            <td><a href="#" data-toggle="modal" data-target="#delete<?= $value->id_tryout ?>"><span class="fa fa-close"></span></a></td>
                                            <td><?= $value->nm_tryout; ?></td>
                                            <td><?php
                                                if ($value->to_kk == '1') {
                                                    echo "IPA";
                                                } else if ($value->to_kk == '2') {
                                                    echo "IPS";
                                                } else {
                                                    echo "IPC";
                                                }
                                                ?></td>  
                                            <td><?php
                                                $tgl = $value->tgl_to;
                                                $exp = explode('-', $tgl);
                                                if (count($exp) == 3) {
                                                    $tgl = $exp[2] . '-' . $exp[1] . '-' . $exp[0];
                                                }echo $tgl;
                                                ?>
                                            </td>
                                            <td><?php
                                                if ($value->to_kp == '1') {
                                                    echo "TRIAL";
                                                } else if ($value->to_kp == '2') {
                                                    echo "BERBAYAR";
                                                } else {
                                                    echo "BIMBEL";
                                                }
                                                ?></td>
                                            <td><a href="<?= site_url('Tryout/tampilMapel/' . $value->id_tryout); ?>" class="btn btn-default">Lihat</a></td>
                                            <td><a data-toggle="modal" data-target="#update<?= $value->id_tryout ?>" class="btn btn-info"><i></i>Edit</a></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="bimbel">
                            <table id="example2" class="table table-bordered table-striped " style="text-align: center">
                                <thead >
                                    <tr> 
                                        <th></th>
                                        <th style="text-align: center">Nama TryOut</th> 
                                        <th style="text-align: center">Kelompok Keilmuan</th> 
                                        <th style="text-align: center;">Tanggal</th>  
                                        <th style="text-align: center">Kelompok Peserta</th> 
                                        <th style="text-align: center">Mata Pelajaran</th> 
                                        <th style="text-align: center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($tryoutbimbel as $value) {
                                        ?>
                                        <tr>
                                            <td><a href="#" data-toggle="modal" data-target="#delete<?= $value->id_tryout ?>"><span class="fa fa-close"></span></a></td>
                                            <td><?= $value->nm_tryout; ?></td>
                                            <td><?php
                                                if ($value->to_kk == '1') {
                                                    echo "IPA";
                                                } else if ($value->to_kk == '2') {
                                                    echo "IPS";
                                                } else {
                                                    echo "IPC";
                                                }
                                                ?></td>  
                                            <td><?php
                                                $tgl = $value->tgl_to;
                                                $exp = explode('-', $tgl);
                                                if (count($exp) == 3) {
                                                    $tgl = $exp[2] . '-' . $exp[1] . '-' . $exp[0];
                                                }echo $tgl;
                                                ?>
                                            </td>
                                            <td><?php
                                                if ($value->to_kp == '1') {
                                                    echo "TRIAL";
                                                } else if ($value->to_kp == '2') {
                                                    echo "BERBAYAR";
                                                } else {
                                                    echo "BIMBEL";
                                                }
                                                ?></td>
                                            <td><a href="<?= site_url('Tryout/tampilMapel/' . $value->id_tryout); ?>" class="btn btn-default">Lihat</a></td>
                                            <td><a data-toggle="modal" data-target="#update<?= $value->id_tryout ?>" class="btn btn-info"><i></i>Edit</a></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
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

<?php
foreach ($tryout as $value) {
    ?>
    <div class="modal fade" id="delete<?= $value->id_tryout ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
                </div>
                <form action="<?= site_url('Tryout/hapusTO') ?>?id=<?= $value->id_tryout ?>" method="post">
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

    <div class="modal fade" id="update<?= $value->id_tryout ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Rubah Try Out</h4>
                </div>

                <form action="<?= site_url('Tryout/ubahTO') ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-university"></i></span>
                            <input type="text" placeholder="Nama TO" name="nm_to" id="nm_to" class="form-control" required value="<?= $value->nm_tryout; ?>"> <br>
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-university"></i></span>
                            <input name="id" type="hidden" value="<?= $value->id_tryout ?>" >
                            <input type="date" placeholder="Tanggal TO" name="tanggal_ujian" id="tanggal_ujian" class="form-control" required value="<?= $value->tgl_to; ?>"> <br>
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>                                
                            <select class="form-control" name="jenis_to" required>
                                <?php if ($value->to_kp == "1") { ?>
                                    <option value="1" selected>TRIAL</option>
                                    <option value="2" >BERBAYAR</option>
                                    <option value="3" >BIMBEL</option>
                                <?php } else if ($value->to_kp == "2") { ?>
                                    <option value="1" >TRIAL</option>
                                    <option value="2" selected>BERBAYAR</option>
                                    <option value="3" >BIMBEL</option>
                                <?php } else { ?>
                                    <option value="1" >TRIAL</option>
                                    <option value="2" >BERBAYAR</option>
                                    <option value="3" selected>BIMBEL</option>
                                <?php } ?>
                            </select>  
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-users"></i></span>                                
                            <select class="form-control" name="kelompokujian">
                                <?php if ($value->to_kk == "1") { ?>
                                    <option> Pilih Kelompok Ujian</option>
                                    <option selected value="1">IPA</option>
                                    <option value="2">IPS</option>
                                    <option value="3">IPC</option>
                                <?php } else if ($value->to_kk == "2") { ?>
                                    <option> Pilih Kelompok Ujian</option>
                                    <option value="1">IPA</option>
                                    <option selected value="2">IPS</option>
                                    <option value="3">IPC</option>
                                <?php } else { ?>
                                    <option> Pilih Kelompok Ujian</option>
                                    <option value="1">IPA</option>
                                    <option value="2">IPS</option>
                                    <option selected value="3">IPC</option>
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
    <?php
}
?>
<!-- /.content-wrapper -->
<?php $this->load->view('modular/footer'); ?>
<script type="text/javascript" language="javascript">

    $(document).ready(function () {
        $('#example').DataTable();
    });

    $(document).ready(function () {
        $('#example1').DataTable();
    });

    $(document).ready(function () {
        $('#example2').DataTable();
    });
</script>

