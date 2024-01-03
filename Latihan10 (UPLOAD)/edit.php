<?php 
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhsedit = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

	// cek apakah tombol submit sudah ditekan atau belum
	if (isset($_POST["submit"])) {

	// cek apakah data berhasil diedit atau tidak
	if ( edit($_POST) > 0 ) {
		echo "<script> alert('Data Berhasil Diedit Nih, Yeay!! '); document.location.href = 'index.php' </script>";}
	else {echo "<script> alert('Data Gagal Diedit Nih); document.location.href = 'index.php' </script>";}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit data mahasiswa</title>
</head>
<body>
<h1>Edit data mahasiswa</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $mhsedit["id"]; ?>">
		<input type="hidden" name="gambarLama" value="<?= $mhsedit["gambar"]; ?>">
	<ul>
		<li> 
			<label for="nrp">NRP :</label> 
			<input type="text" name="nrp" id="nrp" required value="<?= $mhsedit["nrp"]; ?>"></li>
		<li> 
			<label for="nama">Nama :</label> 
			<input type="text" name="nama" id="nama" required value="<?= $mhsedit["nama"]; ?>"></li>
		<li> 
			<label for="email">Email :</label> 
			<input type="text" name="email" id="email" required value="<?= $mhsedit["email"]; ?>"></li>
		<li> 
			<label for="jurusan">Jurusan :</label> 
			<input type="text" name="jurusan" id="jurusan" required value="<?= $mhsedit["jurusan"]; ?>"></li>
		<li> 
			<label for="gambar">Gambar :</label> <br>
			<img src="img/<?= $mhsedit["gambar"] ?>" width="50"> <br>
			<input type="file" name="gambar" id="gambar"></li>
		<li> <button type="submit" name="submit">Edit Data!</button></li>
	</ul>
	</form>

	<a href="index.php">Kembali</a>
</body>
</html>