<?php $this->load->view('modular/header') ?>
<script src="<?= base_url() ?>assets/ckeditor/ckeditor.js"></script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Soal
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
                <?php $idSoal = $this->uri->segment(3); ?>
                <?php echo form_open('Soal/editSoal/' . $idSoal); ?>
                <?php foreach ($soal as $data): ?>
                    <div class="col-lg-6">
                        <textarea name="soal" id="editor1"><?= $data->soal ?></textarea>
                        <br>
                    </div>
                <div class="form-group input-group col-lg-6" style="padding-top: 25px">
                        <div class="form-group input-group">
                            <span class="input-group-addon">A</span>
                            <input name="pilihan_a" placeholder="Pilihan A" type="text" value="<?= $data->pilihan_a ?>" class="form-control" required> <br>
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon">B</span>
                            <input name="pilihan_b" type="text" placeholder="Pilihan B" value="<?= $data->pilihan_b ?>" class="form-control" required>
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon">C</span>
                            <input name="pilihan_c" type="text" placeholder="Pilihan C" value="<?= $data->pilihan_c ?>" class="form-control" required>
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon">D</span>
                            <input name="pilihan_d" type="text" placeholder="Pilihan D" value="<?= $data->pilihan_d ?>" class="form-control" required>
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon">E</span>
                            <input name="pilihan_e" type="text" placeholder="Pilihan E" value="<?= $data->pilihan_e ?>" class="form-control" required>
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
                            <a href="<?= site_url() ?>/Soal/lihatSoal/<?= $data->id_mapel ?>" class="btn btn-default">Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
            </div>
                    <input name="id_soal" type="hidden" value="<?= $data->id_soal ?>">
                    <input name="id_mapel" type="hidden" value="<?= $data->id_mapel ?>">
                <?php endforeach; ?>
                <?php echo form_close(); ?>
            </div><!-- /.box-header -->
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<?php $this->load->view('modular/footer') ?>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
</script>
<script type="text/javascript" language="javascript">



    $(document).ready(function () {

        $('#example').DataTable();

    });



</script>

