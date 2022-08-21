<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<?php if ($this->session->userdata('masuk') == TRUE) : ?>
  <?php redirect(base_url('home'), 'refresh'); ?>
<?php else : ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Beauty Shop - Masuk</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="">
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fontawesome/css/all.css') ?>">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500" rel="stylesheet">

    <style type="text/css">
      .card-login {
        max-width: 25rem;
        transform: translateY(25%);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        border: none;
        border-radius: 15px;
      }
    </style>

  </head>

  <body style="font-family: Quicksand;">
    <?php if ($this->session->flashdata('gagal')) : ?>
      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <center> <?php echo $this->session->flashdata('gagal'); ?></center>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
            </div>
          </div>
        </div>
      </div> <!-- end div -->
    <?php endif; ?>
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header" style="border-top-left-radius: 15px; border-top-right-radius: 15px; font-weight: 600; text-align: center;">
          Silhakan Login
          <!--    <a href="<?= $authUrl ?>"><img src="<?= base_url() ?>assets/img/flogin.png" alt="" width="130px" height="30px"></a> -->
        </div>
        <div class="card-body">
          <form action="logon" method="post">
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" name="username" placeholder="Alamat Email" autofocus="autofocus">
                <?php echo form_error('username'); ?>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password">
                <?php echo form_error('password'); ?>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Ingat Password
                </label>
              </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Masuk</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="<?php echo base_url('register'); ?>">Daftar Sekarang</a>
            <a class="d-block small" href="forgot-password.html">Lupa Password?</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
      $('#myModal').modal('show');
    </script>

    <script src="<?= base_url('assets/js/script.js') ?>"></script>
  </body>

  </html>
<?php endif; ?>