<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 03</title>
</head>

<body>
    <?php
    //Konstanta untuk nilai judul
    define("Judul", "Luas Permukaan Tabung");

    //KONSTANTA untuk nilai phi
    define("PHI", 3.14);

    #Rumus Volume Tabung
    $r = 8;
    $t = 10;
    $rumus =  PHI * $r * $r * $t
    ?>

    <pre>
        <?= Judul ?> <br>
        Jari - Jari Tabung = <?= $r ?> <br>
        Tinggi Tabung = <?= $t ?> <br>
        Volume Tabung = <?= $rumus ?> <br>

        Terima Kasih !
    </pre>
</body>

</html>