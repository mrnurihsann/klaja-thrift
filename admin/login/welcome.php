<?php
session_start();
if( ! isset($_SESSION['username'])){
    header("location: index.php");
}
?>
<html>
    <head>
        <title>Selamat Datang</title>
    </head>
<body>
    <h1>Selamat Datang 
        <?php echo $_SESSION['nama']; ?> </h1>
    <h4>Selamat Anda Berhasil Login </h4>
    <a href="logout.php">Logout</a>
</body>
</html>