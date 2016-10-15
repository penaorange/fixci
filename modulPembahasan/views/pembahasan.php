<?php $this->load->view('modular/header') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Modul Pembahasan
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('Dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Modul Pembahasan</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Daftar Modul</h3>
                <div class="pull-right">
                    <!--<a href = "#" type="button"  data-toggle="modal" data-target="#myModal"><span class=" fa fa-plus"></span></a>-->
                    <a data-toggle="modal" class="btn btn-default"  data-target="#myModal">Tambah</a>
                    <!-- Modal -->
                </div>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Upload Modul</h4>
                            </div>
                            <?php echo form_open_multipart('modulPembahasan/upload') ?>
                            <div class="modal-body">
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-adn"></i></span>
                                    <input name="nama" type="text" class="form-control" placeholder="Nama Modul" required> <br>
                                </div>
                                <!--<div class="form-group input-group">-->
                                    <!--<span class="input-group-addon"><i class="fa fa-calendar"></i></span>-->
                                <input name="upload_time" type="hidden" class="form-control"> <br>
                                <!--</div>-->

                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-users"></i></span>                                
                                    <select class="form-control" name="kelompokujian">
                                        <option> Pilih Kelompok Ujian</option>
                                        <option value="1">IPA</option>
                                        <option value="2">IPS</option>
                                        <option value="3">IPC</option>
                                    </select>
                                </div>
                                <div class="form-group input-group">
                                   <!--<span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>-->
                                    <input type="file" name="modul" class="col-lg-offset-8">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Upload</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                            </div>
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
        </div><!-- /.box -->
        <div class="row">
            <div class="col-md-12">
                <div class="nav-tabs-custom">
                    <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                            <table id="example" class="table table-bordered table-striped " style="text-align: center">
                                <thead >
                                    <tr> 
                                        <th></th>
                                        <th style="text-align: center">Id Modul</th> 
                                        <th style="text-align: center">Nama Modul</th> 
                                        <th style="text-align: center;">Tanggal upload</th>  
                                        <th style="text-align: center"></th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($modul as $value) {
                                        ?>
                                        <tr>
                                            <td><a href="#" data-toggle="modal" onclick="openModal('#delete', 'hapus',<?= $value->id ?>)"><span class="fa fa-close"></span></a></td>
                                            <td><?= $value->id ?></td>
                                            <td><?= $value->nama ?></td>  
                                            <td><?php
                                                $tgl = $value->upload_time;
                                                $exp = explode('-', $tgl);
                                                if (count($exp) == 3) {
                                                    $tgl = $exp[2] . '-' . $exp[1] . '-' . $exp[0];
                                                }echo $tgl;
                                                ?></td>
                                            <td><a class="btn btn-info" target="_blank" href="<?= base_url() ?><?= $value->url ?>"><i></i>Lihat</a></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table> 
                        </div>
                        <!-- /.tab-pane -->
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
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
            </div>
            <form action="" method="post" class="form-delete">

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
<input type="hidden" id="base-url" value="<?= base_url() ?>">
<!-- /.content-wrapper -->
<?php $this->load->view('modular/footer'); ?>
<script type="text/javascript" language="javascript">

    $(document).ready(function () {
        $('#example').DataTable();
    });

    var base_url = $('#base-url').val();
    function openModal(target, type, id) {
        if (type == 'hapus') {
            $('.form-delete').attr('action','modulPembahasan/hapusModul/'+id);

//            $.ajax({
//                url: base_url + 'modulPembahasan/hapusModul/' + id,
//                type: 'POST',
//                success: function (res) {
//                    res = $.parseJSON(res);
//                    window.location.reload();
//                },
//                error: function (jqXHR, exception) {
//                    $('#modal-notif .block-content p').text(jqXHR.status);
//                    $('#modal-notif').modal('show');
//                },
//            });
        }
        $(target).modal('show');
    }
</script>

