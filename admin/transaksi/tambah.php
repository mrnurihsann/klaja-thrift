<?php
ob_start();
require '../../koneksi.php';
$refProduk = mysqli_query($conn, "SELECT * FROM produk");
$refKonsumen = mysqli_query($conn, "SELECT * FROM konsumen");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Transaksi</title>
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
        select {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Transaksi</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td>id Transaksi</td>
                    <td>:</td>
                    <td>
                        <input type="number" name="id_transaksi">
                    </td>
                </tr>
                <tr>
                    <td>Nama Produk</td>
                    <td>:</td>
                    <td>
                        <select name="id_produk" id="">
                            <?php
                            while ($dataProduk = mysqli_fetch_array($refProduk)) {
                            ?>
                                <option value="<?php echo $dataProduk['id']; ?>">
                                    <?php echo $dataProduk['nama']; ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Nama Konsumen</td>
                    <td>:</td>
                    <td>
                        <select name="id_konsumen" id="">
                            <?php
                            while ($dataKonsumen = mysqli_fetch_array($refKonsumen)) {
                            ?>
                                <option value="<?php echo $dataKonsumen['id']; ?>">
                                    <?php echo $dataKonsumen['nama']; ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="tanggal">
                    </td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>:</td>
                    <td>
                        <input type="number" min="0" max="1" name="jumlah">
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
    require '../../koneksi.php';

    if (isset($_POST['submit'])) {
        $id_transaksi = $_POST['id_transaksi'];
        $idproduk = $_POST['id_produk'];
        $idkonsumen = $_POST['id_konsumen'];
        $tanggal = $_POST['tanggal'];
        $jumlah = $_POST['jumlah'];
        $result = mysqli_query($conn, "INSERT INTO transaksi(id_transaksi, id_produk, id_konsumen, tanggal, jumlah)  VALUES('$id_transaksi', '$idproduk', '$idkonsumen', '$tanggal', '$jumlah')");
        header('Location: ../../konsumen/transaksikon.php');
        ob_end_flush();
    }
    ?>
</body>

</html>
