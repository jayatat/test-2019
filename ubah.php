<?php

$conn = mysqli_connect("localhost", "root", "", "kominfo");
$id = $_GET['id'];
if (!empty($id)) {
    $tam = mysqli_query($conn, "SELECT * FROM perangkat where id = '$id'");
    $row = mysqli_fetch_assoc($tam);
}
if (isset($_POST["submit"])) {
    $ide = $_POST['ide'];
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];


    $query = "UPDATE perangkat SET id = '$id',
    nama = '$nama', jumlah = '$jumlah' where id = '$ide'
    ";
    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        echo "berhasil";
        echo "<a href='index.php'>Kembali ke Utama </a>";
    } else {
        echo "gagal";
        echo "<a href='index.php'> Kembali ke Utama</a>";
    }
}

?>
<!DOCTYPE html>
<html l an g="en">

<head>
    <meta char set=" UTF-8">
    <meta n ame="vie wport" cont ent=" w idth=d e vice-width, in i tial- s cal e=1.0">
    <meta http-eq u i v=" X-UA-Compa tible" cont en t="ie =edge">
    <title>Ubah data</title>
</head>

<body>
    <h1>ubah Data</h1>
    <form action="" method="post">
        <input type="hidden" name="ide" value="<?= $row['id']; ?> ">
        <label for="nim">ID</label>
        <input type="text" name="id" id="id" value="<?= $row['id']; ?> "><br>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="<?= $row['nama']; ?> "><br>
        <label for="tptlahir">Jumlah</label>
        <input type="text" name="jumlah" id="jumlah" value="<?= $row['jumlah']; ?> "><br>

        <button type="submit" name="submit">ubah</button>
    </form>
</body>

</html> 