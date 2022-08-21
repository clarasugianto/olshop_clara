<?php 
defined('BASEPATH') OR exit('404 Not Found');
$no =$this->db->query("SELECT id_member FROM member ORDER BY id_member DESC");
$no_id=$no->row_array('id_member');
$kd=$no_id['id_member'];
$urut=substr($kd, 6,3);
$tambah=(int)$urut+1;
$bln=date("m");
$thn=date("y");
if (strlen($tambah)==1) {
  $format="J".$bln.$thn."00".$tambah;
}else if(strlen($tambah)==2){
  $format="J".$bln.$thn."0".$tambah;
}else{
  $format="J".$bln.$thn.$tambah;
}?>
<?php if($this->session->userdata('masuk')==TRUE) : ?>
  <?php redirect(base_url('home'),'refresh'); ?>
<?php else: ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>JoleboShop - Daftar</title>
  <link rel="shortcut icon" href="<?php echo base_url('assets/img/icon.ico') ?>">
  <!-- Custom fonts for this template-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fontawesome/css/all.css') ?>">
  <!-- Custom styles for this template-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:500" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:500" rel="stylesheet">

  <style type="text/css">
    .card-register{
      max-width: 45rem;
      border: none;
      transform: translateY(25%);
      box-shadow: 0 10px 30px rgba(0,0,0,0.3);
      border-radius: 15px;
    }
  </style>
</head>

<body style="font-family: Quicksand;">

  <div class="container">
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
            <center> <?php echo $this->session->flashdata('gagal'); ?> </center>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div> <!-- end div -->
  <?php endif; ?>
  <div class="card card-register mx-auto mt-5">
    <div class="card-header" style="border-top-left-radius: 15px; border-top-right-radius: 15px; font-weight: 600"><img src="" alt=""></div>
    <div class="card-body">
      <?php echo form_open(base_url('user/register')); ?>
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <div class="form-label-group">
              <input type="hidden" name="id" value=" <?php echo $format; ?> ">
              <input type="text" id="firstName" class="form-control" placeholder="Nama Depan" autofocus="autofocus" name="namad">
              <?php echo form_error('namad'); ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-label-group">
              <input type="text" id="lastName" class="form-control" placeholder="Nama Belakang" name="namab">
              <?php echo form_error('namab'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <div class="form-label-group">
              <input type="email" id="inputemail" class="form-control" placeholder="Alamat Email" autofocus="autofocus" name="email">
              <?php echo form_error('email'); ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-label-group">
              <input type="text" id="inputnumber" class="form-control" placeholder="Nomor Telepon" name="telp">
              <?php echo form_error('telp'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password">
              <?php echo form_error('password'); ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-label-group">
              <input type="password" id="confirmPassword" class="form-control" placeholder="Konfirmasi password" name="password2">
              <?php echo form_error('password2'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-12">
            <div class="form-label-group">
              <input type="label" id="inputAlamat" class="form-control" placeholder="Alamat" name="alamat">
              <?php echo form_error('alamat'); ?>
            </div>
          </div>
        </div>
      </div>
      <button class="btn btn-primary btn-block" type="submit">Daftar</button>
      <?php echo form_close(); ?>
      <div class="text-center">
        <a class="d-block small mt-3" href="<?php echo base_url('login') ?>">Masuk</a>
      </div>
    </div>
  </div>
</div>

<script
src="https://code.jquery.com/jquery-3.3.1.js"
integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
  $('#myModal').modal('show');
</script>
</body>

</html>
<?php endif; ?>