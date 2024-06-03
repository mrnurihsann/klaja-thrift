<?php
require '../../koneksi.php';
$query = "SELECT transaksi.id_transaksi, produk.nama AS nama_produk, konsumen.nama AS nama_konsumen, transaksi.tanggal, transaksi.jumlah
          FROM transaksi
          JOIN produk ON transaksi.id_produk = produk.id
          JOIN konsumen ON transaksi.id_konsumen = konsumen.id";
$result = mysqli_query($conn, "SELECT * FROM transaksi");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Transaksi</title>
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

        .edit-button {
            background-color: #2196F3;
        }

        .delete-button {
            background-color: #f44336;
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
    <div class="container">
        <h1>Data Transaksi</h1>
        <table>
            <tr>
                <th>Id Transaksi</th>
                <th>Produk</th>
                <th>Konsumen</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
            <?php
            while ($data = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $data['id_transaksi']; ?></td>

                    <td>
                        <?php
                        $queryProduk = mysqli_query($conn, "SELECT * FROM produk WHERE id=" . $data['id_produk']);
                        $dataProduk = mysqli_fetch_assoc($queryProduk);
                        echo $dataProduk['nama'];
                        ?>
                    </td>

                    <td>
                        <?php
                        $queryKonsumen = mysqli_query($conn, "SELECT * FROM konsumen WHERE id=" . $data['id_konsumen']);
                        $dataKonsumen = mysqli_fetch_assoc($queryKonsumen);
                        echo $dataKonsumen['nama'];
                        ?>
                    </td>

                     <td>
                        <?php
                        $queryProduk = mysqli_query($conn, "SELECT * FROM produk WHERE id=" . $data['id_produk']);
                        $dataProduk = mysqli_fetch_assoc($queryProduk);
                        echo $dataProduk['harga'];
                        ?>
        
                    <td><?php echo $data['jumlah']; ?></td>

                    <td>
                        <a href="edit.php?id_transaksi=<?php echo $data['id_transaksi']; ?>" class="edit-button">Edit</a>
                        <a href="hapus.php?id_transaksi=<?php echo $data['id_transaksi']; ?>" class="delete-button">Hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
        <div class="bottom-center">
            <a href="tambah.php" class="button">Tambah Transaksi</a>
        </div>
    </div>
</body>

</html>
