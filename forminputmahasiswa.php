<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa</title>
</head>

<body bgcolor="green">
    <form action="tampilmahasiswa.php" method="post">
        <b>Pengelolaan Data Mahasiswa</b>
        <br>
        <pre>
        Nama : <input type ="text" name ="nama" size = "25" maxlength="50">
        Alamat : <input type = "text" name ="alamat" size = "25" maxlength="50">
        </pre>
        Jenis Kelamin :
        <input type="radio" name="jeniskel" value="Laki-Laki"> Laki - Laki
        <input type="radio" name="jeniskel" value="Perempuan"> Perempuan
        <p>
            Pekerjaan :
            <select name="pekerjaan">
                <option value="- Pilih -">- Pilih -</option>
                <option value="Pelajar">Pelajar</option>
                <option value="Karyawan">Karyawan</option>
                <option value="Wirausaha">Wirausaha</option>
                <option value="Lain-lain">Lain-Lain</option>
            </select>
        <p>
            Hobi :
            <input type="checkbox" name="hobi1" value="Olahraga">Olahraga
            <input type="checkbox" name="hobi2" value="Musik">Musik
            <input type="checkbox" name="hobi3" value="Jalan-jalan">Jalan-jalan
        <p>
            <input type="Submit" value="Kirim"><input type="reset" value="Batal">
    </form>
</body>

</html>