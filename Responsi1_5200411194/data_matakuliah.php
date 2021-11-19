<?php 
	require 'functions.php';
	$mahasiswa = query("SELECT * FROM data_matakuliah");
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Dashboard</title>
 </head>
 <body>

 	<h1>Data Mata Kuliah</h1>
 		<a href="index.php">< Kembali ke data studi</a><br>
 		<a href="tambah.php">+ Tambah Mata Kuliah</a><hr>
			<table border="1">
				<tr>
					<th>No</th>
					<th>Nama Mata Kuliah</th>
					<th>Kode Mata Kuliah</th>
					<th>Kode Dosen</th>
					<th>SKS</th>
					<th colspan="2">Aksi</th>
				</tr>
				<?php $i = 1; ?>
				<?php foreach($mahasiswa as $row) : ?>
				<tr>
					<td><?= $i; ?></td>
					<td><?= $row["nama_matkul"] ?></td>
					<td><?= $row["kode_matkul"] ?></td>
					<td><?= $row["kode_dosen"] ?></td>
					<td><?= $row["SKS"] ?></td>
					<td> <a href="hapus.php">Hapus</a> </td>
					<td> <a href="edit.php">Edit</a> </td>
				</tr>
				<?php $i++; ?>
				<?php endforeach; ?>
			</table>
 
 </body>
 </html>