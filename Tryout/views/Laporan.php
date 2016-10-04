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
                    <a  href="<?= base_url() ?>Tryout/excelfiles/<?= $this->uri->segment(3);?>/<?= $this->uri->segment(4) ?>"class="btn btn-info">Ekspor Excel</a>
                </div>
            </div>
            <!-- /.box-header -->
        </div><!-- /.box -->
        <div class="row">
            <div class="col-md-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                            <table id="example" class="table table-bordered table-striped " style="text-align: center">
                                <thead >
                                    <tr> 
                                        <th style="text-align: center">Id Peserta</th>
                                        <th style="text-align: center">Nama Peserta</th> 
                                        <th style="text-align: center;">Total Nilai</th> 
                                        <th style="text-align: center">PILIHAN 1</th> 
                                        <th style="text-align: center">PILIHAN 2</th> 
                                        <th style="text-align: center">PILIHAN 3</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php foreach ($jawaban as $value) { ?>
                                    <tr>
                                    <td>1</td>
                                    <td><?= $value->nm_peserta ?></td>
                                    <td><?= $value->nilai_to ?></td>
                                    <td><?= $value->pilihan1 ?></td>
                                    <td><?= $value->pilihan2 ?></td>
                                    <td><?= $value->pilihan3 ?></td>
                                    </tr>
                                <?php } ?>
                                    
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

