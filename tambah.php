<?php

$conn = mysqli_connect("localhost", "root", "", "kominfo");
if (isset($_POST["submit"])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];


    $query = "INSERT INTO perangkat values
        ('$id','$nama','$jumlah')
    ";
    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        echo "berhasil";
        echo "<a href ='index.php'>Kembali ke Utama</a>";
    } else {
        echo "gagal";
        echo "<a href ='index.php'>Kembali ke Utama </a>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tqambah</title>
</head>

<body>
    <h1>Tambah Data</h1>
    <form action="" method="post">
        <label for="nim">ID</label>
        <input type="text" name="id" id="id"><br>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama"><br>
        <label for="jumlah">Jumlah</label>
        <input type="text" name="jumlah" id="jumlah"><br>

        <button type="submit" name="submit">Simpan</button>
    </form>
</body>

</html> 