<?php
defined('BASEPATH') or exit('No direct script access allowed');
$query = $this->db->query("SELECT * FROM member WHERE email='" . $this->session->userdata('email') . "'")->row_array();

$this->user_login->cek_login();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale1.0">
	<title>BEAUTY SHOP- Homepage</title>
	<!-- Favicon -->
	<link rel="shortcut icon" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fontawesome/css/all.min.css') ?> ">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/slick/slick.css') ?> ">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/slick/slick-theme.css') ?> ">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/css.css') ?> ">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:500" rel="stylesheet">


	</style>
</head>

<body>
	<?php $this->load->view('user/navbar'); ?>

	<div class="page-container">
		<div class="container-fluid" style="padding: 8%;">
			<!--containerfull-->
			<div class="row">

				<div class="sidebar">
					<!--sidebar-->
					<div class="sidebar-admin">
						<div class="profile-admin">
							<div class="admin">
								<div class="profile-img">
									<?php if ($query['password'] == NULL) : ?>
										<img src="<?php echo $this->session->userdata('foto');  ?>" width="30" height="30" style="border-radius: 4px;">
									<?php else : ?>
										<img src="<?php echo base_url('assets/img/user.jpg') ?>" width="30" height="30" style="border-radius: 4px;">
									<?php endif; ?>
									<span style="font-size: 14px; padding-left: 6px; color:#6747c7; font-weight: 600; "> <?php echo $this->session->userdata('name'); ?></span>
								</div>
								<div class="admin border-bottom mb-3 mt-4">
									<div class="detail-user">
										<label class="label-head">Alamat Email</label>
										<label class="label-body"><?php echo $query['email']; ?></label>
									</div>

								</div>
								<div class="admin border-bottom mb-3">
									<div class="detail-user">
										<label class="label-head">Nomer HP</label>
										<label class="label-body"><?php echo $query['telepon'] ?></label>
									</div>

								</div>
								<div class="admin border-bottom mb-4">
									<div class="detail-user">
										<label class="label-head">Alamat</label>
										<label class="label-body text-left"><?php echo $query['alamat'] ?></label>
									</div>

								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="market" style="width: 75%;">
					<div class="market-box responsive">
						<div class="box-slide" style="width: 830px;">
							<div class="slide-body" style="width: 830px;">
								<div class="slide-text">
									Perlengkapan Kecantikan Wanita Masa Kini
								</div>
								<div class="slide-btn">
									<a href="">View</a>
								</div>
								<img src="<?php echo base_url('upload/admin/produk/133.png'); ?>">
							</div>

						</div>
						<div class="box-slide" style="width: 830px;">
							<div class="slide-body-1" style="width: 830px;">
								<div class="slide-text">
									Perlengkapan Kecantikan Wanita Masa Kini
								</div>
								<div class="slide-btn">
									<a href="">View</a>
								</div>
								<img src="<?php echo base_url('upload/admin/produk/114.png'); ?>">
							</div>

						</div>
					</div>
				</div>

				<!---officialstore-->
				<div class="container">
					<div class="box-head">
						<div class="box-badan">Official Store</div>
					</div>
					<hr>
				</div>
				<div class="container-fluid">
					<div class="row">
						<?php if (count($item) > 0) : ?>
							<?php foreach ($item as $row) : ?>
								<div class="shop-card">
									<a href="<?php echo site_url('produk/' . $row['id_produk']) ?>">
										<div class="body-card">
											<div class="slider">
												<img src="<?php echo base_url('upload/admin/produk/' . $row['id_gambar']) ?>" style="width: 150px; height: 150px;">
											</div>
											<div class="title">
												<h5><?php echo $row['nama_produk']; ?></h5>
											</div>
											<div class="cta">
												<?php $harga = "Rp. " . number_format($row['harga'], 0, '', '.'); ?>
												<div class="price"><?php echo $harga; ?></div>
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