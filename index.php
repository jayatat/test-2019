<?php
error_reporting(0);
$conn = mysqli_connect("localhost", "root", "", "kominfo");
$id = $_GET['id'];
if (!empty($id)) {
    mysqli_query($conn, "DELETE FROM perangkat WHERE id='$id'");
    // mysqli_execute($del);
    echo "hapus berhasil";
}
$result = mysqli_query($conn, "SELECT * FROM perangkat");



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <table border="1" width="65%">
        <thead>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1;
            while ($row = mysqli_fetch_assoc($result)):
                ?>
            <tr>
                <td>
                    <?= $i; ?>
                </td>
                <td>
                    <?= $row['id']; ?>
                </td>
                <td>
                    <?= $row['nama']; ?>
                </td>
                <td>
                    <?= $row['jumlah']; ?>
                </td>

                </td>
                <td>
                    <a href="ubah.php?id=<?= $row['id']; ?>">Edit</a> | <a href="index.php?id=<?= $row['id']; ?> ">Hapus</a>
                </td>
            </tr>
            <?php
            $i++;
        endwhile;
        ?>
        </tbody>
    </table>
    <a href="tambah.php">Tambah Data</a>
</body>

</html> 