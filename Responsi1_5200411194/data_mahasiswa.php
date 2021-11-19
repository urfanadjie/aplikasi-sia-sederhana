<?php 
	require 'functions.php';
	$mahasiswa = query("SELECT * FROM data_mahasiswa");
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Dashboard</title>
 </head>
 <body>

 	<h1>Data Mahasiswa</h1>
 		<a href="index.php">< Kembali ke data studi</a><br>
 		<a href="tambah_mahasiswa.php">+ Tambah Mahasiswa</a><hr>
			<table border="1">
				<tr>
					<th>No</th>
					<th>NIM</th>
					<th>Nama</th>
					<th>Jurusan</th>
					<th>Fakultas</th>
					<th colspan="2">Aksi</th>
				</tr>
				<?php $i = 1; ?>
				<?php foreach($mahasiswa as $row) : ?>
				<tr>
					<td><?= $i; ?></td>
					<td><?= $row["nim"] ?></td>
					<td><?= $row["nama"] ?></td>
					<td><?= $row["jurusan"] ?></td>
					<td><?= $row["fakultas"] ?></td>
					<td><a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a></td>
					<td> <a href="edit.php">Edit</a> </td>
				</tr>
				<?php $i++; ?>
				<?php endforeach; ?>
			</table>
 
 </body>
 </html>