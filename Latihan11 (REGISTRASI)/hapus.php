<?php 
require 'functions.php';

$id = $_GET["id"];

if ( hapus($id) > 0 ) {
	echo "<script> alert('Data Berhasil Dihapus Nih, Yeay!! '); document.location.href = 'index.php' </script>";}
	else {echo "<script> alert('Data Gagal Dihapus Nih'); document.location.href = 'index.php' </script>";}
 ?>