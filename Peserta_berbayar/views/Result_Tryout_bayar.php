<?php $this->load->view('PesertaModular/Berbayar/Header_test'); ?>
<!-- start-modular -->

<div class="content">
            <div class="container-fluid">
                <div class="row">
					          <div class="col-md-6 col-md-offset-3">
                        <div class="card">
                          <div class="header text-center">
                              <h4 class="title">Hasil Ujian</h4>
                              <p class="category">result dari tryout yang telah selesai dikerjakan</p>
                              <a href="<?php echo site_url('peserta-berbayar') ?>"><button type="button" class="btn btn-primary pull-right btn-fill"><i class="fa fa-arrow-left"></i> Kembali</button></a>
                              <hr/>
                          </div>
                              <div class="content tryout-soal">
                                <div class="row">
                                  <div class="col-md-5">
                                    <h4 style="color :#d9534f;"><i class="fa fa-times"></i> Jumlah Salah : <b><?php echo $salah; ?></b></h4>
                                    <h4 style="color :#428bca;"><i class="fa fa-check"></i> Jumlah benar : <b><?php echo $benar; ?></b></h4>
                                  </div>
                                  <div class="col-md-7">
                                    <div align="center"><h4>Total Nilai</h4><h1 class="well" style="color :#428bca;"><b><?php echo $total; ?></b></h1></div>
                                  </div>
                                </div>
                                <hr/>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
</div>

<!-- end modular -->
<?php $this->load->view('PesertaModular/Berbayar/Footer'); ?>
