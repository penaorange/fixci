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
                    <!--<a href = "#" type="button"  data-toggle="modal" data-target="#myModal"><span class=" fa fa-plus"></span></a>-->
                    <!--<a data-toggle="modal" class="btn btn-default"  data-target="#myModal">Tambah</a>-->
                    <!-- Modal -->
                </div>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Tambah Try Out</h4>
                            </div>

                            <form action="<?= site_url('Tryout/tambahTryout') ?>" method="post">
                                <div class="modal-body">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-adn"></i></span>
                                        <input name="nm_to" type="text" class="form-control" placeholder="Nama Tryout" required> <br>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input name="tanggal" type="date" min="<?= date('Y-m-d'); ?>" class="form-control" placeholder="tahun/bulan/tanggal" required> <br>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                                        <select class="form-control" name="jenis_to">
                                            <option> Pilih Jenis TO</option>
                                            <option value="1">TRIAL</option>
                                            <option value="2">BERBAYAR</option>
                                            <option value="3">BIMBEL</option>
                                        </select>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-users"></i></span>                                
                                        <select class="form-control" name="kelompokujian">
                                            <option> Pilih Kelompok Ujian</option>
                                            <option value="1">IPA</option>
                                            <option value="2">IPS</option>
                                            <option value="3">IPC</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Ya</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
        </div><!-- /.box -->
        <div class="row">
            <div class="col-md-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#activity" data-toggle="tab">Trial</a></li>
                        <li><a href="#berbayar" data-toggle="tab">Berbayar</a></li>
                        <li><a href="#bimbel" data-toggle="tab">Bimbel</a></li>
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
                                <td>1</td>
                                <td>Rizqon</td>
                                <td>800</td>
                                <td>Lulus</td>
                                <td>Lulus</td>
                                <td>Lulus</td>    
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

