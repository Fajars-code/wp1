<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Metode Get</title>
</head>

<body bgcolor="Dark Green" text="Black">
    <b> Pengelolaan Data Mahasiswa

        <form action="metodepostproses.php" method="post">
            Nama : <input type="text" name="nama" size="25"> <br>
            Alamat : <input type="text" name="alamat" size="25"> <br>
            Jenis Kelamin : <input type="radio" id="Laki-Laki" name='jeniskelamin'>
            <label for="Laki-Laki"> Laki-Laki </label> <br>
            <input type="radio" id="Perempuan" name='jeniskelamin'>
            <label for="Perempuan"> Perempuan </label> <br>
            Pekerjaan : <label for="Pekerjaan"> Pilih Pekerjaan : </label>
            <select name='Pekerjaan' id='Pekerjaan'> <br>
                <option value="Pengajar"> Pengajar </option> <br>
                <option value="Presenter"> Presenter </option> <br>
                <option value="Jurnalis"> Jurnalis </option> <br>
            </select> <br>
            Hobi : <br>
            <input type="checkbox" id='Hobi' name='Hobi' value="Memasak">
            <label for="Hobi"> Memasak </label> <br>
            <input type="checkbox" id='Hobi' name='Hobi' value="Memancing">
            <label for="Hobi"> Memancing </label> <br>
            <input type="checkbox" id='Hobi' name='Hobi' value="Berenang">
            <label for="Hobi"> Berenang </label> <br>

            <input type="Submit" value="Proses">
        </form>
</body>

</html>