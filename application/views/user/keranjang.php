<?php
$id = $this->session->userdata('id');
$qry = $this->db->query("SELECT SUM(harga) as total from keranjang WHERE id_member='$id'")->row_array();
defined('BASEPATH') OR exit('No direct script access allowed');
 $this->user_login->cek_login();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale1.0">
	<title>Fit-bsaShop - Keranjang</title>
	<link rel="shortcut icon" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>css/fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>aos-master/dist/aos.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>css/css.css">
	<link href="<?php echo base_url('assets/') ?>css/jquery.nice-number.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>slick/slick-theme.css"/>
	<link href="https://fonts.googleapis.com/css?family=Quicksand:500" rel="stylesheet">
</head>
<body>
	<?php $this->load->view('user/navbar'); ?>
	<div class="page-container">
		<div class="container" style="padding: 6%;">
			<div class="row"> 
				<div class="checkout-container">
					<div class="col-sm-8">
						<div class="heading-bar-cart">
							<div class="checkbox-body">

								<div class="label">
									Produk yang Anda simpan
								</div>
							</div>
						</div>
							<form method="post" action="<?php echo base_url('cart-update'); ?>">
							<?php if($produk) :?>
							<div class="heading-bar-cart">
								<div class="checkbox-body">
									
									<?php foreach ($produk as $row): ?>
									<?php $harga = "Rp. " . number_format($row['harga'],0,'','.'); ?>
									
									<div class="label">
										<img src="<?php echo base_url('upload/admin/produk/'.$row['id_gambar']) ?>">
									</div>
									<div class="cart-price">
										<input type="number" min="1" name="stok[]" value="<?php echo $row['jumlah']?>" max="<?php echo $row['stok'] ?>" required>
										<input type="hidden" value="<?php echo $row['id_produk'] ?>" name="id_produk[]">
										<input type="hidden" value="<?php echo $row['id_member'] ?>" name="id_member[]">
										<input type="hidden" value="<?php echo $row['harga'] ?>" name="harga[]">
										<div class="product-name"><?php echo $row['nama_produk'] ?></div>
										
											<div class="stock-produk">Stok : <?php echo $row['stok'] ?></div>
										
										<div class="product-price"><?php echo $harga ?></div>

									</div>
									<div class="buy">
										<a href="<?php echo base_url('product-delete/'.$row['id_produk'])?>" class="btn btn-success" style="width: 70px;">Hapus</a>
									</div>
									<?php endforeach; ?>
								</div>
							</div>
								
					</div>
					<div class="col-sm-4">
						<div class="transaksi">
							<div class="body-transaksi">
								<div class="heading-transaksi">Ringkasan Belanja</div>
								<div class="summary-price">
								<div>
									<div class="label-transaksi">
										<div class="sp-detail">Total Harga</div>
										
										<div class="sp-price"><?php echo'Rp. '.number_format($qry['total'],0,'','.'); ?></div>
									
									</div>
								</div>
							</div>
						
							<div class="action">
								<div class="left-btn">
									<a href="<?php echo base_url('check-out'); ?>" class="btn action-btn" style="float: left;">Beli</a>
								</div>
								<div class="right-btn">
								<button class="btn btn-success" type="submit" style="float: right;">Update</button>
								</div>
							</div>
							</div>
						</div>
					</div>
					
				</div>
			</form>
						<?php else: ?>
							<div class="heading-bar-cart">
								<div class="checkbox-body">
									
									<div class="cart-price">
										<div class="product-name"><h3 align="center">Keranjang  Masih Kosong</h3></div>
						<a href="<?php echo base_url() ?>" class="btn btn-block action-btn">Mulai Belanja</a>

									</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
						<div class="transaksi">
							<div class="body-transaksi">
								<div class="heading-transaksi">Ringkasan Belanja</div>
								<div class="summary-price" >
								<div>
									<div class="label-transaksi" style="margin-bottom : 15px;">
										<div class="sp-detail">Total Harga</div>
										
										<div class="sp-price"><?php echo 'Rp. 0'; ?></div>
									
									</div>
								</div>
							</div>
						
							<div class="action">
								<div class="left-btn">
									<button class="btn action-btn" style="float: left;">Beli</button>
								</div>
								<div class="right-btn">
								<button class="btn btn-success" style="float: right;">Update</button>
								</div>
							</div>
							</div>
						</div>
					</div>
						<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="page-container">
		<div class="container"><!--containerfull-->
			<div class="row">

				<div  class="market" style="height: 500px;">
					<div class="market-box">


						<!---officialstore-->

						<div class="box-head">
							<div class="box-badan" style="font-size: 17px; text-transform: uppercase;">Kamu mungkin juga suka</div>
						</div>
						<hr>
						<div class="container-fluid">
							<div class="row">
								<?php foreach($rekom as $row) : ?>
								<div class="shop-card">
									<a href="<?php echo site_url('produk/'.$row['id_produk']) ?>">
										<div class="body-card">
											<div class="slider">
												<img src="<?php echo base_url('upload/admin/produk/'.$row['id_gambar']) ?>">
											</div>
											<div class="title">
												<h5><?php echo $row['nama_produk'] ?></h5> 		
											</div>
											<div class="cta">
												<?php $harga = "Rp. ". number_format($row['harga'],0,'','.');?>
												<div class="price"><?php echo $harga ?></div>
											</div>
										</div>
									</a>
								</div> <!-- end shop card div -->
							<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>



		</div>

	</div><!--containerfull1-->