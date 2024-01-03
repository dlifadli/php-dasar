<?php
session_start();

// cek apakah user sudah masukan username & password lewat login.php atau belum, jika belum akan langsung mengirim user ke login.php 
if (!isset($_SESSION['login'])) {
	header("Location: login.php");
	exit;
}

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari ditekan
if (isset($_POST['cari'])) {
	$mahasiswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Admin</title>
</head>

<body>
	<a href="logout.php" onclick="return confirm('Seriusan Mau Logout?')">Logout</a>
	<h1>Daftar Mahasiswa</h1>
	<a href="tambah.php">Tambah data mahasiswa</a>
	<br><br>


	<form action="" method="post">
		<input type="text" name="keyword" size="40" autofocus placeholder="masukan keyword pencarian..." autocomplete="off" id="keyword">
		<button type="submit" name="cari" id="tombol-cari">Cari!</button>
	</form>

	<br>
	<div id="container">
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
			<?php foreach ($mahasiswa as $mhs) : ?>

				<tr>
					<td><?= $i ?></td>
					<td> <a href="edit.php?id=<?= $mhs["id"] ?>">Edit</a> |
						<a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="return confirm('Seriusan Mau Lu Hapus?')">Hapus</a>
					</td>
					<td> <img src="img/<?= $mhs["gambar"]; ?>" width="50"> </td>
					<td><?= $mhs["nrp"]; ?> </td>
					<td><?= $mhs["nama"]; ?> </td>
					<td><?= $mhs["email"]; ?> </td>
					<td><?= $mhs["jurusan"]; ?> </td>
				</tr>

				<?php $i++; ?>
			<?php endforeach; ?>

		</table>
	</div>

	<script src="js/script.js"></script>
</body>

</html>