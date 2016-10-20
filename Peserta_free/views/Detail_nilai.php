<?php $this->load->view('PesertaModular/Free/Header'); ?>
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
                            <div class="col-sm-10 col-md-10 col-md-offset-1">
                                <div class="table-responsive table-full-width">

                                    <TABLE class="table">
                                        <thead class="card">
                                            <tr>
                                                <td>No.</td>
                                                <td>ID Paket</td>
                                                <td>Nama Paket</td>
                                                <td>Benar</td>
                                                <td>Salah</td>
                                                <td>Kosong</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($nilai as $key): ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $key->idmapel; ?></td>
                                                    <td><?php echo $key->nm_mapel; ?></td>
                                                    <td><?php echo $key->jmlh_benar; ?></td>
                                                    <td><?php echo $key->jmlh_salah; ?></td>
                                                    <td><?php echo $key->jmlh_kosong; ?></td>
                                                </tr>
                                                <?php $i++ ?>
                                            <?php endforeach; ?>
                                        </tbody>

                                    </TABLE>

                                    <nav aria-label="Page navigation">
                                        <ul class="pagination">
                                            <li>
                                                <a href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li>
                                                <a href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div> <!--end div tabel-->

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
<?php $this->load->view('PesertaModular/Free/Footer'); ?>
