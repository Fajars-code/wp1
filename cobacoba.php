<!DOCTYPE html>
<html>

<head>
    <title>Rumus - Rumus</title>
</head>

<body>
    <h2>Rumus - Rumus</h2>
    <form method="POST">
        Nilai 1: <input type="number" name="nilai1" required><br><br>
        Nilai 2: <input type="number" name="nilai2" required><br><br>
        <input type="radio" name="rumus" value="segitiga" required> Segitiga
        <input type="radio" name="rumus" value="persegipanjang" required> Persegi Panjang<br><br>
        <button type="submit" name="hitung">Hitung</button>
        <button type="reset">Batal</button>
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        $rumus = $_POST['rumus'];

        if ($nilai1 == 0 && $nilai2 == 0) {
            echo "<p>Tidak ada hasil perhitungan karena Nilai 1 dan Nilai 2 adalah 0.</p>";
        } else {
            if ($rumus == "segitiga") {
                $hasil = 0.5 * $nilai1 * $nilai2;
                $jenisRumus = "Segitiga";
            } elseif ($rumus == "persegipanjang") {
                $hasil = $nilai1 * $nilai2;
                $jenisRumus = "Persegi Panjang";
            }

            echo "<h3>HASIL HITUNG RUMUS</h3>";
            echo "<p>Nilai a adalah = $nilai1</p>";
            echo "<p>Nilai b adalah = $nilai2</p>";
            echo "<p>Rumus Yang Dipilih adalah = $jenisRumus</p>";
            echo "<p>Hasil Perhitungan Rumus = $hasil</p>";
        }
    }
    ?>
</body>

</html>