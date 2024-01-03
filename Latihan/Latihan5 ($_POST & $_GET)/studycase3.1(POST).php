<!-- Cara kerja $_POST adalah dengan mengirimkan data menggunakan form method post dan TIDAK lewat url. -->
<!-- Mengirimkan data lewat post lalu action ke studycase3.2.php -->
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>POST</title>
</head>

<body>
	<?php if (isset($_POST['submit'])) : ?>
		<h1>Halo, Selamat datang <?= $_POST['nama'] ?></h1>
	<?php endif; ?>

	<form action="studycase3.2(POST).php" method="post">
		Masukan Nama :
		<input type="text" name="nama">
		<br>
		<button type="submit" name="submit">Kirim Cuy</button>
	</form>

</body>

</html>