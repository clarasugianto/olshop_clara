<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$this->user_login->cek_login(); 
$id = $this->session->userdata('id');
$tgl = $this->db->query("SELECT DATE_ADD(tanggal_transaksi, INTERVAL 1 DAY) AS besok from transaksi WHERE id_member='$id' ")->row_array();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale1.0">
	<title>Fit-bsaShop - Riwayat Transaksi</title>
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
				<div class="card" style="width: 100%; height: auto;">
					<div class="card-body">
						<h5 style="font-weight: 600; margin-bottom: 24px;">Riwayat Transaksi</h5>
						<?php if (count($detail)>0){ ?>
						<?php foreach ($detail as $row): ?>
							
							<?php if ($row['status_bayar']==0){ ?>
								<div class="body-transaksi" style="margin-top: 20px;">
									<div class="payment-body" style="align-items: ">
										<div class="label">
											<img src="<?php echo base_url('upload/admin/produk/'.$row['id_gambar']) ?>" style="margin-top: 36px;">
										</div>
										<div class="cart-price" style="width: 65%;">
											<?php if($row['barang']==1) : ?>
											<div class="product-name"><?php echo $row['nama_produk'] ?></div>
											<?php else: ?>
												<?php $jumlah =  (int)$row['barang']-1; ?>
												<div class="product-name"><?php echo $row['nama_produk'].' Dan '.$jumlah.' Lainnya'; ?></div>
											<?php endif; ?>
											<div class="product-price" style="display: flex;">
												<span class="total-harga">Total:</span> 
												<?php $harga = number_format($row['jumlahe'],0,'','.'); ?>
												<?php echo 'Rp.'.$harga; ?>
												<div class="date-buy">Tanggal Pembelian</div>
												<?php $date= date('d M Y, H:i',strtotime($row['tanggal_transaksi']));
												?>
												<div class="date-transaksi"><?php echo $date; ?><b> WIB</b></div>
											</div>
											<div class="cart-payment-reminder">
												Bayar sebelum <?php echo date('d M Y, H:i',strtotime($tgl['besok'])); ?> WIB
											</div>
											<div class="payment-box">
												<div class="detail-transaksi">
													<a href="">Detail</a>
												</div>	
											</div>								

										</div>
										<div class="payment-disagre">Menunggu Pembayaran</div>
									</div>
								</div>
								<?php }else if($row['status_bayar']==1){ ?>

								<div class="body-transaksi" style="margin-top: 20px;">
									<div class="payment-body" style="align-items: ">
										<div class="label">
											<img src="<?php echo base_url('upload/admin/produk/'.$row['id_gambar']) ?>" style="margin-top: 36px;">
										</div>
										<div class="cart-price" style="width: 65%;">
											<?php if($row['barang']==1) : ?>
											<div class="product-name"><?php echo $row['nama_produk'] ?></div>
											<?php else: ?>
												<?php $jumlah =  (int)$row['barang']-1; ?>
												<div class="product-name"><?php echo $row['nama_produk'].' Dan '.$jumlah.' Lainnya'; ?></div>
											<?php endif; ?>
											<div class="product-price" style="display: flex;">
												<span class="total-harga">Total:</span> 
												<?php $harga = number_format($row['jumlahe'],0,'','.'); ?>
												<?php echo 'Rp.'.$harga; ?>
												<div class="date-buy">Tanggal Pembelian</div>
												<?php $date= date('d M Y, H:i',strtotime($row['tanggal_transaksi']));
														// $tujuh_hari        = mktime(0,0,0,date("n"),date("j")+1,date("Y"));
														// $kembali        = date("d M Y, H:i ", $tujuh_hari);
												$kembali= date('d M Y, H:i',strtotime($row['tanggal_transaksi']));
												?>
												<div class="date-transaksi"><?php echo $date; ?><b> WIB</b></div>
											</div>
											<div class="payment-box">
												<div class="metode-payment">
													Metode Pembayaran : 
													<?php if ($row['rekening_pembayaran']=='87291782901'){ ?>
														<span style="font-weight: bold;">Bank BNI</span>
													<?php }else if($row['rekening_pembayaran']=='53435346343'){ ?>
														<span style="font-weight: bold;">Bank BCA</span>
													<?php} else if ($row['rekening_pembayaran']=='343353535345354'){ ?>
														    <span style="font-weight: bold;">Bank BRI</span>
													<?php } ?>
														
												</div>
												<div class="kode-payment">
													Kode Pembayaran &nbsp;&nbsp;&nbsp;&nbsp;:
													<span style="font-weight: bold;"><?php echo $row['rekening_pembayaran'] ?></span> 
												</div>
												<div class="detail-transaksi">
													<a data-toggle="modal" data-target="#exampleModalScrollable<?= $row['kode_transaksi']  ?>">Detail</a>
												</div>	
											</div>								

										</div>
										<div class="payment-agree">Pembayaran Sukses</div>

									</div>

								</div>
								<!-- Modal -->
										<div class="modal fade " id="exampleModalScrollable<?= $row['kode_transaksi']  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">

										  <div class="modal-dialog" role="document">
										    <div class="modal-content modal-admin ">
										      <div class="modal-header">
										        <h5 class="modal-title" id="exampleModalScrollableTitle">Detail Transaksi</h5>
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										          <span aria-hidden="true">&times;</span>
										        </button>
										      </div>
										      <div class="modal-body">
										        <div class="row">
													<div class=" detail-pesanan">
														<div class="card-body">
															<?php $id= $row['kode_transaksi']; ?>
															<?php $select = $this->db->query("SELECT *,SUM(total) as totalan FROM header_transaksi JOIN trx ON header_transaksi.kode_transaksi=trx.kode_transaksi WHERE header_transaksi.kode_transaksi='$id' GROUP BY header_transaksi.kode_transaksi ")->row_array(); ?>
															<?php $select1 = $this->db->query("SELECT *,produk.harga AS rego,trx.harga AS price FROM trx JOIN produk ON trx.id_produk=produk.id_produk WHERE kode_transaksi='$id' ")->result_array(); ?>
														
															<h3 style="font-weight: 600;">Detail Pesanan</h3>
															<hr>
															<div class="status-pesanan">
																<div class="pesanan">
																	<h5>Status Pesanan</h5>
																	<h6>Pesanan Selesai</h6>
																	<hr>
																</div>
																<div class="status-tanggal">
																	<h6>Tanggal Pembelian</h6>
																	<h5><?php echo date('d M Y, H:i',strtotime($select['tanggal_transaksi'])); ?></h5>
																</div>
																<hr>
															</div>
															<div class="daftar-produk">
																<h5>Daftar Produk</h5>
																<hr>
																<div class="heading-bar-cart" style="border-bottom: none;">
																	<?php foreach ($select1 as $value): ?>
																		
																	
																		<div class="checkbox-body">

																			<div class="label">
																				<img src="<?php echo base_url('upload/admin/produk/'.$value['id_gambar']) ?>">
																			</div>
																			<div class="cart-price" style="max-width: 200px;">
																				<div class="product-name"><?php echo $value['nama_produk'] ?></div>
																				<div class="product-price"><?php 
																				if ($value['price']==$value['rego']) {
																					$harga=number_format($value['rego'],0,'','.');
																					$rego = $value['rego'];
																				}else{
																					$harga=number_format($value['grosir'],0,'','.');
																					$rego = $value['grosir'];
																				}
																				 ?> 
																				<?php $jumlah = $rego*$value['jumlah'];
																						$jumlah_total = number_format($jumlah,0,'','.');
																				 ?>
																				<?php echo "Rp. ".$harga; ?></div>
																				<p class="text-muted mt-1" style="font-size: 14px;"><?php echo $value['jumlah'] ?> barang</p>
																				<p style="font-size: 15px;">Total Harga&nbsp;:&nbsp;
																					
																				</p>
																				<span style="color: #ff3100; font-weight: 600;"><?php echo "Rp. ".$jumlah_total; ?></span>
																			</div>
																			<div class="buy" style="top: 70px;">
																				<a href="<?php echo site_url('produk/'.$value['id_produk']) ?>" class="btn btn-success">Beli Lagi</a>
																			</div>
																		
																		</div>
																	<?php endforeach; ?>

																	<hr>
																</div>
															</div>
															<div class="detail-pengiriman">
																<h5>Detail Pengiriman</h5>
																<hr>
																<div class="detail-body">
																	<div class="detail-name">
																		<h6>Nama Penerima</h6>
																		<h6>Alamat Penerima</h6>
																		<h6>Nomor Telepon</h6>
																	</div>

																	<div class="detail-value">
																		<?php $name=$this->db->query("SELECT * FROM member WHERE id_member='".$select['id_member']."'")->row_array(); ?>
																		<h6><?php echo $name['nama']; ?></h6>
																		<h6><?php echo $name['alamat']; ?></h6>
																		<h6><?php echo $name['telepon'] ?></h6>
																	</div>
																</div>
																<hr>
															</div>

															<div class="detail-informasi">
																<h5>Informasi Pembayaran</h5>
																<hr>
																	<div class="pesanan-informasi">
																		<h6>Metode Pembayaran</h6>
																		<h5><?php echo $select['rekening_pembayaran'] ?></h5>
																		<hr>
																	</div>
																	<hr>
																	<div class="pesanan-informasi">
																		<h6>Total Harga</h6>
																		<h5><?php echo "Rp. ".number_format($select['totalan'],0,'','.'); ?></h5>
																		<hr>
																	</div>
																	<hr>
																	<div class="pesanan-informasi">
																		<h6>Tanggal Pembayaran</h6>
																		<h5><?php echo date('d M Y, H:i',strtotime($select['tanggal_pembayaran'])); ?></h5>
																		<hr>
																	</div>
																	<hr>
																	<div class="informasi-pembayaran">
																		<h6>Total Pembayaran</h6>
																		<h5><?php echo "Rp. ".number_format($select['jumlah_bayar'],0,'','.'); ?></h5>
																	</div>
																	<hr>
																
															</div>
														</div>
													</div>
												</div>
										      </div>
										      <div class="modal-footer">
										        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
										        <button type="button" class="btn btn-primary">Cetak Bukti</button>
										      </div>
										    </div>
										  </div>
										</div>

								<?php }else if($row['status_bayar']==2){ ?>
								<div class="body-transaksi" style="margin-top: 20px;">
									<div class="payment-body" style="align-items: ">
										<div class="label">
											<img src="<?php echo base_url('upload/admin/produk/'.$row['id_gambar']) ?>" style="margin-top: 36px;">
										</div>
										<div class="cart-price" style="width: 65%;">
											<?php if($row['barang']==1) : ?>
											<div class="product-name"><?php echo $row['nama_produk'] ?></div>
											<?php else: ?>
												<?php $jumlah =  (int)$row['barang']-1; ?>
												<div class="product-name"><?php echo $row['nama_produk'].' Dan '.$jumlah.' Lainnya'; ?></div>
											<?php endif; ?>
											<div class="product-price" style="display: flex;">
												<span class="total-harga">Total:</span> 
												<?php $harga = number_format($row['jumlahe'],0,'','.'); ?>
												<?php echo 'Rp.'.$harga; ?>

												<div class="date-buy">Tanggal Pembelian</div>
												<?php $date= date('d M Y, H:i',strtotime($row['tanggal_transaksi']));
														// $tujuh_hari        = mktime(0,0,0,date("n"),date("j")+1,date("Y"));
														// $kembali        = date("d M Y, H:i ", $tujuh_hari);
												$kembali= date('d M Y, H:i',strtotime($row['tanggal_transaksi']));
												?>
												<div class="date-transaksi"><?php echo $date; ?><b> WIB</b></div>
											</div>						

										</div>
										<div class="payment-fail">Pembayaran Gagal</div>
									</div>
								</div>
							<?php } ?>
						<?php endforeach; ?>
						<?php }else{ ?>

								<div class="body-transaksi" style="margin-top: 20px;">
									<div class="payment-body" style="align-items: ">
										<div class="cart-price" style="width: 100%;">
											<div class="product-name" style="color: red; font-size: 24px; max-width: 600px;">
												Kamu belum melakukan transaksi apapun</div>
										</div>
									</div>

								</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		
	</div>