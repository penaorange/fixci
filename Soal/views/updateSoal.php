<?php $this->load->view('modular/header') ?>
<script src="//cdn.ckeditor.com/4.5.10/full/ckeditor.js"></script>
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

                <?php  $idSoal = $this->uri->segment(3); ?>

                <?php echo form_open('Soal/editSoal/'.$idSoal); ?>

<?php foreach ($soal as $data): ?>

                    <div class="form-group input-group">

                        <textarea name="soal" id="editor1"><?= $data->soal ?></textarea>

                        <br>

                        <div class="form-group input-group">

                            <span class="input-group-addon"><i class="fa fa-users"></i></span>

                            <input name="pilihan_a" placeholder="Pilihan A" type="text" value="<?= $data->pilihan_a ?>" class="form-control" required> <br>

                        </div>

                        <div class="form-group input-group">

                            <span class="input-group-addon"><i class="fa fa-users"></i></span>

                            <input name="pilihan_b" type="text" placeholder="Pilihan B" value="<?= $data->pilihan_b ?>" class="form-control" required>

                        </div>

                        <div class="form-group input-group">

                            <span class="input-group-addon"><i class="fa fa-users"></i></span>

                            <input name="pilihan_c" type="text" placeholder="Pilihan C" value="<?= $data->pilihan_c ?>" class="form-control" required>



                        </div>

                        <div class="form-group input-group">

                            <span class="input-group-addon"><i class="fa fa-users"></i></span>

                            <input name="pilihan_d" type="text" placeholder="Pilihan D" value="<?= $data->pilihan_d ?>" class="form-control" required>

                        </div>

                        <div class="form-group input-group">

                            <span class="input-group-addon"><i class="fa fa-users"></i></span>

                            <input name="pilihan_e" type="text" placeholder="Pilihan E" value="<?= $data->pilihan_e ?>" class="form-control" required>

                        </div>

                        <div class="form-group input-group">

                            <span class="input-group-addon"><i class="fa fa-users"></i></span>

                            <select class="form-control" name="jawaban_soal" required>

                                <option>Jawaban Benar</option>

                                <option value="A">A</option>

                                <option value="B">B</option>

                                <option value="C">C</option>

                                <option value="D">D</option>

                                <option value="E">E</option>

                            </select>

                        </div>

                        <div class="pull-right">

                            <a href="<?= site_url()?>/Soal/lihatSoal/<?= $data->id_mapel ?>" class="btn btn-default">Kembali</a>

                            <button type="submit" class="btn btn-primary">Simpan</button>

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
