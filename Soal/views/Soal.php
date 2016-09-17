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
            <li class="active">Mata Pelajaran</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <?php if ($this->session->flashdata('gagal') != '') : ?>
                <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <center><?php echo $this->session->flashdata('gagal'); ?></center>
                </div>
        <?php endif; ?>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Daftar Mata Pelajaran</h3>
                <div class="pull-right">
                    <a data-toggle="modal" class="btn btn-primary"  data-target="#tambahMapel">Tambah</a>
                    <div class="modal fade" id="tambahMapel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Mata Pelajaran</h4>
                                </div>
                                <form action="<?= base_url() ?>/Soal/tambahMataPelajaran" method="post">

                                    <div class="modal-body">

                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                                            <input name="nm_mapel" type="text" id="nm-pelajaran" class="form-control" placeholder="Nama Mata Pelajaran" required> <br>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                            <input name="jml_soal" type="number" class="form-control"  placeholder="Jumlah Soal" required> <br>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                            <input name="waktu" type="number" class="form-control"  placeholder="Waktu" required> <br>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="example" class="table table-bordered table-striped" style="text-align: center">
                    <thead>
                        <tr>
                            <th style="text-align: center">Id</th>
                            <th style="text-align: center">Nama Mata Pelajaran</th>
                            <th style="text-align: center">Jumlah Soal</th>
                            <th style="text-align: center">waktu</th>
                            <th style="text-align: center">Aksi</th>
                            <th style="text-align: center">Soal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($soal as $value) { ?>
                            <tr>
                                <td><?= $value->id_mapel; ?></td>
                                <td><?= $value->nm_mapel; ?></td>
                                <td><?= $value->jml_soal ?></td>
                                <td><?= $value->waktu ?> Menit</td>
                                <td>
                                    <button class="btn btn-primary" type="button" data-toggle="modal"  onclick="openModal('#editMapel', 'update',<?= $value->id_mapel ?>)"><span class="fa fa-pencil"></span></button>
                                    <button class="btn btn-info" type="button" data-toggle="modal" onclick="openModal('#hapus-mapel', 'delete',<?= $value->id_mapel ?>)"><span class="fa fa-eraser"></span></button></td>
                                <td>
                                    <a href="<?= site_url('Soal/buatSoal/' . $value->id_mapel); ?>" onclick="cekSoal(<?= $value->jml_soal ?>,<?= $value->id_mapel ?>)" data-toggle="modal" class="btn btn-default">Buat Soal</a>
                                    <a href="<?= base_url(); ?>Soal/lihatSoal/<?= $value->id_mapel ?>"  data-toggle="modal" class="btn btn-default">Lihat Soal</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div>
        <!-- Main row -->
        <div class="row">

            <!--<input type="text" id="coba">-->

        </div>
    </section><!-- /.content -->
    <div class="modal fade" id="editMapel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Mata Pelajaran</h4>
                </div>
                <form action="" method="post" class="update-mata-pelajaran">
                    <div class="modal-body">
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                            <input name="nm_mapel" type="text" id="nm-mapel" class="form-control" placeholder="Nama Mata Pelajaran" required> <br>
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input name="jml_soal" type="number" id="jml-soal" class="form-control" placeholder="Jumlah Soal" required> <br>
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                            <input name="waktu" type="number" id="waktu" class="form-control"  placeholder="Waktu" required> <br>
                        </div>
                        <input name="id_mapel" type="hidden" id="id-mapel">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="hapus-mapel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
                </div>

                <form action="" method="post" class="hapus-mata-pelajaran">
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
    <div class="modal fade" id="notification" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Notifikasi</h4>
                </div>

                <form action="" method="post" class="hapus-mata-pelajaran">
                    <div class="modal-body">
                        <h4><center>Anda tidak dapat menambah soal, quota soal telah terpenuhi</center></h4>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Ya</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div><!-- /.content-wrapper -->
<input type="hidden" value="<?= base_url() ?>" id="base-url">
<?php $this->load->view('modular/footer') ?>
<!--<script>
    $('#editMapel').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('idMapel') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        document.getElementById('idnMapel').val(recipient)
    });
</script>-->
<script type="text/javascript" language="javascript">
    var base_url = $('#base-url').val();

    $(document).ready(function () {
        $('#example').DataTable();
    });
    function openModal(target, type, id) {
        if (type == 'update') {
            $.get(base_url + '/Soal/data/' + id, function (res) {
                res = $.parseJSON(res);
                $('.update-mata-pelajaran').attr('action', base_url + 'Soal/editMapel/' + id);
                $('#nm-mapel').val(res.nm_mapel);
                $('#jml-soal').val(res.jml_soal);
                $('#waktu').val(res.waktu);
                $('#id-mapel').val(res.id_mapel);
            });
            $(target).modal('show');
        } else if (type == 'delete') {
            $(target).modal('show');
            $('.hapus-mata-pelajaran').attr('action', base_url + 'Soal/hapusMapel/' + id);
        }
    }
    function cekSoal(jml, id) {
        $.get(base_url + '/Soal/dataMapel/' + id, function (res) {
            res = $.parseJSON(res);
            if (jml == res.jml_soal) {
                $('.update-mata-pelajaran').attr('action', base_url + 'soal/editMapel/' + id);
                $('#notification').modal('show');
            }
        });
    }
    $('.alert').fadeOut(1500,'linear');
    
</script>

