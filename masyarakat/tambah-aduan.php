<h5>Halaman Aduan masyarakat</h5>
<hr>
    <form action="?url=proses-tambah-aduan" method="post">
        <div class="form-group mb-2">
                <label>Tanggal Aduan</label>
                <input type="date" name="tanggal_aduan" class="form-control" required>
        </div>
        <div class="form-group mb-2">
                <label>Isi aduan</label>
                <input type="text" name="isi_aduan" class="form-control" required>
        </div>
        <div class="form-group mb-2">
            <label>Lokasi Kejadian</label>
            <input type="text" name="lokasi_kejadian" class="form-control" required>
        </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">SIMPAN</button>
            </div>
    </form>