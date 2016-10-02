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
                            <button type="button" class="btn btn-info btn-fill" data-toggle="modal" data-target="#modalProfile"><i class="fa fa-user"></i> Edit Profile</button>
                            <button type="button" class="btn btn-warning btn-fill" data-toggle="modal" data-target="#modalPass"><i class="fa fa-lock"></i> Ganti Password</button>
                          </div>
                        </span></h4>
                    </div>
                    <div class="content">
                        <?php if ($this->session->flashdata('notif_gagal') != '') : ?>
                          <div class="alert alert-danger">
                            <p>
                              <i class="fa fa-warning"></i> <?php echo $this->session->flashdata('notif_gagal'); ?>
                            </p>
                          </div>
                        <?php elseif ($this->session->flashdata('notif_berhasil') != '') : ?>
                          <div class="alert alert-info">
                            <p>
                              <i class="fa fa-check"></i> <?php echo $this->session->flashdata('notif_berhasil'); ?>
                            </p>
                          </div>
                        <?php endif; ?>

                        <form>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Kelompok</label>
                                        <input type="text" class="form-control text-black" value="<?php if ($profil_lengkap->id_kelompok_keilmuan == '1') { echo 'IPA'; }
                                        elseif ($profil_lengkap->id_kelompok_keilmuan == '2') { echo 'IPS'; } elseif
                                         ($profil_lengkap->id_kelompok_keilmuan == '3') { echo 'IPC'; } ;?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control text-black" value="<?php echo $profil_lengkap->nm_peserta; ?>" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-5">
                                  <div class="form-group">
                                      <label>Jenis Kelamin</label>
                                      <?php if ($profil_lengkap->jenis_kelamin == 'pria'): ?>
                                          <input type="text" class="form-control text-black" value="Laki-Laki" readonly>
                                        <?php else: ?>
                                          <input type="text" class="form-control text-black" value="Perempuan" readonly>
                                      <?php endif; ?>
                                  </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label>No.Telepon</label>
                                        <input type="text" class="form-control text-black" value="<?php echo $profil_lengkap->no_hp; ?>" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control text-black" value="<?php echo $profil_lengkap->alamat; ?>" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Email address</label>
                                      <input type="email" class="form-control text-black" value="<?php echo $profil_lengkap->email; ?>" readonly>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Jenis Akun</label>
                                      <input type="email" class="form-control text-black" value="<?php if ($profil_lengkap->id_kelompok_peserta == '1'){echo 'Trial';}
                                      elseif($profil_lengkap->id_kelompok_peserta == '2'){echo 'Berbayar';}elseif($profil_lengkap->id_kelompok_peserta == '3'){echo 'Bimbel';}?>" readonly>
                                  </div>
                                </div>
                            </div>

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
                            <img class="avatar border-gray" src="<?php echo base_url() ?>assets/peserta/img/faces/face-8.jpg" alt="..."/>
                              <h4 class="title title-user"><?php echo $profil_lengkap->nm_peserta; ?> <i class="fa fa-circle text-success"></i></h4>
                        </div>
                    </div>
                    <hr>
                    <div class="text-center">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- end modular -->
<?php $this->load->view('PesertaModular/Free/Footer'); ?>

<!-- Modal -->
<div class="modal fade" id="modalProfile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" align="center">Ubah Profil</h4>
      </div>
      <div class="modal-body">
                <form action="<?php echo site_url('ubah-profil-free') ?>" method="post">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="nm_peserta" placeholder="Nama Lengkap" value="<?php echo $profil_lengkap->nm_peserta; ?>">
                            </div>
                        </div>
                        <div class="col-md-5">
                             <div class="form-group">
                                 <label>Jenis Kelamin</label>
                                 <select class="form-control" name="jenis_kelamin">
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
                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>No.Telepon</label>
                                <input type="text" class="form-control" name="no_hp" placeholder="No.Telepon" value="<?php echo $profil_lengkap->no_hp; ?>">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $profil_lengkap->email; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $profil_lengkap->alamat; ?>">
                            </div>
                        </div>
                    </div>


      </div>
      <div class="modal-footer">
        <div class="row">
            <div class="col-md-3">
              <button type="button" class="btn btn-danger btn-fill btn-block" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            </div>
            <div class="col-md-9">
              <button type="submit" class="btn btn-primary btn-fill btn-block" onclick="return confirm('Anda Yakin Ingin Mengubah Profil?');"><i class="fa fa-pencil"></i> Ubah</button>
            </div>

            </form>
        </div>
      </div>

    </div>
  </div>
</div>



<!-- modal password -->
<div class="modal fade" id="modalPass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header bg-orange">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-white" id="myModalLabel" align="center">Ubah Password</h4>
      </div>
      <div class="modal-body">
                <form action="<?php echo site_url('ubah-password-free') ?>" method="post">
                        <div class="form-group">
                            <label>Password Lama</label>
                            <input type="password" class="form-control" name="passLama" placeholder="Password Lama" required>
                        </div>
                        <div class="form-group">
                            <label>Password Baru</label>
                            <input type="password" class="form-control" name="password" placeholder="Password Baru" required>
                        </div>
                        <div class="form-group">
                            <label>Konfirmasi Password Baru</label>
                            <input type="password" class="form-control" name="passBaru" placeholder="Konfirmasi Password" required>
                        </div>



      </div>
      <div class="modal-footer">
        <div class="row">
            <div class="col-md-5">
              <button type="button" class="btn btn-danger btn-fill btn-block" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            </div>
            <div class="col-md-7">
              <button type="submit" class="btn btn-warning btn-fill btn-block" onclick="return confirm('Anda Yakin Ingin Mengubah Profil?');"><i class="fa fa-pencil"></i> Ubah</button>
            </div>

            </form>
        </div>
      </div>

    </div>
  </div>
</div>
