<?php 
session_start();

// cek apakah user sudah masukan username & password lewat login.php atau belum, jika belum akan langsung mengirim user ke login.php 
if ( !isset($_SESSION['login']) ) {
	header("Location: login.php");
	exit;}
	
require 'functions.php';

$id = $_GET["id"];

if ( hapus($id) > 0 ) {
	echo "<script> alert('Data Berhasil Dihapus Nih, Yeay!! '); document.location.href = 'index.php' </script>";}
	else {echo "<script> alert('Data Gagal Dihapus Nih'); document.location.href = 'index.php' </script>";}
 ?>