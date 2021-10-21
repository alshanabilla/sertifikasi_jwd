<?php
	$id_anggota=$_GET['id'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbanggota WHERE idanggota='$id_anggota'");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
?>

<div class="container">
	<h2>Edit Data Anggota</h2>
	<form action="proses/anggota-edit-proses.php" method="post">
		<div class="form-group">
			<label for="inputid">ID Anggota</label>
			<input type="text" name="id_anggota" class="form-control" id="inputid" value="<?php echo $r_tampil_anggota['idanggota']; ?>" readonly="readonly"> 
		</div>
		<div class="form-group">
			<label for="inputnama">Nama</label>
			<input type="text" name="nama" class="form-control" id="inputnama" value="<?php echo $r_tampil_anggota['nama']; ?>">
		</div>
		<div class="form-group">
			<label for="inputjk">Jenis Kelamin</label>
			<select class="form-control" id="inputjk" name="jenis_kelamin" value="<?php echo $r_tampil_anggota['jeniskelamin']; ?>">
				<option disabled selected>Pilih Jenis Kelamin</option>
					<option value="pr">Perempuan</option>
					<option value="lk">Laki-Laki</option>
			</select>
		</div>
		<div class="form-group">
			<label for="inputalamat">Alamat</label>
			<textarea rows="2" cols="40" name="alamat" class="form-control" id="inputalamat"><?php echo $r_tampil_anggota['alamat']; ?></textarea></textarea>
		</div>
		<button type="submit" class="btn btn-primary" name="simpan" value="Simpan">Submit</button>
	</form>
</div>
