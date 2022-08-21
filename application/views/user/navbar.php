<?php
defined('BASEPATH') or exit('No direct script access allowed');
$id = $this->session->userdata('id');
$jumlah = $this->db->query("SELECT COUNT(id_produk) as total from keranjang WHERE id_member='$id'")->row_array();
?>
<?php if ($this->session->userdata('masuk') == TRUE) : ?>
	<nav class="navbar">
		<div class="container-navbar">
			<div class="brand">
				<a href="<?php echo base_url(); ?>">
					<span>Beauty Shop</span>
				</a>
			</div>
			<div class="navbar-search">
				<form action="<?php echo site_url('search'); ?>" method="get">
					<div class="input-group" ;>
						<input type="text" class="form-control" name="search" placeholder="Search.." aria-label="Recipient's username" aria-describedby="button-addon2">
						<div class="input-group-append">
							<button class="btn btn-outline-light" style="background:#6747c7; color: #fff; " type="submit" id="button-addon2">
								<i class="fas fa-search"></i>
							</button>
						</div>
					</div>
				</form>
			</div>
			<div class="navbar-right">
				<div class="side-right">
					<div class="dropdown">
						<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff;">
							<?php $query = $this->db->query("SELECT * FROM member WHERE email='" . $this->session->userdata("email") . "' ")->row_array(); ?>
							<?php if ($query['password'] == NULL) : ?>
								<img src="<?php echo $this->session->userdata('foto');  ?>" width="20" height="20" style="border-radius: 10px;">
							<?php else : ?>
								<img src="<?php echo base_url('assets/img/user.jpg') ?>" width="20" height="20" style="border-radius: 10px;">
							<?php endif; ?>
							<span style="padding-left: 2px; margin-bottom: 4px;"><?php echo $this->session->userdata('name'); ?></span>
						</a>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							<a class="dropdown-item" href="#">Profile</a>
							<a class="dropdown-item" href="<?php echo base_url("order-history") ?>">Riwayat transaksi</a>
							<a class="dropdown-item" href="<?php echo base_url("logout") ?>">Logout</a>
						</div>
					</div>
				</div>
				<div class="icon-right">
					<a href="<?php echo base_url('cart'); ?>">
						<i class="fas fa-cart-arrow-down"></i>

					</a>
					<span class="badge"><?php echo $jumlah['total']; ?></span>
				</div>

			</div>
		</div>

	</nav>
<?php else : ?>
	<nav class="navbar">
		<div class="container-navbar">
			<div class="brand">
				<a href="<?php echo base_url(); ?>">
					<span>Beauty Shop</span>
				</a>
			</div>
			<div class="navbar-search">
				<form action="<?php echo site_url('cari'); ?>" method="get">
					<div class="input-group" ;>
						<input type="text" class="form-control" name="cari" placeholder="Search.." aria-label="Recipient's username" aria-describedby="button-addon2">
						<div class="input-group-append">
							<button class="btn btn-outline-light" style="background:#6747c7; color: #fff; " type="submit" id="button-addon2">
								<i class="fas fa-search"></i>
							</button>
						</div>
					</div>
				</form>
			</div>
			<div class="navbar-right">
				<div class="side-right1">
					<div class="btn-group group-right" role="group" aria-label="Basic example" style="width: 190px !important;">
						<a class="btn a" href="<?php echo base_url('login'); ?>" style="color: #fff;">Masuk</a>
						<a class="btn b" style="background-color: #fff; color:#6747c7;" href="<?php echo base_url('register'); ?>">Daftar</a>
					</div>
				</div>
				<div class="icon-right">
					<a href="<?php echo base_url('cart'); ?>">
						<i class="fas fa-cart-arrow-down"></i>
					</a>
				</div>

			</div>
		</div>

	</nav>
<?php endif ?>