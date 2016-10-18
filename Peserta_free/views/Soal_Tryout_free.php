<?php $this->load->view('PesertaModular/Free/Header_test'); ?>
<!-- start-modular -->
<div id="lihatStatus">
    <a class="btn btn-info push-5-r btn-fill btn-sm push-10"></a><span> Sudah</span>
    <a class="btn btn-danger push-5-r btn-fill btn-sm push-10"></a><span> Belum <i class="ellipsis-v"></i></span>
<div class="btn-group">
  <?php $i=1; ?>
  <?php foreach ($soal as $jumlah_soal): ?>
    <a class="btn btn-danger push-5-r btn-fill btn-xs push-10" id="status<?php echo $jumlah_soal->id_soal; ?>"><?php echo $i; ?></a>

  <?php $i++; ?>
  <?php endforeach; ?>

</div>
</div>

<div class="content">
            <div class="container-fluid">
                <div class="row">
                  <!-- <div class="col-md-4">

                  </div> -->
					<div class="col-md-8 col-lg-8 col-sm-8 col-xs-8">
                        <div class="card">
                          <button type="button" id="lihat" class="btn btn-primary btn-fill "><i class="fa fa-arrow-up"></i>Status Pengisian</button>
                          <?php if (empty($nama_mapel) && empty($soal)): ?>
                            <div class="header text-center">
                                <h4 class="title"><i class="fa fa-warning"></i> Unknown Data</h4>
								                <hr/>
                            </div>

                            <div class="content tryout-soal">
                                <div class="alert alert-warning">
                                <strong><i class="fa fa-exclamation"></i> Warning - </strong>data yang anda cari Tidak Tersedia!
                                </div>
                                <a href="<?php echo site_url('tryout-free') ?>/<?php echo $to_id; ?>"><i class="fa fa-arrow-left"></i> Kembali</a>
                                <hr/>
                            </div>
                          <?php else: ?>
                            <div class="header text-center">

                                <h4 class="title"><?php echo $nama_mapel->nm_mapel; ?></h4>
                                <p class="category">Kerjakan soal berikut dengan benar</p>
								                        <hr/>
                            </div>
                            <div class="content tryout-soal">

                              <div class="paginate pagination pagination-lg">
                                <div class="items">
                                <form action="<?php echo site_url('cek-TO-free') ?>" method="post" id="hasil" onsubmit="return deleteAllCookies('seconds', 'minutes')">
                                  <input type="hidden" name="idTrans" value="<?php echo $idTrans; ?>" />
                                  <input type="hidden" name="idMapel" value="<?php echo $mapel_id; ?>" />
                                  <input type="hidden" name="idTo" value="<?php echo $to_id; ?>" />
                                  <?php $i=1; ?>
                                  <?php foreach ($soal as $key): ?>
                                  <div class="konten">

                                    <div class="media" id="soal<?php echo $i; ?>">
                                      <span class="btn btn-primary num-soal btn-fill"><?php echo $i; ?></span>
                                      <div class="media-body">
                                        <?php if ($key->gambar != null) : ?>
                                          <img class="gambar-soal img-responsive img-thumbnail" src="<?php echo base_url();?>assets/peserta/img/<?php echo $key->gambar; ?>" class="img-rounded">
                                        <?php endif; ?>
                                        <h4 class="media-heading breadcrumb"><?php echo $key->soal ;?></h4>
                                      </div>
                                    </div>


                                    <div class="radio">
                                      <label>
                                        <input type="radio" name="pil[<?=$key->id_soal?>]" value="A" onchange="statusPengisian('status<?= $key->id_soal;?>')" data-toggle="radio">
                                        <?php echo $key->pilihan_a; ?>
                                      </label>
                                    </div>
                                    <div class="radio">
                                      <label>
                                        <input type="radio" name="pil[<?=$key->id_soal?>]" value="B" onchange="statusPengisian('status<?= $key->id_soal;?>')" data-toggle="radio">
                                        <?php echo $key->pilihan_b; ?>
                                      </label>
                                    </div>
                                    <div class="radio">
                                      <label>
                                        <input type="radio" name="pil[<?=$key->id_soal?>]" value="C" onchange="statusPengisian('status<?= $key->id_soal;?>')" data-toggle="radio">
                                        <?php echo $key->pilihan_c; ?>
                                      </label>
                                    </div>
                                    <div class="radio">
                                      <label>
                                        <input type="radio" name="pil[<?=$key->id_soal?>]" value="D" onchange="statusPengisian('status<?= $key->id_soal;?>')" data-toggle="radio">
                                        <?php echo $key->pilihan_d; ?>
                                      </label>
                                    </div>
                                    <div class="radio">
                                      <label>
                                        <input type="radio" name="pil[<?=$key->id_soal?>]" value="E" onchange="statusPengisian('status<?= $key->id_soal;?>')" data-toggle="radio">
                                        <?php echo $key->pilihan_e; ?>
                                      </label>
                                    </div>

                                  </div>
                                  <?php $i++; ?>

                            <?php endforeach; ?>

                                </div>
                                <hr>
                                <div class="row numb">
                                    <div class="col-md-12">
                                      <ul class="pager">
                                        <div class="col-md-12">
                                          <div style="font-size:30px; border-radius:5px;" class="bg-primary" align="center"><i class="fa fa-clock-o"></i>  | <span id="timer" style="font-weight:bolder;"></span> <small>menit</small></div>
                                          <hr/>
                                          <h4>Nomor Soal</h4>
                                          <!-- <li><a href="#" class="firstPage btn-warning">&laquo; First</a></li>
                                          <li><a href="#" class="previousPage btn-warning">&lsaquo; Previous</a></li> -->
                                          <li class="pageNumbers"></li>
                                          <!-- <li><a href="#" class="nextPage btn-primary">Next &rsaquo;</a></li>
                                          <li><a href="#" class="lastPage btn-primary">End&raquo;</a></li> -->
                                          <hr/>
                                          <li><button type="submit" class="btn btn-primary btn-fill btn-lg btn-block" onclick="return confirm('Anda Yakin Ingin memproses Nilai?');"><i class="fa fa-check"></i> Selesai Mengerjakan</button></li>
                                        </div>

                                      </ul>
                                  </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                      <ul class="pager">
                                        <div class="col-md-8">
                                          <!-- <li><a href="#" class="firstPage btn-warning">&laquo; First</a></li> -->
                                          <li><a href="#" class="previousPage btn-warning">&lsaquo; Previous</a></li>
                                          <!-- <li class="pageNumbers"></li> -->
                                          <li><a href="#" class="nextPage btn-primary">Next &rsaquo;</a></li>
                                          <!-- <li><a href="#" class="lastPage btn-primary">End&raquo;</a></li> -->
                                        </div>

                                      </ul>
                                  </div>
                                </div>

                                </form>

                              </div>

                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

<!-- end modular -->
<?php $this->load->view('PesertaModular/Free/Footer_soal'); ?>
