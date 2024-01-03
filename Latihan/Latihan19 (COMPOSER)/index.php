<?php 
require_once 'vendor/fzaninotto/Faker/src/autoload.php';
$faker = Faker\Factory::create('id_ID');

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Penduduk</title>
</head>
<body>
    <h1>Data Penduduk</h1>
    <?php for ($i=0; $i < 10; $i++) : ?>
        <ul>
            <li><?= $faker->name; ?></li>
            <li><?= $faker->email; ?></li>
            <li><?= $faker->address; ?></li>
        </ul>
    <?php endfor; ?>

</body>
</html>