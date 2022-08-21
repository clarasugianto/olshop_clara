<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$keterangan = substr($produk['keterangan'],0,20).'...';
$harga = "Rp. " . number_format($produk['harga'],0,'','.');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale1.0">
	<title>Fit-bsaShop</title>
	<link rel="shortcut icon" href="">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>css/fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="aos-master/dist/aos.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>css/css.css">
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<link href="<?php echo base_url('assets/') ?>css/jquery.nice-number.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:500" rel="stylesheet">
	<style type="text/css">
		.kotak{
			position: absolute;
			padding: 30px;
			left: 50%;
			top: 50%;
			transform: translate(-50%,-50%);
			width: 1200px;
			height: 500px;
			flex-direction: column;
			border: 1px solid #ccc;

		}
		.spasi{
			margin-top: 50px;
		}
		.panel{
			position: relative;
			overflow: hidden;
			transform: translate(15%);
		}
		.kiri{
			float: left !important;
		}
		.kanan{
			position: absolute;
			left: 300px;
		}
		.deskripsi{
			width: 85%;
			position: absolute;
			margin: 10px;
			left: 79px;

		}
		.tombol{
			float: right;
			margin-left: auto;
		}
		.total{
			font-weight: 700;
			margin-right: 20px;
		}
		.toko{
			display: inline-block; 
			vertical-align: middle; 
			width: 200px;
		}
		.toko a{
			text-decoration: none !important;
			color: #000;
			font-weight: 700;
			font-size: 14px;
		}
		.toko p{
			font-size: 12px;
			color: rgba(49,53,59,0.68);
		}

	</style>
</head>
<body>
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
	<?php $this->load->view('user/navbar'); ?>
<div class="page-container">
	<div class="container-fluid" style="padding: 24px 24px 12px 30px;">
		<div class="row">
			<div class="box-produk">
				<div style="position: relative; display: block; float: left;">
					<img src="<?= base_url('upload/admin/produk/'.$produk['id_gambar']); ?>" width="400" height="400" style="border: 1px solid #ccc; border-radius: 8px; padding: 12px; margin-right: 12px;">
				</div>
				<div style="float: left;width: 50%; position: relative; margin-left: 20px;">
					<div class="head-produk">
						<h2 class="text-justify" style=""><?php echo $produk['nama_produk']; ?></h2>
						<hr style="margin-top: 30px; color: #ccc;">
					</div>
					<form action="<?php echo site_url('belanja') ?>" method="post">
						
						<div class="body-produk">
							<label class="price-produk">
								<?php if ($this->session->userdata('masuk')==TRUE): ?>
									<input type="hidden" name="id_member" value="<?php echo $this->session->userdata('id'); ?>">
								<?php endif ?>
								<input type="hidden" name="id_produk" value="<?php echo $produk['id_produk'] ?>">
								<input type="hidden" id="harga" name="harga" value="<?php echo $produk['harga']; ?>"><?php echo $harga; ?> 
							</label>
							
							<hr style="margin-top: 30px;">
							<p class="text-justify" style="font-size: 15px;"><?php echo $keterangan; ?></p>
							<a href="#more" class="btn btn-success pull-right float-right" style="font-size: 18px;">More Details</a>
						</div>
					</div>
					<div class="support-send">
						<div class="send-box">
							<div class="send-body">
								<div class="send">
									<h4>Dukungan Pengiriman</h4>
								</div>
							</div>
							<div class="img-sender">
								<div class="img-holder">
									<i class="fas fa-check" style="color: #6747c7;">
										<img src="<?php echo base_url('assets/img/') ?>cod.png" width="60"></i>
									</div>
									<div class="img-holder">
										<i class="fas fa-check" style="color: #6747c7;">
											<img src="<?php echo base_url('assets/img/') ?>grab.png" width="60"></i>
										</div>
										<div class="img-holder">
											<i class="fas fa-check" style="color: #6747c7;">
												<img src="<?php echo base_url('assets/img/') ?>JNE.png" width="60"></i>
											</div>
											<div class="img-holder-tittle"></div>
										</div>

									</div>

								</div>
							</div>
						</div>
					</div>
				</div><!--produkcontainer-->
				<div class="container-fluid" style="margin-top: 36px;" id="more"><!--tabscontainer-->
					<div class="row">
						<div class="tabs">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Deskripsi</a>
								</li>
							</ul>
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active text-justify" id="home" role="tabpanel" aria-labelledby="home-tab">
									<p><?php echo $produk['keterangan'];?></p></div>
								</div>
							</div>
						</div>


						
					</div><!--tabscontainer-->
					<nav class="navbar fixed-bottom navbar-light bg-light navbar-bottom">
						<div class="container" style="padding: 10px;">

							<div style="width: 500px; margin-left: auto; padding: auto; margin-bottom: 40px; ">
								<div style="display: inline-block; vertical-align: middle; font-weight: 700; font-size: 18px; ">
									<div style="line-height: 16px;font-size: 12px;color: rgba(49,53,59,.44);text-transform: uppercase; width: 10px; position: absolute; margin-top: -10px;">
										Total
									</div>
									<span style=" outline: none;">
										<input type="text" id="total" style="border: none; width: 120px; margin-top: 10px; margin-left:-25px;" readonly value="<?php echo $harga; ?>">
									<input type="hidden" id="total2" value="<?php echo $produk['harga'] ?>" name="total2"></span>

									<?php if ($this->session->userdata('masuk')==TRUE): ?>

										<button type="submit" name="submit" class="btn btn-outline-danger" style=" width: 200px; height: 50px; padding: 12px;background:transparent;">Tambah ke Keranjang</button>
										<?php else: ?>
											<a href="<?php echo base_url('login') ?>" class="btn btn-outline-danger" style="margin-left: 10px; margin-bottom: 10px; width: 200px; height: 50px; padding: 12px;">Tambah ke Keranjang</a>
										<?php endif ?>

									</div>
									<div></div>
								</div>
							</div>
						</form>
					</nav>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo base_url('assets/') ?>js/jquery.nice-number.js"></script>
<script src="slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/') ?>js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
$(function(){

$('input[type="number"]').niceNumber();
// auto resize the number input

$('.responsive').slick({
	centerMode: false,
	centerPadding: '60px',
	arrows:true,
	autoplay: true,
	autoplaySpeed: 2000,
	slidesToShow: 4,
	responsive: [
	{
		breakpoint: 768,
		settings: {
			arrows: true,
			centerMode: true,
			centerPadding: '40px',
			slidesToShow: 3
		}
	},
	{
		breakpoint: 480,
		settings: {
			arrows: true,
			centerMode: true,
			centerPadding: '40px',
			slidesToShow: 1
		}
	}
	]
});
});
</script>
<script>
	$('#myModal').modal('show');
</script>
</body>
</html>