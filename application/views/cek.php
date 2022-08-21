  <form  action="<?php echo base_url('email/cek_bos') ?>" method="post">

  <?php $query = $this->db->query("SELECT * FROM trx WHERE kode_transaksi='JLB-20191003-XIX-1003-1001' ")->result_array();
  foreach ($query as $row) :
  ?>
  <input type="text" name="stok[]" value="<?php echo $row['jumlah']; ?>">
  <input type="text" name="id_produk[]" value="<?php echo $row['id_produk'] ?>">
  <?php endforeach; ?>
  <button type="submit" class="btn btn-primary">Update</button>

  </form>
