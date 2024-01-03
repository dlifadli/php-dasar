<?php 
require 'functions.php';

	// cek apakah tombol submit sudah ditekan atau belum
	if (isset($_POST["submit"])) {

	// cek apakah data berhasil di tambahkan atau tidak
	if ( tambah($_POST) > 0 ) {
		echo "<script> alert('Data Berhasil Ditambah Nih Cuy, Yeay!! '); document.location.href = 'index.php' </script>";}
	else {echo "<script> alert('Data Gagal Ditambahkan Nih Cuy); document.location.href = 'index.php' </script>";}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah data mahasiswa</title>
</head>
<body>
<h1>Tambah data mahasiswa</h1>

	<form action="" method="post">
	<ul>
		<li> 
			<label for="nrp">NRP :</label> 
			<input type="text" name="nrp" id="nrp" required></li>
		<li> 
			<label for="nama">Nama :</label> 
			<input type="text" name="nama" id="nama" required></li>
		<li> 
			<label for="email">Email :</label> 
			<input type="text" name="email" id="email" required></li>
		<li> 
			<label for="jurusan">Jurusan :</label> 
			<input type="text" name="jurusan" id="jurusan" required></li>
		<li> 
			<label for="gambar">Gambar :</label> 
			<input type="text" name="gambar" id="gambar"></li>
		<li> <button type="submit" name="submit">Tambah Data!</button></li>
	</ul>
	</form>

	<a href="index.php">Kembali</a>
</body>
</html>