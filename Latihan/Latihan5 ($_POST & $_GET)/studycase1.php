<!-- Variabel Scope / Lingkup Variabel -->

<?php
// $x = 10;
// function tampilx() {
// 	$x = 20;
// 	echo $x;
// }

// tampilx();
// echo "<br>";
// echo $x;
?>
<!-- Jadi $x diluar function itu namanya variabel lokal untuk halaman ini dan $x didalam function itu namanya variabel lokal untuk functionnya. -->

<?php
// $x = 10;
// function tampilx() {
// 	global $x;
// 	echo $x;
// }

// tampilx();
?>
<!-- Definisi dari keyword global adalah apakah ada $x diluar function? jika ada tampilkan. Kesimpulan dan cara kerja keyword global akan mencari $variabel secara global atau semua lingkup. -->