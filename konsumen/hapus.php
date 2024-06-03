<?php
 require 'koneksi.php';
 $id = $_GET['id'];
 $result = mysqli_query($conn, "DELETE FROM konsumen WHERE id='$id'");
 header('Location: tampil.php');
?>