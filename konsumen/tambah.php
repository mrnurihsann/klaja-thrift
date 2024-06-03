<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Tambah Konsumen</title>
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
        input[type="text"] {
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
        <h1>Tambah Konsumen</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td>id Konsumen</td>
                    <td>:</td>
                    <td>
                        <input type="number" name="id">
                    </td>
                </tr>
                <tr>
                    <td>Nama Konsumen</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama">
                    </td>
                </tr>
                <tr>
                    <td>Alamat Konsumen</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat">
                    </td>
                </tr>
                <tr>
                    <td>No HP</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nohp">
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="email">
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
    require '../koneksi.php';

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $nohp = $_POST['nohp'];
        $email = $_POST['email'];
        $result = mysqli_query($conn, "INSERT INTO konsumen(id, nama, alamat, nohp, email) VALUES('$id', '$nama', '$alamat', '$nohp', '$email')");
        header('Location: ../admin/transaksi/tambah.php');
    }
    ?>
</body>

</html>
