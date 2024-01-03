<?php 
require '../functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM mahasiswa
			WHERE 
				nama LIKE '%$keyword%' OR
				nrp LIKE '%$keyword%' OR
				email LIKE '%$keyword%' OR
				jurusan LIKE '%$keyword%'
			";
$mahasiswa = query($query);

?>
<table border="1" cellpadding="5" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>NRP</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Jurusan</th>
	</tr>

	<?php $i = 1; ?> 
	<?php foreach ($mahasiswa as $mhs) : ?>

	<tr>
	<td><?= $i ?></td>
	<td> <a href="edit.php?id=<?= $mhs["id"] ?>">Edit</a> |
		<a href="hapus.php?id=<?= $mhs["id"];?>" onclick="return confirm('Seriusan Mau Lu Hapus?')">Hapus</a> </td>
	<td> <img src="img/<?= $mhs["gambar"]; ?>" width="50"> </td>
	<td><?= $mhs["nrp"]; ?> </td>
	<td><?= $mhs["nama"]; ?> </td>
	<td><?= $mhs["email"]; ?> </td>
	<td><?= $mhs["jurusan"]; ?> </td>
	</tr>

	<?php $i++; ?>
<?php endforeach; ?>

</table>