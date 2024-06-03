<?php
 require 'koneksi.php';
 $id = $_GET['id'];
 $result = mysqli_query($conn, "DELETE FROM produk WHERE id='$id'");

 header('Location: tampil.php');
?>