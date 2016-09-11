<?php $this->load->view('PesertaModular/Free/Header'); ?>
<!-- start-modular -->

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit Profile <span>
                          <div class="btn-group pull-right">
                            <button type="button" class="btn btn-info btn-fill"><i class="fa fa-user"></i> Edit Profile</button>
                            <button type="button" class="btn btn-warning btn-fill"><i class="fa fa-lock"></i> Ganti Password</button>
                          </div>
                        </span></h4>
                    </div>
                    <div class="content">
                        <form>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Kelompok (disabled)</label>
                                        <input type="text" class="form-control" disabled placeholder="Kelompok Ujian" value="<?php if ($profil_lengkap->id_kelompok_keilmuan == '1') { echo 'IPA'; }
                                        elseif ($profil_lengkap->id_kelompok_keilmuan == '2') { echo 'IPS'; } elseif
                                         ($profil_lengkap->id_kelompok_keilmuan == '3') { echo 'IPC'; } ;?>">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control" placeholder="Nama Lengkap" value="<?php echo $profil_lengkap->nm_peserta; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control" name="jenis">
                                          <?php if ($profil_lengkap->jenis_kelamin == 'pria'): ?>
                                            <option value="pria">Laki-Laki</option>
                                            <option value="wanita">Perempuan</option>
                                            <?php else: ?>
                                              <option value="wanita">Perempuan</option>
                                              <option value="pria">Laki-Laki</option>
                                          <?php endif; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label>No.Telepon</label>
                                        <input type="text" class="form-control" placeholder="No.Telepon" value="<?php echo $profil_lengkap->no_hp; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control" placeholder="Alamat" value="<?php echo $profil_lengkap->alamat; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Email address</label>
                                      <input type="email" class="form-control" placeholder="Email" value="<?php echo $profil_lengkap->email; ?>">
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Jenis Akun</label>
                                      <input type="email" class="form-control" placeholder="Jenis Akun" value="<?php if ($profil_lengkap->id_kelompok_peserta == '1'){echo 'Trial';}
                                      elseif($profil_lengkap->id_kelompok_peserta == '2'){echo 'Berbayar';}elseif($profil_lengkap->id_kelompok_peserta == '3'){echo 'Bimbel';}?>" disabled>
                                  </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="image">
                        <img src="<?php echo base_url() ?>assets/peserta/img/profile-header.jpg" alt="..."/>
                    </div>
                    <div class="content">
                        <div class="author">
                             <a href="#">
                            <img class="avatar border-gray" src="<?php echo base_url() ?>assets/peserta/img/faces/face-8.jpg" alt="..."/>

                              <h4 class="title"><?php echo $profil_lengkap->nm_peserta; ?><br />
                              </h4>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <div class="text-center">
                        <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                        <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                        <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- end modular -->
<?php $this->load->view('PesertaModular/Free/Footer'); ?>
