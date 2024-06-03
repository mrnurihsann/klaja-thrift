<?php
require 'koneksi.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM produk WHERE id='$id'");
$dataProduk = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
        }

        input[type="number"],
        input[type="text"],
        input[type="submit"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Id Produk</td>
                <td>:</td>
                <td>
                    <input type="number" name="id" value="<?php echo $dataProduk['id'] ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>Nama Produk</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama" value="<?php echo $dataProduk['nama'] ?>">
                </td>
            </tr>
            <tr>
                <td>Harga Produk</td>
                <td>:</td>
                <td>
                    <input type="text" name="harga" value="<?php echo $dataProduk['harga'] ?>">
                </td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>:</td>
                <td>
                    <input type="text" name="stok" value="<?php echo $dataProduk['stok'] ?>">
                </td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>:</td>
                <td>
                    <input type="text" name="kategori" value="<?php echo $dataProduk['kategori'] ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" value="Simpan" name="submit">
                </td>
            </tr>
        </table>
    </form>
    <?php
    require 'koneksi.php';
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $kategori = $_POST['kategori'];
        $result = mysqli_query($conn, "UPDATE produk SET id='$id', nama='$nama', harga='$harga', stok='$stok', kategori='$kategori' WHERE id='$id'");
        header('Location: tampil.php');
    }

    ?>
</body>

</html>