<?php
require 'koneksi.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM konsumen WHERE id='$id'");
$datakonsumen = mysqli_fetch_assoc($result);
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
    <form action="" method="post">
        <table>
            <tr>
                <td>Id Konsumen</td>
                <td>:</td>
                <td>
                    <input type="number" name="id" value="<?php echo $datakonsumen['id'] ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>Nama Konsumen</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama" value="<?php echo $datakonsumen['nama'] ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <input type="text" name="alamat" value="<?php echo $datakonsumen['alamat'] ?>">
                </td>
            </tr>
            <tr>
                <td>NoHP</td>
                <td>:</td>
                <td>
                    <input type="text" name="nohp" value="<?php echo $datakonsumen['nohp'] ?>">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <input type="text" name="email" value="<?php echo $datakonsumen['email'] ?>">
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
        $alamat = $_POST['alamat'];
        $nohp = $_POST['nohp'];
        $email = $_POST['email'];
        $result = mysqli_query($conn, "UPDATE konsumen SET id='$id', nama='$nama', alamat='$alamat', nohp='$nohp', email='$email' WHERE id='$id'");
        header('Location: tampil.php');
    }

    ?>
</body>

</html>