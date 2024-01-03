<?php 
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['tombol'])) {
	// cek username & password
	if ($_POST['username'] == "admin" && $_POST['password'] == "123") {
	// jika benar, redirect ke halaman admin
		header("Location: admin.php");
		exit;}
	// jika salah, tampilkan pesan kesalahan
		else {$error = true;}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
<h1>Login Admin</h1>
<?php if ( isset($error)) : ?>
<p style="color: #FF0000; font-style: italic;">Username / Password Salah!</p>
<?php endif; ?>
<ul>
<form action="" method="post">
	<li>
		<label for="username">username :</label>
		<input type="text" name="username" id="username">
	</li>	
	<li>
		<label for="password">password :</label>
		<input type="password" name="password" id="password">
	</li>
	<li>
		<button type="submit" name="tombol">Login</button>
	</li>
</form>
</ul>
</body>
</html>