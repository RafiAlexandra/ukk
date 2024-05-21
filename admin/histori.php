<h5>Halaman histori aduan.</h5>
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>No</td>
        <td>Tanggal Aduan</td>
        <td>Isi Aduan</td>
        <td>Lokasi Kejadian</td>
        <td>Pilih Status</td>
    </tr>
    <?php
    include '../koneksi.php';
    $no = 1;
    $sql = "SELECT*FROM masyarakat ORDER BY nomor_ktp DESC";
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data){ ?>    
         <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['tanggal_aduan'] ?></td>
            <td><?= $data['isi_aduan'] ?></td>
            <td><?= $data['lokasi_kejadian'] ?></td> 
            <td>
                <a onclick="return confirm('Apakah Anda Sudah Menyelesaikan aduan ini')" href="?url=hapus&nomor_ktp=<?= $data['nomor_ktp'] ?>" class='btn btn-dark'>dilaksanakan</a>
            </td>            
         </tr>
    <?php } ?>

    
</table>