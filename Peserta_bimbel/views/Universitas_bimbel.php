<?php $this->load->view('PesertaModular/Bimbel/Header'); ?>
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
<?php $this->load->view('PesertaModular/Bimbel/Footer'); ?>
