<!-- Menampilkan array dengan cara looping menggunakan for dan foreach -->
<?php $numbers = [80,4,35,22,69,95,66];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studycase1</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear {clear: both;}
        </style>
</head>
<body>
<?php for( $i = 0; $i < count($numbers); $i++ ) { ?>
    <div class="kotak"> <?php echo $numbers[$i]; ?> </div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $numbers as $number ) { ?>
    <div class="kotak"> <?php echo $number; ?> </div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $numbers as $number ) : ?>
    <div class="kotak"> <?= $number; ?> </div>
<?php endforeach; ?>
</body>
</html>