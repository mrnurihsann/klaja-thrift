<?php
 require '../../koneksi.php';
 $id_transaksi = $_GET['id_transaksi'];
 $result = mysqli_query($conn, "DELETE FROM transaksi WHERE id_transaksi='$id_transaksi'");
 header('Location: tampil.php');
?>