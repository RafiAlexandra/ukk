<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Masyarakat - Aplikasi aduan.</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col-md-4">
            <h4 class="text-center">LOGIN MASYARAKAT</h4>
            <div class="card">
                <div class="card-body">
                    <form action="proses-login-masyarakat.php" method="post">
                        <div class="form-group mb-2">
                            <label>Nomor KTP</label>
                            <input type="number" name="nomor_ktp" class="form-control" placeholder="Masukan Nomor KTP anda.." required>
                        </div>
                        <div class="form-group mb-2">
                            <button type="submit" class="btn btn-primary"> LOGIN </button>
                        </div>
                        <a href="index2.php"> Login Sebagai Administrator / Petugas </a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
    

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>