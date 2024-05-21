<?php

$nomor_ktp = $_GET['nomor_ktp'];

include '../koneksi.php';
$sql = "DELETE FROM masyarakat WHERE nomor_ktp='$nomor_ktp'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=aduan");
}else{
    echo"<script>alert('Maaf Data Tidak Terhapus'); window.location.assign('?url=aduan');</script>";
}
