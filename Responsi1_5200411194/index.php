<?php 
	require 'functions.php';
	$mahasiswa = query("SELECT * FROM data_jadwal");
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Dashboard</title>
 </head>
 <body>

 	<h1>Data Jadwal Mahasiswa</h1>
 		<a href="tambah.php">+ Tambah Jadwal</a><br>
 		<a href="data_mahasiswa.php">Data Mahasiswa</a><br>
 		<a href="data_dosen.php">Data Dosen</a><br>
 		<a href="data_matakuliah.php">Data Mata Kuliah</a>
 		<hr>
			<table border="1">
				<tr>
					<th>No</th>
					<th>Kode Mata Kuliah</th>
					<th>Nama Mata Kuliah</th>
					<th>Kode Dosen</th>
					<th>Nama Dosen</th>
					<th>Kelas</th>
					<th>SKS</th>
					<th>Ruangan</th>
					<th>Waktu</th>
					<th colspan="2">Aksi</th>
				</tr>
				<?php $i = 1; ?>
				<?php foreach($mahasiswa as $row) : ?>
				<tr>
					<td><?= $i; ?></td>
					<td><?= $row["kode_matkul"] ?></td>
					<td><?= $row["nama_matkul"] ?></td>
					<td><?= $row["kode_dosen"] ?></td>
					<td><?= $row["nama_dosen"] ?></td>
					<td><?= $row["kelas"] ?></td>
					<td><?= $row["sks"] ?></td>
					<td><?= $row["ruangan"] ?></td>
					<td><?= $row["waktu"] ?></td>
					<td><a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a></td>
					<td> <a href="edit.php">Edit</a></td>
				</tr>
				<?php $i++; ?>
				<?php endforeach; ?>
			</table>
 
 </body>
 </html>