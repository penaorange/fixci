<?php $this->load->view('modular/header') ?>
<script src="<?= base_url() ?>assets/ckeditor/ckeditor.js"></script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah Soal
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('Dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Mata Pelajaran</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="box">
            <div class="box-header">
                <?php foreach ($jumlah_soal as $jml) { ?>
                    <?php if ($jml == null) { ?>
                        <h3 class="box-title">Soal ke 1</h3>
                        <hr>
                    <?php } else { ?>
                        <h3 class="box-title">Soal ke <?= $jml->jumlah_soal + 1 ?></h3>
                        <hr>
                        <?php
                    }
                }
                ?>
                <?php echo form_open('Soal/tambahSoal'); ?>
                        <div class="col-lg-6"style="padding-top: 70px">
                    <textarea name="soal" id="editor1"></textarea>
                </div>
                <div class="form-group input-group col-lg-6" style="padding-top: 25px">
                    <div class="form-group input-group">
                        <span class="input-group-addon">A</span>
                        <!--<input name="pilihan_a" placeholder="Pilihan A" type="text" class="form-control" required>-->
                        <textarea name="pilihan_a" placeholder="Pilihan A" class="form-control"></textarea>
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon">B</span>
                        <!--<input name="pilihan_b" type="text" placeholder="Pilihan B" class="form-control" required>-->
                        <textarea name="pilihan_b" placeholder="Pilihan B" class="form-control"></textarea>
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon">C</span>
                        <!--<input name="pilihan_c" type="text" placeholder="Pilihan C" class="form-control" required>-->
                        <textarea name="pilihan_c" placeholder="Pilihan C" class="form-control"></textarea>
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon">D</span>
                        <!--<input name="pilihan_d" type="text" placeholder="Pilihan D" class="form-control" required>-->
                        <textarea name="pilihan_d" placeholder="Pilihan D" class="form-control"></textarea>
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon">E</span>
                        <!--<input name="pilihan_e" type="text" placeholder="Pilihan E" class="form-control" required>-->
                        <textarea name="pilihan_e" placeholder="Pilihan E" class="form-control"></textarea>
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-check"></i></span>
                        <select class="form-control" name="jawaban_soal" required>
                            <option>Jawaban Benar</option>
                            <option value="A">Pilihan A</option>
                            <option value="B">Pilihan B</option>
                            <option value="C">Pilihan C</option>
                            <option value="D">Pilihan D</option>
                            <option value="E">Pilihan E</option>
                        </select>
                    </div>
                    <div class="col-lg-offset-4">
                        <a href="<?= site_url() ?>/Soal" class="btn btn-default">Kembali</a>&nbsp;&nbsp;
                        <input type="hidden" name="id_mapel" value="<?= $this->uri->segment(3); ?>">
                        <button type="submit" class="btn btn-primary">Tulis</button>
                    </div>
                </div>

                <?php echo form_close(); ?>
            </div><!-- /.box-header -->

        </div>

    </section><!-- /.content -->

</div><!-- /.content-wrapper -->
<?php $this->load->view('modular/footer') ?>
<script>
    CKEDITOR.replace('editor1');
</script>
<script type="text/javascript" language="javascript">

    $(document).ready(function () {
        $('#example').DataTable();
    });

</script>
