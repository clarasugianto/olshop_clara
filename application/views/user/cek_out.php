<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$id = $this->session->userdata('id');
$qry1 = $this->db->query("SELECT * from member WHERE id_member='$id'")->row_array();
$no =$this->db->query("SELECT * FROM transaksi ORDER BY kode_transaksi DESC ");
$no_id=$no->row_array('kode_transaksi');
$kd=$no_id['kode_transaksi'];
$urut=substr($kd, 23,3);
$tambah=(int)$urut+1;
$bln=date("m");
$thn=date("Y");
$tgl=date("d");
if (strlen($tambah)==1) {
  $format="JLB-".$thn.$bln.$tgl."-XIX-".$bln.$tgl."-100".$tambah;
}else if(strlen($tambah)==2){
  $format="JLB-".$thn.$bln.$tgl."-XIX".$bln.$tgl."-10".$tambah;
}else{
  $format="JLB-".$thn.$bln.$tgl."-XIX".$bln.$tgl."-1".$tambah;
}

?>
<?php $this->user_login->cek_login();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale1.0">
	<title>Fit-bsaShop - Check Out</title>
	<link rel="shortcut icon" href="">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>css/fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="aos-master/dist/aos.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>css/css.css">
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<link href="<?php echo base_url('assets/') ?>css/jquery.nice-number.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:500" rel="stylesheet">
</head>
<body>
		<!-- Modal Alamat-->
	<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Ubah Alamat</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?php echo base_url('update-address'); ?>" method="post">
						<textarea name="alamat" placeholder="Ketik di sini..."><?php echo $qry1['alamat'] ?></textarea>
						
						<p class="text-muted" style="font-size: 13px;">Masukkan Alamat Anda Secara Lengkap Agar Mempermudah Proses Pengiriman</p>
						<p class="text-muted" style="font-size: 13px;">Contoh : RT.01 RW. 01 Jln Paimin no.48 Kec. Bandung Kab. Tulungagung,Jawatimur,66275</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</form>
				</div>
			</div>
		</div>
	</div>
		<!-- Modal Telepon-->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Ubah No Hp</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?php echo base_url('update-telp'); ?>" method="post">
						<input type="text" name="telp" class="form-control" style="width: 200px;">
						<p class="text-muted" style="font-size: 13px;">Untuk Melanjutkan Transaksi,Silahkan Memasukan No Hp Anda.</p>
						<p class="text-muted" style="font-size: 13px;">Contoh : 08121788787</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</form>
				</div>
			</div>
		</div>
	</div>
<!-- Modal Ongkir -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Hitung Ongkir</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?php echo base_url('check-all'); ?>" method="post">
						<label>Pilih Kota</label><br>
						<select name="id_kota" data-live-search="true" class="selectpicker">
							<option disabled="true">Pilih Kota</option>
						<?php foreach ($city as $row): ?>
							<option value="<?= $row['city_id'] ?>"><?= $row['city_name'] ?></option>
							<?php endforeach ?>
						</select>
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</form>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view('user/navbar'); ?>
		<div class="page-container">
		<div class="container" style="padding: 4%;">
			<div class="row" style="padding-top: 8%;">
				<div class="col-sm-8">
					<h3 style="font-weight: 800;">Checkout</h3>
					<div class="heading-bar-cart">
						<div class="checkbox-body">
							<h5 style="font-weight: 600;">Alamat Pengiriman</h5>
						</div>
						<hr style="margin-top: 0px;">
						<h6 style="font-weight: 600;"><?php echo $this->session->userdata('name'); ?></h6>
						<span><p style="margin-bottom: 8px; font-size: 15px;"><?php echo $qry1['telepon'] ?></p></span>
						<span><p><?php echo $qry1['alamat'] ?></p></span>
						<div class="btn-address">
							<a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModalLong">Ubah Alamat</a>
							<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal" >Hitung Ongkir</button>
							<div class="kurir">
								<label>Kurir:&nbsp;</label>
								<span>JNE</span>
							</div>
						</div>
					</div>
					<div class="heading-bar-cart">
						<form action="<?php echo base_url('pay-cart'); ?>" method="post">
						<input type="hidden" value="<?php echo $format; ?>" name="kode_transaksi">
						<input type="hidden" value="<?php echo $id; ?>" name="id_member">
						<?php foreach ($produk as $row): ?>
							<input type="hidden" name="harga[]" value="<?php echo $row['harga'] ?>">
							<input type="hidden" name="id_produk[]" value="<?php echo $row['id_produk'] ?>">
							<input type="hidden" name="stok[]" value="<?php echo $row['jumlah'] ?>">
							<input type="hidden" value="<?php echo $format; ?>" name="kd_trans[]">
							<input type="hidden" value="<?php echo $row['id_member']; ?>" name="id[]">
							<div class="checkbox-body">
								<?php $harga = "Rp. " . number_format($row['harga'],0,'','.'); 
									  $total = (int)$row['jumlah']*(int)$row['harga'];
								?>
								<input type="hidden" value="<?php echo $total ?>" name="total[]">
								<div class="label">
									<img src="<?php echo base_url('upload/admin/produk/'.$row['id_gambar']) ?>">
								</div>
								<div class="cart-price" style="width: 50%;">
									<div class="product-name"><?php echo $row['nama_produk'] ?></div>
									<div class="product-price" style="margin-bottom: 8px;"><?php echo $harga; ?></div>
									<div><span class="text-muted" style="font-size: 14px;"><?php echo $row['jumlah'] ?> Barang</span></div>
								</div>
							</div>
						<?php endforeach ?>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="transaksi">
						<div class="body-transaksi">
							<div class="heading-transaksi">Ringkasan Belanja</div>
							<div class="summary-price">
								<div>
									<div class="label-transaksi">
										<div class="total-ongkir">
											<div class="sp-price">
												<div class="sp-detail">Total Ongkir</div>
											<?php
											error_reporting(0);
											$ongkir_total=0;
											if ($this->session->userdata('id_kota')=='') : ?>
												<?php echo "Rp.".$ongkir_total; ?>
											<?php
											else:
												if ($this->session->userdata('id_kota') == 492){
													foreach ($ongkir[0]['costs'] as $detail) {
														$ongkir_total += $detail['cost'][0]['value'];
														echo "<input type='hidden' name='ongkir' value='".$ongkir_total."' >";
														echo "<div class='sp-price'>Rp.".$ongkir_total."</div>";
													
													}  
												}else{
													 $nama_layanan = $ongkir[0]['costs'][1]['service'];
													foreach ($ongkir[0]['costs'][1]['cost'] as $detail) {
														$ongkir_total += $detail['value'];
														echo "<input type='hidden' name='ongkir' value='".$ongkir_total."' >";
													echo "<div class='sp-price'>Rp.".$ongkir_total."</div>";
													}
												} 
											?>
										<?php endif; ?>
										</div>
										</div>
										<div class="label-sp">
											<div class="sp-detail">Total Harga</div>
											<div class="sp-price">Rp. <?php echo number_format($qry['total']+$ongkir_total,0,'','.'); ?></div>
										</div>

									</div>
								</div>
							</div>
							<div> 
								<?php if ($qry1['telepon']!=NULL): ?>
									<button type="submit" class="btn btn-block action-btn">Pilih Pembayaran</button>
									</form>
										<?php else: ?>
										<button type="button" class="btn btn-block action-btn" data-toggle="modal" data-target="#exampleModalCenter">
										Pilih Pembayaran
										</button>
								<?php endif ?>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	