<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh 06</title>
</head>

<body>
    <?php
    $jumlah = 5;
    $harga = 20000;
    $total = $harga * $jumlah;
    ?>

    <pre>
        Jumlah = <?= $jumlah ?> <br>
        Harga = <?= $harga ?> <br>
        Total = <?= $total ?> 
     </pre>
</body>

</html>