<?php $this->load->view('PesertaModular/Free/Header'); ?>
<!-- start-modular -->

<div class="content">
    <div class="container-fluid">

      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="header" style="padding:20px;">
                      <h4 class="title">Pilih Tryout</h4>
                  </div>
              </div>
          </div>
      </div>
      <?php foreach ($tryout as $key): ?>
                    <div class="col-md-3 tryout animated bounceIn wow delay-03s">
                        <div class="card">
                            <div class="header">
                                <h5 class="title"><?php echo $key->nm_tryout; ?></h5>
                                <p class="category"><?php echo $key->tgl_to; ?></p>
                            </div>
                            <div style="width:150px;height:150px;margin:10px auto;">
                              <img src="<?= base_url(); ?>assets/images/sbmptn.jpg" style="width:150px;height:150px;">
                            </div></a>
                            <div class="content">
                                  <div class="footer text-center">  
                                    <hr>
                                    <form action="<?php echo site_url('tryout-free'); ?>/<?php echo $key->id_tryout; ?>">
                                      <div class="stats">
                                      <button type="submit"class="btn">kerjakan</button>
                                      </div>
                                    </form>                                    
                                </div>
                            </div>
                        </div>
                    </div>
       <?php endforeach; ?>
                    
    </div>
</div>

<!-- end modular -->
<?php $this->load->view('PesertaModular/Free/Footer'); ?>

   