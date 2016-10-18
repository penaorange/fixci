<?php $this->load->view('PesertaModular/Berbayar/Header'); ?>
<!-- start-modular -->

<div class="content">
    <div class="container-fluid">
      <div class="row">
          <div class="col-sm-12 col-md-12">
              <div class="card card-plain">
                  <!-- <div class="header card" align="center">
                      <h4 class="title">Daftar Nilai Tryout</h4>
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
                                      <td width="15%">Kode <i class="fa fa-sort"></i></td>
                                      <td>Tryout <i class="fa fa-sort"></i></td>
                                      <td>Mata Pelajaran <i class="fa fa-sort"></i></td>
                                      <td>Nilai <i class="fa fa-sort"></i></td>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php $i=1; ?>
                                    <?php foreach ($nilai as $key): ?>
                                      <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $key->nm_tryout; ?></td>
                                        <td><?php echo $key->nm_mapel; ?></td>
                                        <td><?php echo $key->total_nilai; ?></td>
                                      </tr>
                                      <?php $i++ ?>
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
