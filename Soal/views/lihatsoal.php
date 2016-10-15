<?php $this->load->view('modular/header') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Lihat Soal
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('Dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Soal</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">
                    <?php
                    $idMapel = null;
                    foreach ($mapel as $value) {
                        echo $value->nm_mapel;
                        $idMapel = $value->id_mapel;
                        ?> - </h3>
                    <small> Kode Soal : <?php echo $value->id_mapel;
                }
                    ?></small>
                <a href="<?= site_url("Soal") ?>" class="btn btn-info pull-right">Kembali</a>
                <hr>
                <table id="example" class="table table-bordered table-striped" style="text-align: center">
                    <thead>
                        <tr>
                            <th style="text-align: center">No</th>
                            <th style="text-align: center">Soal</th>
                            <th style="text-align: center">A</th>
                            <th style="text-align: center">B</th>
                            <th style="text-align: center">C</th>
                            <th style="text-align: center">D</th>
                            <th style="text-align: center">E</th>
                            <th style="text-align: center">Jawaban</th>
                            <th style="text-align: center" width="10%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($soal as $value) {
                            ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $value->soal ?></td>
                                <td><?= $value->pilihan_a ?></td>
                                <td><?= $value->pilihan_b ?></td>
                                <td><?= $value->pilihan_c ?></td>
                                <td><?= $value->pilihan_d ?></td>
                                <td><?= $value->pilihan_e ?></td>
                                <td><?= $value->jawaban_soal ?></td>
                                <td><a href="<?= base_url(); ?>Soal/updateSoal/<?= $value->id_soal ?>"  data-toggle="modal" class="btn btn-default">Edit</a>
                                    <a href="#" onclick="openModal('#hapus-soal','hapus',<?= $value->id_soal?>)" data-toggle="modal" class="btn btn-danger">Hapus</a></td>
                            </tr>
                            <?php
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
                <a href="<?= site_url("Soal") ?>" class="btn btn-info pull-right">Kembali</a>
            </div><!-- /.box-header -->
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<div class="modal fade" id="hapus-soal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
            </div>
            <form action="#" method="post" class="hapus-soal">
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
<input type="hidden" value="<?= base_url() ?>" id="base-url">
<input type="hidden" value="<?= $this->uri->segment(3) ?>" id="id-mata-pelajaran">
<?php $this->load->view('modular/footer') ?>
<script>
    var base_url = $('#base-url').val();
    var mapel = $('#id-mata-pelajaran').val();
    function openModal(target, type, id) {
        if (type == 'hapus') {
            $('.hapus-soal').attr('action',base_url+'/Soal/hapusSoal/' + id+'/'+mapel);
        }
        $(target).modal('show');
    }
</script>