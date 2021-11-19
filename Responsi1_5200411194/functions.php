<?php 

	// Koneksi ke Database
	$koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");
	if (!$koneksi) {
		echo "Data Error!".mysqli_connect_error();
	}

	// Fungsi untuk menampilkan data
	function query($query) {
		global $koneksi;
		$result = mysqli_query($koneksi, $query);
		$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		return $rows;
	}

	// Fungsi untuk menambahkan data
	function tambah($data) {
		global $koneksi;

		//ambil data dari tiap elemen
		$kode_matkul = htmlspecialchars($data["kode_matkul"]);
		$nama_matkul = htmlspecialchars($data["nama_matkul"]);
		$kode_dosen = htmlspecialchars($data["kode_dosen"]);
		$nama_dosen = htmlspecialchars($data["nama_dosen"]);
		$kelas = htmlspecialchars($data["kelas"]);
		$sks = htmlspecialchars($data["sks"]);
		$ruangan = htmlspecialchars($data["ruangan"]);
		$waktu = htmlspecialchars($data["waktu"]);

		//kueri insert data
		$query = "INSERT INTO data_jadwal VALUES('', '$kode_matkul', '$nama_matkul', '$kode_dosen', '$nama_dosen', '$kelas', '$sks', '$ruangan', '$waktu')";
		mysqli_query($koneksi, $query);

		return mysqli_affected_rows($koneksi);
	}

	// Fungsi untuk menghapus data
	function hapus($id) {
		global $koneksi;
		mysqli_query($koneksi, "DELETE FROM data_jadwal WHERE id = $id");

		return mysqli_affected_rows($koneksi);
	}

 ?>