<?php 
// koneksi ke database
// mysqli_connect("Nama Host Dari Database", "Username SQLnya", "Password SQLnya", "Nama Databasenya")
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari table mahasiswa / query data dari table mahasiswa
// mysqli_query(Isi dari mysql_connect("","","",""), Menggunakan String Lalu Syntax SQL Dan Querynya Mau Apa)
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row(); adalah mengembalikan menjadi array numerik
// mysqli_fetch_assoc(); adalah mengembalikan menjadi array assosiative
// mysqli_fetch_array(); adalah mengembalikan menjadi array numerik dan array assosiative
// mysqli_fetch_object(); adalah tidak mempunyai key

// while ($mhs = mysqli_fetch_assoc($result)) {
// var_dump($mhs["nama"]);}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Admin</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<table border="1" cellpadding="5" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>NRP</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Jurusan</th>
	</tr>
	<?php $i = 1; ?>
	<?php while( $row = mysqli_fetch_assoc($result) ) : ?>

	<tr>
		<td><?= $i ?></td>
		<td>
			<a href="">Ubah</a> |
			<a href="">Hapus</a>
		</td>
		<td>
			<img src="img/<?= $row["gambar"]; ?>" width="50">
		</td>
		<td><?= $row["nrp"]; ?></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["email"]; ?></td>
		<td><?= $row["jurusan"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php endwhile; ?>
</table>
</body>
</html>