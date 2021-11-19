<?php
	require 'functions.php';

	//cek tombol submit
	if (isset($_POST["submit"])) {

		//cek apakah sudah ditambahkan atau belum
		if (tambah($_POST) > 0) {
			echo "
				<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index.php';
				</script>
			";
		} else {
			echo "
				<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php';
				</script>
			";
		}
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah Mahasiswa</title>
</head>
<body>

	<h1>Tambah Mahasiswa</h1>

	<form action="" method="post">
		
		<ul>
			<li>
				<label for="kode_dosen_2">NIM : </label>
				<input type="text" name="kode_dosen_2" id="kode_matkul_2" required>
			</li>
			<li>
				<label for="nama_dosen_2">Nama : </label>
				<input type="text" name="nama_dosen_2" id="nama_dosen_2" required>
			</li>
			<li>
				<label for="kode_dosen_2">Jurusan : </label>
				<input type="text" name="kode_dosen_2" id="kode_matkul_2" required>
			</li>
			<li>
				<label for="nama_dosen_2">Fakultas : </label>
				<input type="text" name="nama_dosen_2" id="nama_dosen_2" required>
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
		</ul>

	</form>

</body>
</html>