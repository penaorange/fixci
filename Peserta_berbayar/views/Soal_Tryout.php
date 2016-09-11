<!-- start-modular -->

<div class="content">
            <div class="container-fluid">
                <div class="row">
					<div class="col-md-8 col-md-offset-2">
                        <div class="card">
                          <?php if (empty($nama_mapel) && empty($soal)): ?>
                            <div class="content tryout-soal">
                              <div class="alert alert-warning">
                                <strong><i class="fa fa-exclamation"></i> Warning - </strong>data yang anda cari Tidak Tersedia!
                              </div>
                            </div>
                          <?php else: ?>
                            <div class="header text-center">
                                <h4 class="title"><?php echo $nama_mapel->nama_mapel; ?></h4>
                                <p class="category">Kerjakan soal berikut dengan benar</p>
								                        <hr/>
                            </div>
                            <div class="content tryout-soal" id="the-content">


                                <?php $i=1; ?>
                                <?php foreach ($soal as $key): ?>
                                  <ul class="konten">
                                    <li id="<?php echo $i; ?>">
                                      <p>
                                        <?php echo $i; ?>
                                        <?php echo $key->soal ;?>
                                      </p>
                                      <div class="radio">
                                        <label>
                                          <input type="radio" name="pil" id="pilA" value="<?php echo $key->pilA; ?>" data-toggle="radio">
                                          <?php echo $key->pilA; ?>
                                        </label>
                                      </div>
                                      <div class="radio">
                                        <label>
                                          <input type="radio" name="pil" id="pilB" value="<?php echo $key->pilB; ?>" data-toggle="radio">
                                          <?php echo $key->pilB; ?>
                                        </label>
                                      </div>
                                      <div class="radio">
                                        <label>
                                          <input type="radio" name="pil" id="pilC" value="<?php echo $key->pilC; ?>" data-toggle="radio">
                                          <?php echo $key->pilC; ?>
                                        </label>
                                      </div>
                                      <div class="radio">
                                        <label>
                                          <input type="radio" name="pil" id="pilD" value="<?php echo $key->pilD; ?>" data-toggle="radio">
                                          <?php echo $key->pilD; ?>
                                        </label>
                                      </div>
                                      <div class="radio">
                                        <label>
                                          <input type="radio" name="pil" id="pilE" value="<?php echo $key->pilE; ?>" data-toggle="radio">
                                          <?php echo $key->pilE; ?>
                                        </label>
                                      </div>
                                    </li>
                                    </ul>
                                  <?php $i++; ?>
                                  <hr/>
                                <?php endforeach; ?>
                                <nav class='text-center'>
    <?php echo $pagination_links; ?>
	<!-- <ul class="pagination">
		<li><a href="">1</a></li>
		<li><a href="">2</a></li>
		<li><a href="">3</a></li>
	</ul> -->
</nav>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

<!-- end modular -->
