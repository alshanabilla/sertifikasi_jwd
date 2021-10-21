<?php
$sql = "SELECT idtransaksi FROM tbtransaksi ORDER BY idtransaksi DESC LIMIT 1";
$q_id_transaksi = mysqli_query($db, $sql);
$result = mysqli_fetch_array($q_id_transaksi);
?>

<div class="container">
	<h2>Input Transaksi Peminjaman</h2>
	<form action="proses/transaksi-peminjaman-input-proses.php" method="post">
		<div class="form-group">
			<label for="inputid">ID Transaksi</label>
			<input type="text" name="id_transaksi" class="form-control" id="inputid" value="<?= ++$result['idtransaksi'] ?>" readonly >
		</div>
		<div class="form-group">
			<label for="inputanggota">Anggota</label>
			<select name="id_anggota" class="form-control" id="inputanggota">
					<option value="" select="selected"> Pilih Data Anggota </option>
					<?php
						$q_tampil_anggota=mysqli_query($db,
							"SELECT * FROM tbanggota
							WHERE status='Tidak Meminjam'
							ORDER BY idanggota"
						);
						while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
							echo"<option value=$r_tampil_anggota[idanggota]>$r_tampil_anggota[idanggota] | $r_tampil_anggota[nama]</option>";
						}
					?>
				</select>
		</div>
		<div class="form-group">
			<label for="inputbuku">Buku</label>
			<select name="id_buku" class="form-control" id="inputbuku">
					<option value="" select="selected"> Pilih Data Buku </option>
					<?php
						$q_tampil_buku=mysqli_query($db,
							"SELECT * FROM tbbuku
							WHERE status='Tersedia'
							ORDER BY idbuku"
						);
						while($r_tampil_buku=mysqli_fetch_array($q_tampil_buku)){
							echo"<option value=$r_tampil_buku[idbuku]>$r_tampil_buku[idbuku] | $r_tampil_buku[judulbuku]</option>";
						}
					?>
				</select>
		</div>
		<div class="form-group">
			<label for="inputpengarang">Tanggal Pinjam</label>
			<input type="text" name="tgl_pinjam" value="<?php echo $tgl; ?>" readonly="readonly"  class="form-control" id="inputpengarang">
		</div>
	
		<button type="submit" class="btn btn-primary" name="simpan" value="Simpan">Submit</button>
	</form>

</div>

</div>