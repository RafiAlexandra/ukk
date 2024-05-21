<?php

$nomor_ktp = $_GET['nomor_ktp'];
$tanggal_aduan = $_POST['tanggal_aduan'];
$isi_aduan = $_POST['isi_aduan'];
$lokasi_kejadian = $_POST['lokasi_kejadian'];

include '../koneksi.php';
$sql = "UPDATE masyarakat SET tanggal_aduan='$tanggal_aduan', isi_aduan='$isi_aduan', lokasi_kejadian='$lokasi_kejadian' WHERE nomor_ktp='$nomor_ktp'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=aduan");
}else{
    echo"<script>alert('Maaf Data Tidak Tersimpan'); window.location.assign('?url=aduan');</script>";
}
