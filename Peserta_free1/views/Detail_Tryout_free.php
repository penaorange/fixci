<?php $this->load->view('PesertaModular/Free/Header'); ?>
<!-- start-modular -->

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Pilih Paket Soal Tryout</h4>
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
                                    <form>
                                        <label>pilihan 1</label>
                                        <div class="">
                                            <div class="col-sm-2 col-md-2">
                                                <select class="form-control">
                                                    <option value="">Wilayah</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4 col-md-4">
                                                <select class="form-control">
                                                    <option class="form-control" value="">Universitas</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <select class="form-control">
                                                    <option class="form-control" value="">Jurusan</option>
                                                </select>
                                            </div>
                                        </div>
<!--                                        <label>pilihan 2</label>
                                        <div class="">
                                            <div class="col-sm-2 col-md-2">
                                                <select class="form-control">
                                                    <option value="">Wilayah</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4 col-md-4">
                                                <select class="form-control">
                                                    <option class="form-control" value="">Universitas</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <select class="form-control">
                                                    <option class="form-control" value="">Jurusan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <label>pilihan 3</label>
                                        <div class="">
                                            <div class="col-sm-2 col-md-2">
                                                <select class="form-control">
                                                    <option value="">Wilayah</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4 col-md-4">
                                                <select class="form-control">
                                                    <option class="form-control" value="">Universitas</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <select class="form-control">
                                                    <option class="form-control" value="">Jurusan</option>
                                                </select>
                                            </div>
                                        </div>-->
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


<!-- end modular -->
<?php $this->load->view('PesertaModular/Free/Footer'); ?>


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
