<?php $this->load->view('PesertaModular/Bimbel/Header'); ?>
<!-- start-modular -->

<div class="content">
    <div class="container-fluid">

      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="header">
                      <h4 class="title">Pilih Tryout</h4>
                      <p class="category">Klik untuk melihat detail tryout</a></p>
                  </div>
                  <div class="content all-icons">
                      <div class="row">
                        <ul class="social-link">
                        <?php $i=count($tryout); ?>
                        <?php foreach ($tryout as $key): ?>

                            <li class="tryout animated bounceIn wow delay-03s">
                              <a href="<?php echo site_url('tryout-bimbel'); ?>/<?php echo $key->id_tryout; ?>">
                                <b><?php echo $i ?><b/>
                              </a>
                            </li>

                        <?php $i--; ?>
                        <?php endforeach; ?>
                        </ul>

                      </div>


                  </div>
              </div>
          </div>

      </div>

    </div>
</div>
<!-- end modular -->
<?php $this->load->view('PesertaModular/Bimbel/Footer'); ?>
