<!-- studycase2.2 $_GET -->
<?php
// cek apakah tidak ada data di $_GET
if (
	!isset($_GET['nama']) ||
	!isset($_GET['tipe']) ||
	!isset($_GET['asal']) ||
	!isset($_GET['perawatan']) ||
	!isset($_GET['nomor']) ||
	!isset($_GET['gambar'])
) {

	// redirect	
	header("Location: studycase2.1(GET).php");
	exit;
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PENGGUNAAN GET DARI DATA GET</title>
</head>

<body>
	<ul>
		<li><img src="img/<?= $_GET["gambar"] ?>"></li>
		<li>Jenis : <?= $_GET['nama'] ?></li>
		<li>Tipe : <?= $_GET['tipe'] ?></li>
		<li>Berasal Dari : <?= $_GET['asal'] ?></li>
		<li>Tingkat Perawatan : <?= $_GET['perawatan'] ?></li>
		<li>Nomor Petshop Yang Bisa Dihubungi : <?= $_GET['nomor'] ?></li>
	</ul>

	<a href="studycase2.1(GET).php">Kembali</a>

</body>

</html>