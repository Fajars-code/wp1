<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Hitung Rumus</title>
</head>

<body>
    <?php
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $nilai3 = $_POST['nilai3'];
    $rumus = $_POST['rumus'];
    if (($nilai1 == 0 && $nilai2 == 0 && $nilai3 == 0)) {
        echo "Angka yang anda masukkan tidak valid.";
    } else {
        if ($rumus == "Kubus") {
            $hasil = $nilai1 * $nilai2 * $nilai3;
            $pilihrumus = "Volume Kubus";
        } elseif ($rumus == "Prisma") {
            $hasil = 0.5 * $nilai1 * $nilai2 * $nilai3;
            $pilihrumus = "Volume Prisma";
        } elseif ($rumus == "Tabung") {
            $hasil = 3.14 * $nilai1 * $nilai2 * $nilai3;
            $pilihrumus = "Volume Tabung";
        }
    }
    ?>
    <table border=1 bgcolor="efe8ff ">
        <tr>
            <td colspan=2 align="center"><b>Hasil Hitung Rumus</b></td>
        </tr>
        <tr>
            <td>Nilai 1 adalah : </td>
            <td><?php echo $nilai1; ?></td>
        </tr>
        <tr>
            <td>Nilai 2 adalah : </td>
            <td><?php echo $nilai2; ?></td>
        </tr>
        <tr>
            <td>Nilai 3 adalah : </td>
            <td><?php echo $nilai3; ?></td>
        </tr>
        <tr>
            <td>Rumus yang dipilih : </td>
            <td><?php echo $pilihrumus ?></td>
        </tr>
        <tr>
            <td>Hasil Perhitungan Volume : </td>
            <td><?php echo $hasil ?></td>
        </tr>
    </table>
    <a href="inputrumusrumus.php">BACK</a>
</body>

</html>