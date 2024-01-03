<!-- variabel superglobals merupakan varibel-variabel yang sudah dimiliki oleh php bisa kita pakai dimanapun dan kapanpun.
ada beberapa superglobals, yaitu:
$_GET
$_POST
$_FILES
$_SESSION
$_REQUEST
$_SESSION
$_COOKIE
$_SERVER
$_ENV
dan semua variabel-variabel merupakan array assosiative. -->


<!-- $_GET -->
<?php
// $_GET['nama'] = "Fadli Zuhri";
// $_GET['nomor'] = "123456";
// var_dump($_GET);
?>

<!-- Cara kerja $_GET adalah dengan mengirimkan data ke url -->
<?php
// var_dump($_GET);
// ini halaman url webnya: http://localhost/phpdasar/latihan7/studycase2.1.php
// jika ingin memasukan sesuatu value atau data kedalam $_GET langsung saja tulis di urlnya: http://localhost/phpdasar/latihan7/studycase2.1.php?nama=Fadli Zuhri&nomor=123456
?>

<!-- studycase2.1 $_GET -->
<?php
$raskucing = [
	[
		"nama" => "Anggora",
		"tipe" => "Berbulu Tebal",
		"asal" => "Turki",
		"perawatan" => "Sulit",
		"nomor" => "0896660123",
		"gambar" => "anggora.jpg"
	],

	[
		"nama" => "Persia",
		"tipe" => "Berhidung Pesek",
		"asal" => "Iran",
		"perawatan" => "Mudah",
		"nomor" => "08129990321",
		"gambar" => "persia.jpg"
	]
];
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MENGIRIM DATA GET DENGAN URL</title>
</head>

<body>
	<h1>Daftar Tipe Kucing</h1>
	<ul>
		<?php foreach ($raskucing as $rk) : ?>
			<li>
				<a href="studycase2.2(GET).php?nama=<?= $rk["nama"]; ?>&tipe=<?= $rk['tipe']; ?>&asal=<?= $rk['asal']; ?>&perawatan=<?= $rk['perawatan']; ?>&nomor=<?= $rk['nomor']; ?>&gambar=<?= $rk["gambar"]; ?>">
					<?= $rk["nama"]; ?></a>
			</li>
		<?php endforeach; ?>
	</ul>
</body>

</html>