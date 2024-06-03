<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Tambah Produk</title>
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
    <div class="container">
        <h1>Tambah Produk</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td>id Produk</td>
                    <td>:</td>
                    <td>
                        <input type="number" name="id" required>
                    </td>
                </tr>
                <tr>
                    <td>Nama Produk</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" required>
                    </td>
                </tr>
                <tr>
                    <td>Harga Produk</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="harga" required>
                    </td>
                </tr>
                <tr>
                    <td>Stok Produk</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="stok" required>
                    </td>
                </tr>
                <tr>
                    <td>Kategori Produk</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="kategori" required>
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
    </div>

    <?php
    require 'koneksi.php';

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $kategori = $_POST['kategori'];
        $result = mysqli_query($conn, "INSERT INTO produk(id, nama, harga, stok, kategori) VALUES('$id', '$nama', '$harga', '$stok', '$kategori')");
        header('Location: tampil.php');
    }
    ?>
</body>

</html>
