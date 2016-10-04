<?php $this->load->view('modular/header') ?>
<style>
    #pertanyaan{
        padding-top: 10px;
    }
</style>
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
                <?php echo form_open_multipart('Soal/tambahSoal'); ?>     
                <div class="col-lg-6" id="pertanyaan">
                    <h3>Pertanyaan</h3>
                    <label>Gambar</label><img id="preview" src="#"> <input type="file" name="gambar" id="gambar">
                    <textarea name="soal" id="editor1"></textarea>
                </div>
                <div class="form-group input-group col-lg-6" style="padding-top: 25px">
                    <div class="form-group input-group">
                        <span class="input-group-addon">A</span>
                        <textarea name="pilihan_a" placeholder="Pilihan A" class="form-control"></textarea>
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon">B</span>
                        <textarea name="pilihan_b" placeholder="Pilihan B" class="form-control"></textarea>
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon">C</span>
                        <textarea name="pilihan_c" placeholder="Pilihan C" class="form-control"></textarea>
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon">D</span>
                        <textarea name="pilihan_d" placeholder="Pilihan D" class="form-control"></textarea>
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon">E</span>
                        <textarea name="pilihan_e" id="pilihan_e" placeholder="Pilihan E" class="form-control"></textarea>
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
    <input type="hidden" value="<?= base_url() ?>" id="base-url">
</div><!-- /.content-wrapper -->
<?php $this->load->view('modular/footer') ?>
<script type="text/javascript" language="javascript">
    var base_url = $('#base-url').val();
    CKEDITOR.replace('editor1');
    
    function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#preview').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#gambar").change(function(){
    readURL(this);
});
</script>

