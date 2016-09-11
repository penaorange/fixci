<?php $this->load->view('modular/header') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Jawaban
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Jawaban</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row"></div>
        <!-- Main row -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Pilih Try Out</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped " style="text-align: center">
                    <thead >
                        <tr>
                            <th style="text-align: center">Try Out</th> 
                            <th style="text-align: center">Kelompok Ujian</th> 
                            <th style="text-align: center">Peserta Trial</th> 
                            <th style="text-align: center;">Peserta Berbayar</th> 
                            <th style="text-align: center;">Peserta Bimbel</th> 
                            <th style="text-align: center;">Tanggal</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($tryout as $jawab) { ?>
                        <tr>
                            <td><a href=""</a></td>
                                <td><?= $jawab->id_kelompok_ujian ?></td>
                                <td>0</td>
                                <td>0</td>  
                                <td>0</td>
                                <td><?php $tgl=$jawab->tanggal_ujian;$exp = explode('-', $tgl);if (count($exp) == 3) {$tgl = $exp[2] . '-' . $exp[1] . '-' . $exp[0];}echo  $tgl;?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
        </section><!-- /.content -->
        <?php if (isset($_GET['idTryOut'])){?>
    <section class="content">
        
        <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-link"></i></span>
                                    <select class="form-control">
                                        <option>IPA</option>
                                        <option>IPS</option>
                                        <option>IPC</option>
                                    </select>
                                </div>
        <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                    <select class="form-control">
                                        <option>Matematika</option>
                                        <option>Kimia</option>
                                        <option>Fisika</option>
                                    </select>
                                </div>
        <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                    <select class="form-control">
                                        <option>Trial</option>
                                        <option>Berbayar</option>
                                        <option>Bimbel</option>
                                    </select>
                                </div>
        <!-- Small boxes (Stat box) -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Daftar Peserta</h3>
                <div class="pull-right">
                    <!--<a href="#"><span class=" fa fa-plus"></span></a>-->
                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped" style="text-align: center">
                    <thead>
                        <tr>
                            <th style="text-align: center">Id Peserta</th>
                            <th style="text-align: center">Nama Peserta</th>
                            <th style="text-align: center">Jawaban Benar</th>                
                            <th style="text-align: center">Jawaban Salah</th>                
                            <th style="text-align: center">Tidak Menjawab</th>                
                            <th style="text-align: center">Nilai</th>                
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $array = array('Matematika', 'Kimia', 'Fisika');
                        $arrays =array('Agung budi','jajang mulayana','irma wibisono','ade sucipta','Dewi puspa','Dini asyesha');
                        for ($i = 0; $i < 3; $i++) {
                            ?>
                        <tr>
                               <td><?= $i +1?></td>
                                <td><?= $arrays[$i];?></td>
                                <td>15</td>
                                <td>5</td>
                                <td>5</td>
                                <td>80</td>
                            </tr>
<?php } ?>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div>  
        <!-- Main row -->
        <div class="row">
        </div>
    </section><!-- /.content -->
    <?php } ?>
</div><!-- /.content-wrapper -->
<?php $this->load->view('modular/footer') ?>
