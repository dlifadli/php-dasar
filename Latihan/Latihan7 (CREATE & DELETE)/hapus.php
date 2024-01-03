<?php 
require 'functions.php';

$id = $_GET["id"];

if ( hapus($id) > 0 ) {
	echo "<script> alert('Data Berhasil Dihapus Nih Cuy, Yeay!! '); document.location.href = 'index.php' </script>";}
	else {echo "<script> alert('Data Gagal Dihapus Nih Cuy'); document.location.href = 'index.php' </script>";}
 ?>