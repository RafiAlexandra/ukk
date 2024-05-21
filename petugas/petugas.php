<?php
session_start();
if(empty($_SESSION['id_petugas'])){
    echo"<script>
    alert('Maaf Anda Belum Login');
    window.location.assign('../index2.php');
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petugas - Petugas - Aplikasi Aduan Masyarakat.</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    
    <h3>Aplikasi Aduan Masyarakat</h3>
    <div class="alert alert-info">
        Anda Login Sebagai <b>PETUGAS</b> Aplikasi Pengaduan Masyarakat.
    </div>
    <a href="petugas.php" class="btn btn-primary"> Petugas</a>
    <a href="petugas.php?url=aduan" class="btn btn-primary"> Aduan</a>
    <a href="petugas.php?url=logout" class="btn btn-primary"> Logout</a>

    <div class="card mt-2">
        <div class="card-body">
            <?php
            $file = @$_GET['url'];
            if(empty($file)){
                echo "<h4>Selamat Datang Di Halaman Petugas.</h4>";
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