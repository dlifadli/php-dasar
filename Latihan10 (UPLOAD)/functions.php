<?php 
// koneksi ke database
// mysqli_connect("Nama Host Dari Database", "Username SQLnya", "Password SQLnya", "Nama Databasenya")
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result)) {$rows[] = $row;}
	return $rows;
}

function tambah($data) {
	global $conn;
	$nrp = htmlspecialchars($data['nrp']);
	$nama = htmlspecialchars($data['nama']);
	$email = htmlspecialchars($data['email']);
	$jurusan = htmlspecialchars($data['jurusan']);
	
	// upload gambar
	$gambar = upload();
	if ( !$gambar ) {
		return false;}

	$query = "INSERT INTO mahasiswa VALUES('', '$nama', '$nrp', '$email', '$jurusan', '$gambar')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}


function upload() {

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah tidak ada gambar yang diupload
	if ( $error === 4 ) {
		echo "<script>
					alert('Pilih Gambar Terlebih Dahulu Cuy!!');
				</script>";
		return false;}

	// cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
			echo "<script>
					alert('Lu Bukan Upload Gambar Cuy!!');
				</script>";
		return false;}

	// cek jika ukurannya terlalu besar
	if ( $ukuranFile > 1000000 ) {
		echo "<script>
					alert('Ukuran Gambar Lu Kegedean Cuy!!');
				</script>";
		return false;}

		// jika lolos pengecekan, gambar siap diupload
		// jika upload gambar dengan nama yang sama pasti gambar sebelumnya akan tertipa, solusinya dengan generate nama gambarnya
		$namaFileBaru = uniqid();
		$namaFileBaru .= '.';
		$namaFileBaru .= $ekstensiGambar;
		move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
		return $namaFileBaru;
	}


function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
	return mysqli_affected_rows($conn);
}


function edit($data) {
	global $conn;

	$id = $data["id"];
	$nrp = htmlspecialchars($data['nrp']);
	$nama = htmlspecialchars($data['nama']);
	$email = htmlspecialchars($data['email']);
	$jurusan = htmlspecialchars($data['jurusan']);
	$gambarLama = htmlspecialchars($data['gambarLama']);

	// cek apakah user pilih gambar atau tidak
	if ( $_FILES['gambar']['error'] === 4 ) {
		$gambar = $gambarLama;}
	else {$gambar = upload();}

	$query = "UPDATE mahasiswa SET
				nama = '$nama',
				nrp = '$nrp',
				email = '$email',
				jurusan = '$jurusan',
				gambar = '$gambar'
				WHERE id = $id
				";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}


function cari($keyword) {
	$query = "SELECT * FROM mahasiswa
				WHERE 
				nama LIKE '%$keyword%' OR
				nrp LIKE '%$keyword%' OR
				email LIKE '%$keyword%' OR
				jurusan LIKE '%$keyword%'
				";
	return query($query);
}







 ?>