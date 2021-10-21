<?php
$sql = "SELECT idanggota FROM tbanggota ORDER BY idanggota DESC LIMIT 1";
$q_id_anggota = mysqli_query($db, $sql);
$result = mysqli_fetch_array($q_id_anggota);
?>

<div class="container">
	<h2>Input Data Anggota</h2>
	<form action="proses/anggota-input-proses.php" method="post" id="form">
		<div class="form-group">
			<label for="inputid">ID Anggota</label>
			<input type="text" name="id_anggota" class="form-control" id="inputid" value="<?= ++$result['idanggota'] ?>" readonly>
		</div>
		<div class="form-group">
			<label for="inputnama">Nama</label>
			<input type="text" name="nama" class="form-control" id="inputnama">
		</div>
		<div class="form-group">
			<label for="inputjk">Jenis Kelamin</label>
			<select class="form-control" id="inputjk" name="jenis_kelamin">
				<option disabled selected>Pilih Jenis Kelamin</option>
					<option value="pr">Perempuan</option>
					<option value="lk">Laki-Laki</option>
			</select>
		</div>
		<div class="form-group">
			<label for="inputalamat">Alamat</label>
			<textarea rows="2" cols="40" name="alamat" class="form-control" id="inputalamat"></textarea>
		</div>
		<button type="submit" class="btn btn-primary" name="simpan" value="Simpan">Submit</button>
	</form>

</div>

