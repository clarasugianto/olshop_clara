<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$this->admin_login->cek_login(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Dashboard</title>

   <!-- Custom fonts for this template-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/vendor/fontawesome-free/css/all.min.css";?>" >

  <!-- Page level plugin CSS-->
  <link rel="stylesheet" href="<?php echo base_url()."assets/vendor/datatables/dataTables.bootstrap4.css";?>">

  <!-- Custom styles for this template-->
  <link rel="stylesheet" href="<?php echo base_url()."assets/css/sb-admin.css";?>">

</head>

<body id="page-top">
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">ADMIN</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
          <i class="fas fa-user-circle fa-fw" style="font-size: 25px;"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?php echo base_url('jlb-logout'); ?>" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">
  <!-- Sidebar -->
  <ul class="sidebar navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo site_url('jlb-dashboard') ?>">
        <i class="fas fa-fw fa-user-alt"></i>
        <span>Daftar Pengguna</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('jlb-product') ?>">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Daftar Produk</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('jlb-order') ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Riwayat Transaksi</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('jlb-stok') ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Stok Barang</span></a>
          </li>
        </ul>


    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Daftar Pengguna</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- DataTables Example -->
        <div>
          <?php foreach($res as $u){ ?>
  <form action="<?php echo site_url('proses/update/member') ?>" method="post">
    <table >
      <tr>
        <td>ID </td>
        <td><label class="control-label" name="id_member" value="" readonly>: <?php echo $u['id_member'] ?></label></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>
          <label class="control-label" name="nama" value="">: <?php echo $u['nama'] ?>
        </td>
      </tr>
      <tr>
        <td>Email</td>
        <td><label class="control-label" name="email" value="">: <?php echo $u['email'] ?></td>
      </tr>
      <tr>
        <td>Telepon</td>
        <td><label class="control-label" name="telepon" value="">: <?php echo $u['telepon'] ?></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><label class="control-label" name="alamat" value="" readonly>: <?php echo $u['alamat'] ?></td>
      </tr>
      <tr>
        <td>Status Pelanggan</td>
        <td><label class="control-label" name="status_pelanggan" value="">: <?php $u['status_pelanggan'] ;    
            if ($u['status_pelanggan']==0) {?>
            Belum Di Verifikasi
            <?php }else{?>
           Sudah Di Verifikasi
            <?php } ?></label></td>
      </tr>
      <tr>
        <td>Foto</td>
        <td>: <img src="<?php echo base_url('upload/admin/produk/') ?><?= $u['foto'] ?>" width="30%"></td>
      </tr>
      <tr>
        <td>Sex</td>
        <td><label class="control-label" name="sex" value="">: <?php echo $u['sex'] ?></td>
      </tr>
      <tr>
        <td>Hak Akses</td>
        <td><label class="control-label" name="hak_akses" value="">: <?php echo $u['hak_akses'] ?></td>
      </tr>
      <tr>
        <td>Tanggal Daftar</td>
        <td><label class="control-label" name="tanggal_daftar" value="">: <?php echo $u['tanggal_daftar'] ?></td>
      </tr>
      <tr>
        
        
        <td><a class="btn btn-primary" href="<?php echo base_url('jlb-dashboard') ?>">Kembali</a></td>
      </tr>
    </table>
  </form> 
  <?php } ?>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2022</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= site_url('proses/logout'); ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url()."assets/vendor/jquery/jquery.min.js";?>"></script>
  <script src="<?php echo base_url()."assets/vendor/bootstrap/js/bootstrap.bundle.min.js";?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url()."assets/vendor/jquery-easing/jquery.easing.min.js";?>"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo base_url()."assets/vendor/chart.js/Chart.min.js";?>"></script>
  <script src="<?php echo base_url()."assets/vendor/datatables/jquery.dataTables.js";?>"></script>
  <script src="<?php echo base_url()."assets/vendor/datatables/dataTables.bootstrap4.js";?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url()."assets/js/sb-admin.min.js";?>"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url()."assets/js/demo/datatables-demo.js";?>"></script>
  <script src="<?php echo base_url()."assets/js/demo/chart-area-demo.js";?>"></script>

</body>

</html>
