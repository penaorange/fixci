<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>Daftar Cermat Institute</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url(); ?>assets/login/css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="<?php echo base_url(); ?>assets/login/font-awesome/css/font-awesome.css" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url(); ?>assets/login/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/login/css/style-responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->

        <div id="login-page">
            <div class="container">

                <form class="form-daftar" action="<?php echo site_url('cek-daftar'); ?>" method="post">
                    <h2 class="form-daftar-heading">Daftar</h2>

                    <div class="login-wrap">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nm_peserta" placeholder="Nama" required>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jenis_kelamin" id="optionsRadios1" value="pria" checked>
                                        Pria
                                    </label>
                                    <label>
                                        <input type="radio" name="jenis_kelamin" id="optionsRadios2" value="wanita">
                                        Wanita
                                    </label>
                                </div>
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                                <input type="number" class="form-control" name="no_hp" placeholder="No HP" required>
                                <input type="mail" class="form-control" name="email" placeholder="E-mail" required>
                                <select name="id_kelompok_keilmuan" class="form-control" required>
                                    <option>--Pilih Paket--</option>
                                    <option value="1">SAINTEK</option>
                                    <option value="2">SOSHUM</option>
                                    <option value="3">CAMPURAN</option>
                                </select>
                                <br>
                            </div><!-- col 6 -->

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="username" placeholder="New Username" required>
                                <input type="password" id="password" class="form-control" name="password" placeholder="Password (maks 15 karakter)" maxlength="15" required>
                                <input type="password" id="password2" class="form-control" name="password2" placeholder="Re-Type Password" required onkeyup="checkPass(); return false;"><span id="confirmMessage" class="confirmMessage"></span>

                                <?php if ($this->session->flashdata('notif-daftar') != '') : ?>
                                    <br>
                                    <div class="alert alert-danger">
                                        <center><i class="fa fa-times"></i> <?php echo $this->session->flashdata('notif-daftar'); ?></center>
                                    </div>
                                <?php endif; ?>


                            </div>

                        </div><!-- row -->

                        <hr>
                        <button class="btn btn-daftar btn-block" href="index.html" type="submit" > Daftar</button>



                    </div>

                </form>
                <p class="kembali-login">Kembali Ke Halaman <b><a href="<?php echo site_url('Login'); ?>">Login</a></b></p>

            </div>
        </div>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url(); ?>assets/login/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/login/js/bootstrap.min.js"></script>

        <!--BACKSTRETCH-->
        <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/login/js/jquery.backstretch.min.js"></script>
        <script>
                                    $.backstretch("<?php echo base_url(); ?>assets/login/img/bg-0.jpg", {speed: 500});
        </script>

        <script type="text/javascript">
            function checkPass() {
                //Store the password field objects into variables ...
                var pass1 = document.getElementById('password');
                var pass2 = document.getElementById('password2');
                //Store the Confimation Message Object ...
                var message = document.getElementById('confirmMessage');
                //Set the colors we will be using ...
                var goodColor = "#66cc66";
                var badColor = "#ff6666";
                var blank = "#fff"
                //Compare the values in the password field
                //and the confirmation field

                if (pass2.value == "") {
                    pass2.style.backgroundColor = blank;
                    message.style.color = blank;
                    message.innerHTML = ""
                } else if (pass1.value == pass2.value) {
                    //The passwords match.
                    //Set the color to the good color and inform
                    //the user that they have entered the correct password
                    pass2.style.backgroundColor = goodColor;
                    message.style.color = goodColor;
                    message.innerHTML = "Passwords Cocok!"
                } else {
                    //The passwords do not match.
                    //Set the color to the bad color and
                    //notify the user.
                    pass2.style.backgroundColor = badColor;
                    message.style.color = badColor;
                    message.innerHTML = "Passwords Tidak Cocok!"
                }
            }

        </script>

    </body>
</html>
