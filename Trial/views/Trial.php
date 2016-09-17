<?php $this->load->view('modular/header'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Kelompok Trial
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Peserta</li>
            <li class="active">Kelompok Trial</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row"></div>
        <!-- Main row -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Daftar Peserta</h3>
                <div class="pull-right">
                    <div class="pull-right">
                        <a data-toggle="modal" class="btn btn-info"  data-target="#myModal">Tambah</a>
                    </div>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Biodata Diri</h4>
                            </div>
                            <form action="<?= site_url('Trial/tambahPeserta') ?>" method="post">

                                <div class="modal-body">

                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input name="nama" type="text" class="form-control" placeholder="Nama" required> <br>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-male"></i></span>
                                        <select class="form-control" name="jeniskelamin" required>
                                            <option> Jenis Kelamin</option>
                                            <option value="pria">Pria</option>
                                            <option value="wanita">Wanita</option>
                                        </select>

                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input name="nohp" type="text" class="form-control"  placeholder="No Handphone" required> <br>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                        <textarea name="alamat" class="form-control" placeholder="Alamat"></textarea>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input name="email" type="email" class="form-control"  placeholder="Email" required> <br>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                        <select class="form-control" name="kelompokujian" required>
                                            <option> Pilih Kelompok Ujian</option>
                                            <option value="1">IPA</option>
                                            <option value="2">IPS</option>
                                            <option value="3">IPC</option>
                                        </select>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-send"></i></span>
                                        <input name="username" type="text" class="form-control"  placeholder="Username"  required> <br>
                                    </div>

                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                                        <input name="password" type="password" class="form-control"  placeholder="Password"  required> <br>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <table id="example" class="table table-bordered table-striped" style="text-align: center">
                    <thead>
                        <tr>
                            <th></th>
                            <th style="text-align: center">Id peserta</th>
                            <th style="text-align: center">Nama Peserta</th>
                            <th style="text-align: center">Jenis Kelamin</th>
                            <th style="text-align: center">No HP</th>
                            <th style="text-align: center">Kelompok Ujian</th>
                            <th style="text-align: center">Mengikuti Try Out</th>
                            <th style="text-align: center">Konfirmasi Email</th>
                            <th style="text-align: center">Ubah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($peserta as $value) {
                            ?>
                            <tr>
                                <td><button onclick="openModal('#hapus-peserta','hapus',<?= $value->id_peserta?>)"><span class="fa fa-close"></span></button></td>
                                <td><?= $value->id_peserta; ?></td>
                                <td><a href="<?= site_url('Trial') ?>/<?= $value->id_peserta ?>"><?= $value->nm_peserta ?></a><?php
                                    if ($this->session->userdata($value->nm_peserta . $value->no_hp) != null) {
                                        echo "<span class=' glyphicon label label-primary col-lg-offset-1'>new</span>";
                                    } else {
                                        echo "";
                                    }
                                    ?></td>
                                <td><?= $value->jenis_kelamin ?></td>
                                <td><?= $value->no_hp ?></td>
                                <td><?php
                                    if ($value->id_kelompok_keilmuan == '1') {
                                        echo "IPA";
                                    } else if ($value->id_kelompok_keilmuan == '2') {
                                        echo "IPS";
                                    } else {
                                        echo "IPC";
                                    }
                                    ?></td>
                                <td>1 kali</td>
                                <td>
                                    <?php
                                    if ($value->konfirmasi == '0') {
                                        echo "Belum Valid";
                                    } else if ($value->konfirmasi == '1') {
                                        echo "Valid";
                                    }
                                    ?>
                                </td>
                                <td><a href="#" onclick="openModal('#ubah-peserta', 'update',<?= $value->id_peserta ?>)" class="btn btn-primary">Ubah</a></td>
                            </tr>
                            <?php
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
                <div class="modal fade" id="ubah-peserta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Biodata Diri</h4>
                            </div>
                            <form action="<?= site_url('Trial/ubahPeserta') ?>" method="post">
                                <div class="modal-body">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input name="nama" type="text" class="form-control" placeholder="Nama" id="nama" required> <br>
                                        <input name="id" type="hidden" id="id-peserta">
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-male"></i></span>
                                        <select class="form-control" name="jeniskelamin" required>
                                            <?php if ($value->jenis_kelamin == "pria") { ?>
                                                <option value="pria" selected>Pria</option>
                                                <option value="wanita" >Wanita</option>
                                            <?php } else { ?>
                                                <option value="pria" >Pria</option>
                                                <option value="wanita" selected >Wanita</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input name="nohp" id="no-hp" type="text" class="form-control"  placeholder="No Handphone" required> <br>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat"></textarea>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input name="email" id="email" type="email" class="form-control"  placeholder="Email" required> <br>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-check"></i></span>
                                        <select class="form-control" name="konfirmasi" required>
                                            <option value="0" id="belum-valid">Belum Valid</option>
                                            <option value="1" id="valid">Valid</option>
                                        </select>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                        <select class="form-control" name="kelompokujian" required>
                                            <option value="1" id="ipa">IPA</option>
                                            <option value="2" id="ips">IPS</option>
                                            <option value="3" id="ipc">IPC</option>
                                        </select>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-adn"></i></span>
                                        <select class="form-control" name="kelompokpeserta" required>
                                            <option value="1" id="trial">Trial</option>
                                            <option value="2" id="berbayar">Berbayar</option>
                                            <option value="3" id="bimbel">Bimbel</option>
                                        </select>
                                    </div>
                                    <input name="username" type="hidden" class="form-control" id="username" >
                                    <input name="password" type="hidden" class="form-control" id="password">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="hapus-peserta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
                            </div>

                            <form action="" method="post">
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
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </section>
</div><!-- /.col -->
<input type="hidden" value="<?= base_url() ?>" id="base-url">
<?php $this->load->view('modular/footer') ?>
<script type="text/javascript" language="javascript">
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
<script>
    var base_url = $('#base-url').val();
    function openModal(target, type, id) {
        if (type == 'update') {
            $.get(base_url + 'Trial/data/' + id, function (res) {
                res = $.parseJSON(res);
                $('#id-peserta').val(res.id_peserta);
                $('#nama').val(res.nm_peserta);
                $('#no-hp').val(res.no_hp);
                $('#alamat').val(res.alamat);
                $('#email').val(res.email);
                if (res.konfirmasi == '0') {
                    $('#belum-valid').attr('selected', selected);
                } else {
                    $('#valid').attr('selected', 'selected');
                }
                if (res.id_kelompok_keilmuan == '1') {
                    $('#ipa').attr('selected', 'selected');
                } else if (res.id_kelompok_keilmuan == '2') {
                    $('#ips').attr('selected', 'selected');
                } else {
                    $('#ipc').attr('selected', 'selected');
                }
                if (res.id_kelompok_peserta == '1') {
                    $('#trial').attr('selected', 'selected');
                } else if (res.id_kelompok_peserta == '2') {
                    $('#berbayar').attr('selected', 'selected');
                } else {
                    $('#bimbel').attr('selected', 'selected');
                }
                $('#username').val(res.username);
                $('#password').val(res.password);
            });
        }
        
        if (type == 'hapus') {
            $.ajax({
                url: base_url + 'Trial/hapusPeserta/'+id,
                type: 'POST',
                success: function (res) {
                    res = $.parseJSON(res);
                },
                error: function (jqXHR, exception) {
                    $('#modal-notif .block-content p').text(jqXHR.status);
                    $('#modal-notif').modal('show');
                },
            });
        }
        $(target).modal('show');
    }
</script>
