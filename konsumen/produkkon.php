<?php
require 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM produk");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    </style>
</head>

<body>
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
                        <a href="../konsumen/tambah.php?id=<?php echo $data['id']; ?>" class="beli-button">Beli</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
        </div>
    </div>
</body>

</html>
