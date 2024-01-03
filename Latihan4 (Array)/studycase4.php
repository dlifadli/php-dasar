<!-- Array Numeric yang didalamnya ada Array Assosiative -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petshop Jaya</title>
</head>

<body>
    <h1>Daftar Data Pembeli Petshop Jaya November 2023</h1>
    <?php
    $datapembeli = [
        [
            "nama" => "Marfuah",
            "nomortelpon" => "081829927001",
            "alamat" => "Depok",
            "raskucing" => "Abyssinian",
            "produkservice" => "Makanan Kucing 10pcs",
            "tanggalpembelian" => "09/11/23",
            "nomorinvoice" => "696988801",
            "nominal" => "250.000",
            "tenggatwaktu" => "11/11/23",
            "bunga" => "1,0%",
            "gambar" => "abyssinian1.jpg"
        ],
        [
            "nama" => "Jaenab",
            "nomortelpon" => "081127635182",
            "alamat" => "Depok",
            "raskucing" => "American Short Hair",
            "produkservice" => "Pasir Kucing 10kg",
            "tanggalpembelian" => "11/11/23",
            "nomorinvoice" => "696988802",
            "nominal" => "250.000",
            "tenggatwaktu" => "13/11/23",
            "bunga" => "1,0%",
            "gambar" => "americanshorthair1.jpg"
        ]
    ]
    ?>
    <?php foreach ($datapembeli as $pembeli) : ?>
        <ul>
            <li><img src="img/<?= $pembeli["gambar"]; ?>"></li>
            <li>Nama : <?= $pembeli["nama"]; ?></li>
            <li>Nomor Telpon : <?= $pembeli["nomortelpon"]; ?></li>
            <li>Alamat : <?= $pembeli["alamat"]; ?></li>
            <li>Ras Kucing : <?= $pembeli["raskucing"]; ?></li>
            <li>Produk / Service : <?= $pembeli["produkservice"]; ?></li>
            <li>Tanggal Pembelian / Service : <?= $pembeli["tanggalpembelian"]; ?></li>
            <li>Nomor Invoice : <?= $pembeli["nomorinvoice"]; ?></li>
            <li>Nominal : <?= $pembeli["nominal"]; ?></li>
            <li>Tenggat Waktu : <?= $pembeli["tenggatwaktu"]; ?></li>
            <li>Bunga : <?= $pembeli["bunga"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>