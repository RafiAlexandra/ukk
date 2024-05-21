<h5>Halaman Data Aduan.</h5>
<a href="?url=tambah-aduan" class="btn btn-primary">Tambah Aduan</a>
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>No</td>
        <td>Tanggal Aduan</td>
        <td>Isi Aduan</td>
        <td>Lokasi Kejadian</td>
        <td>Edit</td>
        <td>Hapus</td>
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
                <a href="?url=edit-aduan&nomor_ktp=<?= $data['nomor_ktp'] ?>" class='btn btn-warning'>EDIT</a>
            </td>   
            <td>
                <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data')" href="?url=hapus&nomor_ktp=<?= $data['nomor_ktp'] ?>" class='btn btn-danger'>HAPUS</a>
            </td>            
         </tr>
    <?php } ?>

    
</table>