<?php
$sql = "SELECT idbuku FROM tbbuku ORDER BY idbuku DESC LIMIT 1";
$q_id_buku = mysqli_query($db, $sql);
$result = mysqli_fetch_array($q_id_buku);
?>

<div class="container">
	<h2>Input Data Buku</h2>
	<form action="proses/buku-input-proses.php" method="post">
		<div class="form-group">
			<label for="inputid">ID Buku</label>
			<input type="text" name="id_buku" class="form-control" id="inputid" value="<?= ++$result['idbuku'] ?>" readonly>
		</div>
		<div class="form-group">
			<label for="inputjudul">Judul Buku</label>
			<input type="text" name="judul_buku" class="form-control" id="inputjudul">
		</div>
		<div class="form-group">
			<label for="inputkategori">Kategori</label>
			<select class="form-control" id="inputkategori" name="kategori">
					<option disabled selected>Pilih Jenis Buku</option>
					<option value="Ilmu Komputer">Ilmu Komputer</option>
					<option value="Ilmu Agama">Ilmu Agama</option>
					<option value="Karya Sastra">Karya Sastra</option>
			</select>
		</div>
		<div class="form-group">
			<label for="inputpengarang">Pengarang</label>
			<input type="text" name="pengarang"  class="form-control" id="inputpengarang">
		</div>
		<div class="form-group">
			<label for="inputpenerbit">Penerbit</label>
			<input type="text" name="penerbit"  class="form-control" id="inputpenerbit">
		</div>
	
		<button type="submit" class="btn btn-primary" name="simpan" value="Simpan">Submit</button>
	</form>

</div>
