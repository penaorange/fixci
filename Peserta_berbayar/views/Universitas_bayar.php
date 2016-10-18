<?php $this->load->view('PesertaModular/Berbayar/Header'); ?>
<!-- start-modular -->

<div class="content">
    <div class="container-fluid">
      <div class="row">
          <div class="col-sm-12 col-md-12">
              <div class="card card-plain">
                  <!-- <div class="header card" align="center">
                      <h4 class="title">Kumpulan Soal-Soal</h4>
                      <p class="category">Klik untuk melihat detail</a></p>
                  </div> -->
                  <div class="content all-icons">
                      <div class="row">
                        <div class="col-sm-12 col-md-12">
                          <div class="card tabel-univ">
                              <div class="content table-responsive table-full-width">
                                <TABLE id="univ" class="table table-hover table-striped">
                                  <thead>
                                    <tr align="center">
                                      <td width="15%">Kode Univ. <i class="fa fa-sort"></i></td>
                                      <td>Nama <i class="fa fa-sort"></i></td>
                                      <td width="20%">Wilayah <i class="fa fa-sort"></i></td>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php foreach ($univ as $key): ?>
                                      <tr>
                                        <td><?php echo $key->id_universitas; ?></td>
                                        <td><?php echo $key->nm_universitas; ?></td>
                                        <td><?php echo $key->wilayah; ?></td>
                                      </tr>
                                    <?php endforeach; ?>
                                  </tbody>

                                 </TABLE>

                              </div>
                          </div>

                              <div class="list-group">
                              <!-- foreach nya nanti -->
                              </div>

                         </div><!-- colom -->
                      </div>


                  </div>
              </div>
          </div>

      </div>


    </div>
</div>

<!-- end modular -->
<?php $this->load->view('PesertaModular/Berbayar/Footer'); ?>


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
                                            <div class="form-group">
                                              <div class="input-group">
                                                <div class="input-group-addon">Mata Pelajaran</div>
                                                <input type="text" class="modal-content-right-text-mail" id="matkul" disabled/>
                                              </div>
                                            </div>

                                            <div class="form-group">
                                              <div class="input-group">
                                                <div class="input-group-addon">Jumlah Soal</div>
                                                <input type="text" class="modal-content-right-text-mail" id="jumlah" disabled/>
                                              </div>
                                            </div>

                                            <div class="form-group">
                                              <div class="input-group">
                                                <div class="input-group-addon">Durasi</div>
                                                <input type="text" class="modal-content-right-text-mail" id="waktu" disabled/>
                                              </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Batal</button>
                                          <button type="button" class="btn btn-primary btn-fill">Mulai Kerjakan</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                  </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
