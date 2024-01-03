<?php 
// koneksi ke database
// mysqli_connect("Nama Host Dari Database", "Username SQLnya", "Password SQLnya", "Nama Databasenya")
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}
 ?>