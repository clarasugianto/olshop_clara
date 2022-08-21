<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 $this->user_login->cek_login();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale1.0">
	<title>Fit-bsaShop- Pembayaran</title>
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
				
				<div class="alert alert-success text-center" role="alert" style="width: 100%;">
					<h4 class="alert-heading" style="font-weight: bold;">Selamat Transaksi Anda Berhasil</h4>
					<p>Segera selesaikan transaksi anda sebesar</p> 
						<p style="font-size: 25px;"><b>Rp. <?php echo number_format($qry['total_semua']+$qry1['ongkir'],0,'','.'); ?></b></p> 
						sebelum tanggal <b><?php echo date('d M Y, h:i',strtotime($qry['tenggat'])); ?> WIB</b>
				</div>

				<div class="col-sm-8">
					<div class="heading-bar-cart">
						<div class="checkbox-body">

							<div class="label">
								Pilih Opsi Pembayaran
							</div>
						</div>
					</div>
					<form enctype="multipart/form-data" method="post" action="<?php echo base_url('pay-procces'); ?>">
						<input type="hidden" name="kode_transaksi" value="<?php echo $qry['kode_transaksi']; ?>">
						<div class="heading-bar-cart">
							<div class="checkbox-body">
								
								<label class="containere">
									<input type="radio" name="rek_bayar" value="87291782901">
									<span class="checkmark"></span>
								</label>
								
								<div class="label">
									<img src="https://i.ibb.co/4sjLwPK/kisspng-bank-negara-indonesia-logo-bank-bni-syariah-pt-sym-republik-logo-bank-5b7964f47f6cd5-984586111534682356522.png" style="width: 150px; height: 80px;">
								</div>
								<div class="cart-price" style="width: 50%;">
									<div class="product-name" style="font-size: 20px;">Nomor Rekening:</div>
									<div class="product-price" style="font-size: 18px;">87291782901</div>
									<div class="product-name" style="font-size: 18px;">A/N Hanif Muhammad</div>


								</div>
							</div>
						</div>
						<div class="heading-bar-cart">
							<div class="checkbox-body">
								<label class="containere">
									<input type="radio" name="rek_bayar" value="53435346343">
									<span class="checkmark"></span>
								</label>

								<div class="label">
									<img src="https://i.ibb.co/M94gp1L/kisspng-bank-central-asia-logo-vector-graphics-bank-di-ind-mausaya-com-5b7f5a9e62cad1-9275941515350729264047.png" style="width: 150px; height: 70px;">
								</div>
								<div class="cart-price" style="width: 50%;">
									<div class="product-name" style="font-size: 20px;">Nomor Rekening:</div>
									<div class="product-price" style="font-size: 18px;">53435346343</div>
									<div class="product-name" style="font-size: 18px;">A/N Hanif Muhammad</div>


								</div>
							</div>
						</div>
						<div class="heading-bar-cart">
							<div class="checkbox-body">
								<label class="containere">
									<input type="radio" name="rek_bayar" value="343353535345354">
									<span class="checkmark"></span>
								</label>

								<div class="label">
									<img src="https://statik.tempo.co/data/2010/10/20/id_51054/51054_620.jpg" style="width: 150px; height: 70px;">
								</div>
								<div class="cart-price" style="width: 50%;">
									<div class="product-name" style="font-size: 20px;">Nomor Rekening:</div>
									<div class="product-price" style="font-size: 18px;">343353535345354</div>
									<div class="product-name" style="font-size: 18px;">A/N Hanif Muhammad</div>


								</div>
							</div>
						</div>
						<div class="heading-bar-cart">
							<div class="checkbox-body">
								<div class="sender">
									<form>
									<div class="name-sender">
										<label>Nama Pengirim</label>
										<input type="text" name="nama" required>
										<?php echo form_error('nama'); ?>
									</div>
									<div class="name-sender">
										<label>Rekening Pengirim</label>
										<input type="text" name="norek_send" required>
										<?php echo form_error('norek_send'); ?>
									</div>
									<div class="name-sender">
										<label>Jumlah Uang</label>
										<input type="text" name="uang" required>
										<?php echo form_error('uang'); ?>
									</div>
									</form>	
								</div>
								<div class="input-group mb-3 mt-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
									</div>
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="inputGroupFile01" name="bukti" aria-describedby="inputGroupFileAddon01">
										<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
									</div>
								</div>
								<button class="btn btn-success"> Kirim</button>

							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

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