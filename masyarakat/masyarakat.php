<?php
session_start();
if(empty($_SESSION['nomor_ktp'])){
    echo"<script>
    alert('Maaf Anda Belum Login');
    window.location.assign('aduan/index2.php');
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masyarakat - Aplikasi Aduan Masyarakat.</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    
    <h3>Aplikasi Aduan Masyarakat</h3>
    <div class="alert alert-info">
        Anda Login Sebagai <b>MASYARAKAT</b> Aplikasi Pengaduan Masyarakat
    </div>
    <a href="masyarakat.php" class="btn btn-primary"> Masyarakat</a>
    <a href="masyarakat.php?url=tambah-aduan" class="btn btn-primary"> Tambah Aduan</a>
    <a href="masyarakat.php?url=logout" class="btn btn-primary"> Logout</a>

    <div class="card mt-2">
        <div class="card-body">
            <?php
            $file = @$_GET['url'];
            if(empty($file)){
                echo "<h4>Selamat Datang Di Halaman Masyarakat.</h4>";
                echo "Aplikasi Pengaduan Masyarakat digunakan untuk mempermudah dalam mengadukan kejadian yang di alami masyarakat";
            } else{
                include $file.'.php';
            }

            ?>
        </div>
    </div>

    
</div>
    

<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>