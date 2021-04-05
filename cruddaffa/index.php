<?php
    //memanggil file funcition
    require 'funcions.php';
    //cara menampung data dari db ke array 
    $siswa = query ("SELECT * FROM data_siswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Daffa</title>
</head>
<body>
    <h1>Daftar siswa SMK Pesat</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>NIS</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <?php $nomor = 1;?>
        <?php foreach ($siswa as $baris):?>
        <tr>
            <td><?=$nomor?></td>
            <td><?=$baris["gambar"]?></td>
            <td><?=$baris["nis"]?></td>
            <td><?=$baris["email"]?></td>
            <td><?=$baris["jurusan"]?></td>
            <td>
                <a href="#">ubah</a>
                <a href="#">hapus</a>
            </td>
        </tr>
        <?php $nomor++?>
        <?php endforeach;?>
    </table>
</body>
</html>