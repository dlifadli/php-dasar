<!-- Contoh pengulangan for dan pengkondisian if else dengan HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ini latihan 1</title>
	<style>
	.warna-baris {background-color: silver;}
	</style>
</head>
<body>
<table border="5" cellpadding="30" cellspacing="0">
	<?php for( $i = 1; $i <= 5; $i++ ) : ?>
	<?php if( $i % 2 == 1 ) : ?>
	<tr class="warna-baris">
	<?php else : ?>
	<tr>
	<?php endif; ?>
	<?php for( $j = 1; $j <= 5; $j++ ) { ?>
	<td><?php echo"$i, $j";?></td>
	<?php } ?>
	</tr>
	<?php endfor; ?>
</table>
</body>
</html>

<!-- hasilnya: studycase1.png -->