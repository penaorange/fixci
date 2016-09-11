<?php $this->load->view('modular/header') ?>

<script src="//cdn.ckeditor.com/4.5.10/full/ckeditor.js"></script>


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
            <?php foreach ($jumlah_soal as $jml) {?>
                <?php  if ($jml == null) {?>
                  <h3 class="box-title">Soal ke 1</h3>
                  <hr>
                <?php }else{ ?>
                <h3 class="box-title">Soal ke <?= $jml->jumlah_soal+1?></h3>
                <hr>
              <?php }
              
            } ?>
                <?php echo form_open('Soal/tambahSoal'); ?>
                		       <div class="form-group input-group">
                                       	   <textarea name="soal" id="editor1"></textarea>
                                       <br>
	                                        <div class="form-group input-group">
	                                            <span class="input-group-addon"><i class="fa fa-users"></i></span>
	                                            <input name="pilihan_a" placeholder="Pilihan A" type="text" class="form-control" required> <br>
	                                        </div>
	                                        <div class="form-group input-group">
	                                            <span class="input-group-addon"><i class="fa fa-users"></i></span>
	                                            <input name="pilihan_b" type="text" placeholder="Pilihan B" class="form-control" required>
	                                        </div>
	                                        <div class="form-group input-group">
	                                            <span class="input-group-addon"><i class="fa fa-users"></i></span>
	                                            <input name="pilihan_c" type="text" placeholder="Pilihan C" class="form-control" required>

	                                        </div>
	                                        <div class="form-group input-group">
	                                            <span class="input-group-addon"><i class="fa fa-users"></i></span>
	                                            <input name="pilihan_d" type="text" placeholder="Pilihan D" class="form-control" required>
	                                        </div>
	                                        <div class="form-group input-group">
	                                            <span class="input-group-addon"><i class="fa fa-users"></i></span>
	                                            <input name="pilihan_e" type="text" placeholder="Pilihan E" class="form-control" required>
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
                                            <a href="<?= site_url() ?>/Soal" class="btn btn-default">Kembali</a>
                                                    <input type="hidden" name="id_mapel" value="<?= $this->uri->segment(3); ?>">
	                                            <button type="submit" class="btn btn-primary">Tulis</button>
	                                        </div>
                                        </div>

                                <?php echo form_close(); ?>
            </div><!-- /.box-header -->

        </div>

    </section><!-- /.content -->

</div><!-- /.content-wrapper -->
<?php
$this->load->view('modular/footer')?>
<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
<script type="text/javascript" language="javascript">

    $(document).ready(function () {
        $('#example').DataTable();
    });

</script>
