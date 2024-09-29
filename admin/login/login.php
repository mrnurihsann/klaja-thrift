<?php
session_start();
include('koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];  

$query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
$data = mysqli_fetch_array($query);
$num = mysqli_num_rows($query);

if ($num > 0) {
    $_SESSION['username'] = $data['username'];
    $_SESSION['nama'] = $data['nama'];
    setcookie("message", "delete", time() - 1);
    header("Location: ../produk/tampil.php");
} else {
    
    header("Location: ./loginn.php?login=failed");
}
?>
