<?php
defined('BASEPATH') or exit('No direct script access allowed');
$barang = $this->db->query("SELECT * FROM `produk` ORDER BY RAND() LIMIT 1")->row_array();
$barang2 = $this->db->query("SELECT * FROM `produk` ORDER BY tanggal_post ASC LIMIT 1")->row_array();
$barang3 = $this->db->query("SELECT * FROM `produk` ORDER BY RAND() LIMIT 1")->row_array();
$barang1 = $this->db->query("SELECT * FROM `produk` ORDER BY RAND() LIMIT 1")->row_array();
if ($this->session->userdata('masuk') == TRUE) :

?>
<?php redirect(base_url('home'), 'refresh');
else :
?>
	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale1.0">
		<title>BEAUTY SHOP</title>
		<!-- Favicon -->
		<link rel="shortcut icon" href="">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fontawesome/css/all.css') ?> ">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/slick/slick.css') ?> ">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/slick/slick-theme.css') ?> ">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/css.css') ?> ">
		<link href="https://fonts.googleapis.com/css?family=Quicksand:500" rel="stylesheet">
		<script src="<?php echo base_url('assets/js/jquery.min.js') ?> "></script>

	</head>

	<body>

		<body style="font-family: Quicksand;">

			<div>
				<?php $this->load->view('user/navbar'); ?>
				<div class="container-fluid" style="padding: 8%;">
					<div class="row">
						<div class="col-md-8 responsive">

							<div class="box-slide">
								<div class="slide-body">
									<div class="slide-text">
										Perlengkapan Kecantikan wanita masa kini
									</div>
									<div class="slide-btn">
										<a href="">View</a>
									</div>
									<img src="<?php echo base_url('upload/admin/produk/133.png'); ?>">
								</div>

							</div>
							<div class="box-slide">
								<div class="slide-body-1">
									<div class="slide-text">
										Perlengkapan Kecantikan wanita masa kini
									</div>
									<div class="slide-btn">
										<a href="">View</a>
									</div>
									<img src="<?php echo base_url('upload/admin/produk/114.png'); ?>">
								</div>

							</div>
						</div>
						<div class="col-md-4">
							<div class="produk-card">
								<a href="<?php echo site_url('produk/' . $barang['id_produk']) ?>">
									<div class="body-card-produk" style="background-color:#6747c7; ">
										<div class="gambar">
											<img src="<?php echo base_url('upload/admin/produk/' . $barang['id_gambar']) ?>" width="150" height="150">
										</div>

										<div class="tulisan">
											Rekomendasi
										</div>
									</div>
								</a>
							</div>
							<div class="produk-card">
								<a href="<?php echo site_url('produk/' . $barang2['id_produk']) ?>">
									<div class="body-card-produk">
										<div class="gambar">
											<img src="<?php echo base_url('upload/admin/produk/' . $barang1['id_gambar']) ?>" width="150" height="150">
										</div>

										<div class="tulisan">
											Popular
										</div>
									</div>
								</a>
							</div>
							<div class="produk-card">
								<a href="<?php echo site_url('produk/' . $barang1['id_produk']) ?>">
									<div class="body-card-produk">
										<div class="gambar">
											<img src="<?php echo base_url('upload/admin/produk/' . $barang2['id_gambar']) ?>" width="150" height="150">
										</div>

										<div class="tulisan">
											Terbaru
										</div>
									</div>
								</a>
							</div>
							<div class="produk-card">
								<a href="<?php echo site_url('produk/' . $barang3['id_produk']) ?>">
									<div class="body-card-produk" style="background-color:#6747c7; ">
										<div class="gambar">
											<img src="<?php echo base_url('upload/admin/produk/' . $barang3['id_gambar']) ?>" width="150" height="150">
										</div>

										<div class="tulisan">
											Diskon
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="page-container">
				<div class="container-fluid">
					<!--containerfull-->
					<div class="row">

						<div class="market">
							<div class="market-box">


								<!---officialstore-->

								<div class="box-head">
									<div class="box-badan">Official Store</div>
								</div>
								<hr>
								<div class="container-fluid">
									<div class="row">
										<?php if (count($item) > 0) : ?>
											<?php foreach ($item as $row) : ?>
												<div class="shop-card">
													<a href="<?php echo site_url('produk/' . $row['id_produk']) ?>">
														<div class="body-card">
															<div class="slider">
																<img src="<?php echo base_url('upload/admin/produk/' . $row['id_gambar']) ?>">
															</div>
															<div class="title">
																<h5><?php echo $row['nama_produk']; ?> </h5>
															</div>
															<div class="cta">
																<div class="price"><?php echo 'Rp.' . $row['harga'] ?></div>
															</div>
														</div>
													</a>
												</div>
											<?php endforeach; ?>
										<?php else : ?>
											<p>Barang Tidak Ditemukan</p>
										<?php endif; ?>
									</div>
									<?php echo $pagination; ?>
								</div>
							</div>
						</div>
					</div>



				</div>

			</div>
			<!--containerfull1-->

			<?php if ($this->session->flashdata('sukses')) : ?>
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
								<center>
									<?php echo $this->session->flashdata('sukses'); ?> </center>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
							</div>
						</div>
					</div>
				</div> <!-- end div -->
			<?php endif; ?>
			<footer class="footer-wrapper">
				<div class="main-footer">
					<div class="container">
						<div class="clearfix">
							<div class="footer-item">

								<ul>
									<li>
										<h5>About Us</h5>
									</li>
									<li><a href="">Tentang Beauty Shop/a></li>
									<li><a href=""> Official Store</a></li>
									<li><a href=""> Support Pembayaran</a></li>
								</ul>
							</div>
							<div class="footer-item">
								<ul>
									<li>
										<h5>Support</h5>
									</li>
									<li><a href="">Tentang Fit BSA</a></li>
									<li><a href=""> Official Store</a></li>
									<li><a href=""> Support Pembayaran</a></li>
								</ul>
							</div>
							<div class="footer-item">

								<ul>
									<li>
										<h5>Marketplace</h5>
									</li>
									<li><a href="">Tentang Beauty Shop</a></li>
									<li><a href=""> Official Store</a></li>
									<li><a href=""> Support Pembayaran</a></li>
								</ul>
							</div>
							<div class="footer-item">

								<ul>
									<li>
										<h5>Bantuan</h5>
									</li>
									<li><a href="">Tentang Beauty Shop</a></li>
									<li><a href=""> Official Store</a></li>
									<li><a href=""> Support Pembayaran</a></li>
								</ul>
							</div>

						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="logo-footer">
							<img src="<?php echo base_url('upload/admin/produk/logobwh.png'); ?>" width="40" class="mr-2" alt="LOgo Fit Bsa">
							<div class="teks-footer">
								<small>&copy;2022, Beauty Shop</small>
							</div>
						</div>

					</div>
				</div>
			</footer>

			<script type="text/javascript" src="<?php echo base_url('assets/js/') ?>jquery.min.js"></script>
			<script src="<?php echo base_url('assets/js/') ?>jquery.nice-number.js"></script>
			<script src="<?php echo base_url('assets/slick/slick.min.js') ?>"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
			<script>
				$('#myModal').modal('show');

				$(document).ready(function() {
					$('.responsive').slick({
						autoplay: true,
						autoplaySpeed: 5000
					});
				});
			</script>




		</body>

	</html>
<?php endif; ?>