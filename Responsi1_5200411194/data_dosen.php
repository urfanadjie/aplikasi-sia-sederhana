<?php 
	require 'functions.php';
	$mahasiswa = query("SELECT * FROM data_dosen");
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Dashboard</title>
 </head>
 <body>

 	<h1>Data Dosen</h1>
 		<a href="index.php">< Kembali ke data studi</a><br>
 		<a href="tambah_dosen.php">+ Tambah Dosen</a><hr>
			<table border="1">
				<tr>
					<th>No</th>
					<th>Kode Dosen</th>
					<th>Nama Dosen</th>
					<th colspan="2">Aksi</th>
				</tr>
				<?php $i = 1; ?>
				<?php foreach($mahasiswa as $row) : ?>
				<tr>
					<td><?= $i; ?></td>
					<td><?= $row["kode_dosen"] ?></td>
					<td><?= $row["nama_dosen"] ?></td>
					<td><a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a></td>
					<td> <a href="edit.php">Edit</a> </td>
				</tr>
				<?php $i++; ?>
				<?php endforeach; ?>
			</table>
 
 </body>
 </html>