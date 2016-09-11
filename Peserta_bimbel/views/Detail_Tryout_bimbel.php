<?php $this->load->view('PesertaModular/Bimbel/Header'); ?>
<!-- start-modular -->

<div class="content">
    <div class="container-fluid">
      <div class="row">
          <div class="col-sm-8 col-md-8 col-md-offset-2">
              <div class="card">
                  <div class="header">
                      <h4 class="title">Pilih Mata Pelajaran</h4>
                      <p class="category">Klik untuk melihat detail</a></p>
                  </div>
                  <div class="content all-icons">
                      <div class="row">
                        <div class="col-sm-8 col-md-8 col-md-offset-2">


                        <div class="list-group">
                          <?php if (empty($detail_tryout)): ?>
                            <div class="alert alert-warning">
                              <strong><i class="fa fa-exclamation"></i> Warning - </strong>data yang anda cari Tidak Tersedia!
                            </div>
                          <?php else: ?>
                            <?php foreach ($detail_tryout as $key): ?>
                              <a class="list-group-item" data-toggle="modal" data-target="#modalDetail"
                                 data-id="<?php echo $key->id_mapel;?>" data-idtrans="<?php echo $key->id_transaksi;?>" data-idto="<?php echo $key->id_tryout;?>" data-nama="<?php echo $key->nm_mapel;?>"
                                 data-jumlah="<?php echo $key->jml_soal;?>" data-waktu="<?php echo $key->waktu;?>">
                                    <h4 class="list-group-item-heading"><i class="fa fa-circle text-info"></i> <?php echo $key->nm_mapel; ?></h4>
                                  </a>

                            <?php endforeach; ?>
                          <?php endif; ?>
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
<?php $this->load->view('PesertaModular/Bimbel/Footer'); ?>


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
                                          <form action="<?php echo site_url('soal-TO-bimbel'); ?>" method="post">
                                            <input type="hidden" name="idTrans" id="idtrans" />
                                            <input type="text" name="id" id="id" hidden="true"/>
                                            <input type="text" name="idTo" id="idTo" hidden="true"/>
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