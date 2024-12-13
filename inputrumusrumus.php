<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumus - Rumus</title>

</head>

<body>
    <form action="outputrumusrumus.php" method="POST">
        <h1>Perhitungan Volume Sederhana</h1>
        <h3>Silahkan Masukkan Angka dibawah Ini :</h3>

        <table border=2 bgcolor="#fbeafd" cellpading="3" cellspacing="7">
            <tr>
                <td colspan=2 align="center"><b>Perhitungan Volume</b></td>
            </tr>
            <tr>
                <td align="center">Nilai 1</td>
                <td><input type="number" name="nilai1">
            </tr>
            <tr>
                <td align="center">Nilai 2</td>
                <td><input type="number" name="nilai2">
            </tr>
            <tr>
                <td align="center">Nilai 3</td>
                <td><input type="number" name="nilai3">
            </tr>
            <tr>
                <td><input type="radio" name="rumus" value="Kubus">Volume Kubus</td>
                <td><input type="radio" name="rumus" value="Prisma">Volume Prisma</td>
            </tr>
            <tr>
                <td><input type="radio" name="rumus" value="Tabung">Volume Tabung</td>
            </tr>

            <td align="center"><input type="submit" value="Hitung"><input type="reset" value="Batal"></td>



    </form>
</body>

</html>