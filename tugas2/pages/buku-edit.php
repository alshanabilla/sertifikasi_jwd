<?php
	$id_buku=$_GET['id'];
	$q_tampil_buku=mysqli_query($db,"SELECT * FROM tbbuku WHERE idbuku='$id_buku'");
	$r_tampil_buku=mysqli_fetch_array($q_tampil_buku);

?>

<div class="container">
	<h2>Edit Data Buku</h2>
	<form action="proses/buku-edit-proses.php" method="post">
		<div class="form-group">
			<label for="inputid">ID Buku</label>
			<input type="text" name="id_buku" class="form-control" id="inputid" value="<?php echo $r_tampil_buku['idbuku']; ?>" readonly="readonly">
		</div>
		<div class="form-group">
			<label for="inputjudul">Judul Buku</label>
			<input type="text" name="judul_buku" class="form-control" id="inputjudul" value="<?php echo $r_tampil_buku['judulbuku']; ?>">
		</div>
		<div class="form-group">
			<label for="inputkategori">Kategori</label>
			<select class="form-control" id="inputkategori" name="kategori" value="<?php echo $r_tampil_buku['kategori']; ?>">
					<option disabled selected>Pilih Kategori</option>
					<option value="Ilmu Komputer">Ilmu Komputer</option>
					<option value="Ilmu Agama">Ilmu Agama</option>
					<option value="Karya Sastra">Karya Sastra</option>
			</select>
		</div>
		<div class="form-group">
			<label for="inputpengarang">Pengarang</label>
			<input type="text" name="pengarang"  class="form-control" id="inputpengarang" value="<?php echo $r_tampil_buku['pengarang']; ?>">
		</div>
		<div class="form-group">
			<label for="inputpenerbit">Penerbit</label>
			<input type="text" name="penerbit"  class="form-control" id="inputpenerbit" value="<?php echo $r_tampil_buku['penerbit']; ?>">
		</div>
	
		<button type="submit" class="btn btn-primary" name="simpan" value="Simpan" id="tombol-simpan">Submit</button>
	</form>

</div>
