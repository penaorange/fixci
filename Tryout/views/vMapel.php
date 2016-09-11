<?php $this->load->view('modular/header') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Mata Pelajaran
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Try Out</li>
            <li class="active">Mata Pelajaran</li>
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
                <h3 class="box-title">Daftar Mata Pelajaran TO</h3>
                <div class="pull-right">
                    <!--<a href = "#" type="button"  data-toggle="modal" data-target="#myModal"><span class=" fa fa-plus"></span></a>-->
                    <!--<a data-toggle="modal" class="btn btn-info"  data-target="#myModal">Tambah</a>-->
                    <a href="<?= site_url('Tryout') ?>" class="btn btn-default">Kembali</a>
                    <a data-toggle="modal" class="btn btn-info"  data-target="#myModal">Tambah</a>
                    <!-- Modal -->
                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="example" class="table table-bordered table-striped" style="text-align: center">
                    <thead>
                        <tr>
                            <th style="text-align: center">ID</th>
                            <th style="text-align: center">Mata Pelajaran</th>
                            <th style="text-align: center">Jumlah Soal</th>
                            <th style="text-align: center">Waktu</th>
                            <th style="text-align: center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mapel as $value) { ?>
                            <tr>
                                <td><?= $value->id_mapel; ?></td>
                                <td><?= $value->nm_mapel; ?></td>
                                <td><?= $value->jml_soal; ?></td>
                                <td><?= $value->waktu; ?></td>
                                <td> <a data-toggle="modal" class="btn btn-danger"  data-target="#delete<?= $value->id_transaksi ?>">Hapus</a></td>
                            </tr>
                            <!--modal delete data-->
                        <div class="modal fade" id="delete<?= $value->id_transaksi ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
                                    </div>

                                        <form action="<?= site_url('Tryout/hapusTransaksi') ?>?id=<?= $value->id_transaksi ?>" method="post">
                                        <div class="modal-body">
                                            <div class="form-group input-group">
                                                <input name="id_tryout" type="hidden" value="<?= $value->id_tryout ?>" >
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
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Tambah Mata Pelajaran</h4>
            </div>

            <form action="<?= site_url('Tryout/tambahMapelTo') ?>" method="post">
                <div class="modal-body">
                    <table id="example10" class="table table-bordered table-striped" style="text-align: center">
                        <thead>
                            <tr>
                                <th style="text-align: center">ID</th>
                                <th style="text-align: center">Mata Pelajaran</th>
                                <th style="text-align: center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($mapelAll as $value) { ?>
                                <tr>
                                    <td><?= $value->id_mapel; ?></td>
                                    <td><?= $value->nm_mapel; ?></td>
                                    <td><a href="<?= site_url('Tryout/tambahMapelTo'); ?>?to=<?= $this->uri->segment(3); ?>&id=<?= $value->id_mapel; ?>" class="btn btn-sm btn-info">Tambah</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
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

    $(document).ready(function () {
        $('#example10').DataTable();
    });
</script>
