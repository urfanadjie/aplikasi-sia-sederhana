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
	<title>Tambah Data Mahasiswa</title>
</head>
<body>

	<h1>Tambah Data Mahasiswa</h1>

	<form action="" method="post">
		
		<ul>
			<li>
				<label for="kode_matkul">Kode Mata Kuliah : </label>
				<input type="text" name="kode_matkul" id="kode_matkul" required>
			</li>
			<li>
				<label for="nama_matkul">Nama Mata Kuliah : </label>
				<input type="text" name="nama_matkul" id="nama_matkul" required>
			</li>
			<li>
				<label for="kode_dosen">Kode Dosen : </label>
				<input type="text" name="kode_dosen" id="kode_dosen" required>
			</li>
			<li>
				<label for="nama_dosen">Nama Dosen : </label>
				<input type="text" name="nama_dosen" id="nama_dosen">
			</li>
			<li>
				<label for="kelas">Kelas : </label>
				<input type="text" name="kelas" id="kelas">
			</li>
			<li>
				<label for="SKS">SKS : </label>
				<input type="text" name="SKS" id="SKS">
			</li>
			<li>
				<label for="ruangan">Ruangan : </label>
				<input type="text" name="ruangan" id="ruangan">
			</li>
			<li>
				<label for="waktu">Waktu : </label>
				<input type="text" name="waktu" id="waktu">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
		</ul>

	</form>

</body>
</html>