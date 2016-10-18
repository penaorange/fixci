<?php $this->load->view('PesertaModular/Free/Header'); ?>
<!-- start-modular -->

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Pilih Mata Pelajaran</h4>
                        <p class="category">Klik untuk melihat detail</a></p>
                    </div>
                    <div class="content all-icons">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">


                                <div class="list-group">
                                    <?php if (empty($detail_tryout)): ?>
                                        <div class="alert alert-warning">
                                            <strong><i class="fa fa-exclamation"></i> Warning - </strong>data yang anda cari Tidak Tersedia!
                                        </div>
                                    <?php else: ?>
                                        <?php foreach ($detail_tryout as $key): ?>

                                            <!-- <a class="list-group-item btn" data-toggle="modal" data-target="#modalDetail"
                                               data-id="<?php echo $key->id_mapel; ?>" data-idtrans="<?php echo $key->id_transaksi; ?>" data-idto="<?php echo $key->id_tryout; ?>" data-nama="<?php echo $key->nm_mapel; ?>"
                                               data-jumlah="<?php echo $key->jml_soal; ?>" data-waktu="<?php echo $key->waktu; ?>" <?php foreach ($hasil_nilai as $hasil): ?><?php if ($hasil->id_mapel == $key->id_mapel): ?>disabled<?php endif; ?><?php endforeach; ?>>
                                              <h4 class="list-group-item-heading"><i class="fa fa-circle"></i> <?php echo $key->nm_mapel; ?></h4>
                                            </a> -->

                                            <div class="col-md-4">
                                                <div class="panel panel-primary">
                                                    <div class="panel-body">
                                                        <p><i class="fa fa-pencil-square" style="color:#428bca;"></i> <b><?php echo $key->nm_mapel; ?></b></p>
                                                    </div>
                                                    <div class="panel-footer">
                                                        <button type="button" class="btn btn-primary btn-fill btn-block <?php foreach ($hasil_nilai as $hasil): ?><?php if ($hasil->id_mapel == $key->id_mapel): ?>btn-warning<?php endif; ?><?php endforeach; ?>" data-toggle="modal" data-target="#modalDetail"
                                                                data-id="<?php echo $key->id_mapel; ?>" data-idtrans="<?php echo $key->id_transaksi; ?>" data-idto="<?php echo $key->id_tryout; ?>" data-nama="<?php echo $key->nm_mapel; ?>"
                                                                data-jumlah="<?php echo $key->jml_soal; ?>" data-waktu="<?php echo $key->waktu; ?>" <?php foreach ($hasil_nilai as $hasil): ?><?php if ($hasil->id_mapel == $key->id_mapel): ?>disabled<?php endif; ?><?php endforeach; ?>>Detail <i class="fa fa-arrow-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>


                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>

                                <!--<h1><?php echo $id_tryout; ?>   </h1>-->

                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Pilih Universitas Tujuan</h4>
                        </div>
                        <div class="content all-icons">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <form action="<?= base_url('index.php/peserta_free/nilaitryout'); ?>" method="post">
                                        <label>pilihan 1</label>
                                        <div class="">
                                            <div class="col-sm-2 col-md-2">
                                                <select class="form-control" id="wilayah" required>
                                                    <option>Wilayah</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4 col-md-4">
                                                <select class="form-control" id="universitas" required></select>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <select class="form-control" name="pilihan1" id="prodi" required></select>
                                                <input type="hidden" name="idtryout" value="<?php echo $id_tryout; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-md-offset-10">
                                            <button type="submit" class="btn btn-md btn-primary">Kirim Hasil Tryout</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<input type="hidden" id="base-url" value="<?= base_url() ?>">
<input type="hidden" id="kelompok-keilmuan" value="<?= $kk ?>" >
<!-- end modular -->
<?php $this->load->view('PesertaModular/Free/Footer'); ?>
<script>
    var base_url = $('#base-url').val();
    $('#wilayah').on('change', function () {
        var wilayah = $('#wilayah').val();
        $.ajax({
            url: base_url + 'Peserta_free/getUniversitas/' + wilayah,
            type: 'POST',
            success: function (res) {
                res = $.parseJSON(res);
                $('#universitas').removeAttr('disabled');
                $('option').remove('#universitasOption');
                $('option').remove('#prodiOption');
                $.each(res.universitas, function (key, value) {
                    $('#universitas').append("<option id='universitasOption' class='form-control' value='" + value.id_universitas + "'>" + value.nm_universitas + "</option>");
                })
            },
            error: function (jqXHR, exception) {
                alert('gagal');
            },
        });
    }
    )
    $('#universitas').on('change', function () {
        var universitas = $('#universitas').val();
        var kelompokKeilmuan = $('#kelompok-keilmuan').val();
        $.ajax({
            url: base_url + 'Peserta_free/getProdi/' + universitas +'/'+kelompokKeilmuan ,
            type: 'POST',
            success: function (res) {
                res = $.parseJSON(res);
                $('#prodi').removeAttr('disabled');
                $('option').remove('#prodiOption');
                $.each(res.prodi, function (key, value) {
                    $('#prodi').append("<option id='prodiOption' class='form-control' value='" + value.id_prodi + "'>" + value.nm_prodi + "</option>");
                })
            },
            error: function (jqXHR, exception) {
                alert('gagal');
            },
        });
    }
    )
</script>

<!-- Modal -->
<div class="modal fade modal-v2" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="col-md-3 modal-content-left">
                <p class="modal-content-l
                   eft-text-1" align="center" style="color:#ddd;">Detail</p>
                <b class="modal-content-left-percent">
                    <i class="fa fa-search fa-2x"></i>
                </b>
            </div>
            <div class="col-md-9 modal-content-right">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <hr>
                <form action="<?php echo site_url('soal-TO-free'); ?>" method="post">
                    <input type="hidden" name="id" id="id" />
                    <input type="hidden" name="idTo" id="idTo" />
                    <input type="hidden" name="idTrans" id="idtrans" />
                    <input type="hidden" name="waktu" id="waktu" />
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Mata Pelajaran</div>
                            <input type="text" class="modal-content-right-text-mail" name="matkul" id="matkul" disabled/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Jumlah Soal</div>
                            <input type="text" class="modal-content-right-text-mail" name="jumlah" id="jumlah" disabled/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Durasi</div>
                            <input type="text" class="modal-content-right-text-mail" name="waktu" id="waktu" disabled/>
                        </div>
                    </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary btn-fill">Mulai Kerjakan</button>
            </div>

            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
