<?php
require 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM konsumen");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Konsumen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
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
        <h1>Data Konsumen</h1>
        <table>
            <tr>
                <th>Id Konsumen</th>
                <th>Nama Konsumen</th>
                <th>Alamat Konsumen</th>
                <th>No HP</th>
                <th>Email Konsumen</th>
                <th>Aksi</th>
            </tr>
            <?php
            while ($data = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $data['id']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['nohp']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td class="epus">
                        <a href="edit.php?id=<?php echo $data['id']; ?>" class="edit-button" style="margin-right: 5px;">Edit</a>
                        <a href="hapus.php?id=<?php echo $data['id']; ?>" class="delete-button">Hapus</a>
                       
                    </td>
                </tr>
            <?php } ?>
        </table>
        <div class="bottom-center">
            <a href="tambah.php" class="button">Tambah Konsumen</a>
        </div>
    </div>
</body>

</html>
