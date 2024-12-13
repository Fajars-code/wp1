<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <style>
        pre {
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
</head>

<body bgcolor="pink">
    <form action="tampilregistrasi.php" method="post">
        <h1>Form Registrasi</h1>

        <h3>Isi Data Dibawah Ini :</h3>

        <pre>
        Nama               : <input type="text" name="nama" size="15" maxlength="35">
        Alamat             : <textarea name="alamat" rows="5" cols="40"></textarea>
        Tempat Lahir   : <input type="text" name="tempatlahir" size="15" maxlength="35">
        Tanggal Lahir  : <input type="date" name="tanggallahir">
        

        Jenis Kelamin :
        <input type="radio" name="jeniskel" value="Laki-Laki">Laki - Laki
        <input type="radio" name="jeniskel" value="Perempuan">Perempuan
        
        Pendidikan :
        <select name="pendidikan">
            <option value="- Pilih -"></option>
            <option value="S1">S1</option>
            <option value="SMA/Sederajat">SMA/Sederajat</option>
            <option value="SMP/Sederajat">SMP/Sederajat</option>
            <option value="SD">SD</option>
        </select>

        
        Mengetahui Info Registrasi dari :
        <input type="checkbox" name="alasan1" value="Sosial Media">Sosial Media
        <input type="checkbox" name="alasan2" value="Iklan">Iklan
        <input type="checkbox" name="alasan3" value="Kerabat/Teman">Kerabat/Teman
        
        <input type="Submit" value="Submit"><input type="reset" value="Cancel">
        </pre>
    </form>

</body>

</html>