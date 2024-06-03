<?php
require 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM produk");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Data Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        a {
            text-decoration: none;
            color: #fff;
            background-color: #4CAF50;
            padding: 8px 12px;
            border-radius: 4px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .navbar {
            background-color: #333;
            color: #fff;
        }

        .navbar-brand {
            padding: 0;
            margin-right: 15px;
        }

        .navbar-brand img {
            width: 150px;
            height: 60px;
            margin-top: 5px;
        }

        .navbar-nav .nav-item .nav-link {
            color: #fff;
            font-weight: bold;
        }


        .edit-button {
            background-color: #2196F3;
        }

        .delete-button {
            background-color: #f44336;
        }

        .beli-button {
            background-color: #F0E68C;
        }

        .button {
            display: inline-block;
            padding: 8px 12px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .button:hover {
            background-color: #45a049;
        }

        .bottom-center {
            text-align: center;
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active mr-3">
                    <a href="../../konsumen/tampil.php" class="nav-link" href="#">Konsumen</a>
                </li>
                <li class="nav-item">
                    <a href="../transaksi/tampil.php" class="nav-link" href="#">Transaksi</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h1>Data Produk</h1>
        <table>
            <tr>
                <th>Id Produk</th>
                <th>Nama Produk</th>
                <th>Harga Produk</th>
                <th>Stok</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
            <?php while ($data = mysqli_fetch_array($result)) : ?>
                <tr>
                    <td><?= $data['id']; ?></td>
                    <td><?= $data['nama']; ?></td>
                    <td><?= $data['harga']; ?></td>
                    <td><?= $data['stok']; ?></td>
                    <td><?= $data['kategori']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['id']; ?>" class="edit-button" style="margin-right: 5px;">Edit</a>
                        <a href="hapus.php?id=<?php echo $data['id']; ?>" class="delete-button">Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
        <div class="bottom-center">
            <a href="tambah.php" class="button">Tambah Produk</a>
        </div>
    </div>
</body>

</html>
