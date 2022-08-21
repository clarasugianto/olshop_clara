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
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('jlb-dashboard') ?>">
        <i class="fas fa-fw fa-user-alt"></i>
        <span>Daftar Pengguna</span>
      </a>
    </li>
    <li class="nav-item active">
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
                <a href="#">Daftar Produk</a>
              </li>
              <li class="breadcrumb-item active">Overview</li>

            </ol>
            <div>
              <form class="form-horizontal" action="<?php echo site_url('proses/proses_daftar');?>" enctype="multipart/form-data" method="post" >
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
                +Tambah Data
              </button> 
            </div>
            <div>
              <div role="alert" class="alert alert-succes alert-dismissible fade in">
                <p><?php echo $this->session->flashdata('data'); ?></p>
              </div>
            </div>
            <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="navbar-example2" >


              <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header bg-info">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <h2 class="modal-title" id="exampleModalLabel" style="margin-right: 60%;">Data Produk</h2>

                  </div>

                  <div class="modal-body">
                   <div class="form-group">
                    <label for="input_gambar">Gambar : </label>
                    <input type="file" name="produk" class="form-control">

                  </div>


                  <div class="form-group">
                    <label for="inputEmail3" class="col-md-6 control-label">ID Produk</label>
                    <div class="col-sm-10">
                      <input type="text"  name="id_produk" >
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputEmail3" class="col-md-6 control-label">Nama Produk</label>
                    <div class="col-sm-10">
                      <input type="text"  name="nama_produk"  >
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputEmail3" class="col-md-6 control-label">Keterangan</label>
                    <div class="col-sm-10">
                      <textarea name="keterangan"></textarea>
                    </div>
                  </div>



                  <div class="form-group">
                    <label for="inputEmail3" class="col-md-6 control-label">Harga</label>
                    <div class="col-sm-10">
                      <input type="int"  name="harga"  >
                    </div>
                  </div>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal">Batal</button> | 
                  <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
              </div>
            </div>
          </div><br>
          <div style="height: 2px;background-color: white;"></div>

        </form>



        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>      
                    <th>No</th>
                    <th>Gambar</th>

                    <th>Kode</th>
                    <th>Nama Produk</th>
                    <th>Keterangan</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Tanggal Post</th>
                    <th>Pilihan</th>
                  </tr>
                </thead>
                <tbody>

                  <?php 
                  $no=1;
                  foreach ($res as $dat)
                  {
                    ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><img src="<?php echo base_url('upload/admin/produk/') ?><?= $dat['id_gambar'] ?>" width="35%"></td> 

                      <td><?= $dat['id_produk'] ?></td>
                      <td><?= $dat['nama_produk'] ?></td>
                      <td><?= $dat['keterangan'] ?></td>
                      <td><?= $dat['harga'] ?></td>
                      <td><?= $dat['stok'] ?></td>
                      <td><?= $dat['tanggal_post'] ?></td>
                      <td>

                   <!--     <a href="<? //= base_url('jlb/product-edit/'); ?><?//= $dat["id_produk"] ?>" class="btn btn-success" > -->

                        </a><br><a href="<?= base_url('proses/delete/produk/'); ?><?= $dat["id_produk"] ?>" class="btn btn-danger">delete</a>
                      </td>


                    </tr>
                    <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
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
  <script type="text/javascript">
    $(document).on('click', '.browse', function(){
      var file = $(this).parent().parent().parent().find('.file');
      file.trigger('click');
    });
    $(document).on('change', '.file', function(){
      $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
    });
  </script>
</body>

</html>
