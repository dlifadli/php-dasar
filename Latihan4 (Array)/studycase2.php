<!-- Array Multidimensi Numeric tipe 1-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php
    $mahasiswa = [
        ["Fadli Zuhri", "098812712431", "Teknik Informatika", "fadlizuhri@gmail.com"],
        ["Zaenab Nur Azizah", "81726537124", "Bisnis", "zaenab555@gmail.com"]
    ];
    ?>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NRP : <?= $mhs[1]; ?></li>
            <li>Jurusan : <?= $mhs[2]; ?></li>
            <li>Email : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>