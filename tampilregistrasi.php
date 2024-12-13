<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Registrasi</title>
</head>

<body>
    <?php
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tempatlahir = $_POST['tempatlahir'];
    $tanggallahir = $_POST['tanggallahir'];
    $jeniskel = $_POST['jeniskel'];
    $pendidikan = $_POST['pendidikan'];
    $alasan1 = $_POST['alasan1'];
    $alasan2 = $_POST['alasan2'];
    $alasan3 = $_POST['alasan3'];
    ?>
    <table border=2 bgcolor="#fbeafd" cellpading="3" cellspacing="7">
        <b>Data Registrasi</b><br>
        <tr>
            <td colspan=2 align="center"><b>Data Peserta<b></td>
        </tr>
        <tr>
            <td>Nama :</td>
            <td><?php echo $nama ?></td>
        </tr>
        <tr>
            <td>Alamat :</td>
            <td><?php echo $alamat ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir :</td>
            <td><?php echo $tempatlahir ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir :</td>
            <td><?php echo $tanggallahir ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin :</td>
            <td><?php echo $jeniskel ?></td>
        </tr>
        <tr>
            <td>Pendidikan Terakhir :</td>
            <td><?php echo $pendidikan ?></td>
        </tr>
        <tr>
            <td>Mengetahui Info Registrasi dari :</td>
            <td><?php echo $alasan1, ",", $alasan2, ",", $alasan3; ?></td>
        </tr>
    </table>
    <a href="formregistrasi.php">BACK TO MENU</a>
</body>

</html>