<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Siswa - Aplikasi Pembayaran SPP</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <img src="Banner Aplikasi pembayaran spp.png" width="100%" alt="Banner Aplikasi Pembayaran SPP">
                    </div>
                    <div class="card-body">
                        <form action="proses-login-admin.php" method="POST">
                            <div class="mb-3">
                                <label for="nisn" class="form-label">NISN</label>
                                <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Masukkan NISN Anda" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
                            </div>
                            <div class=" d-grid mb-3">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                        <div class="text-start">
                            <a href="index2.php" class="btn btn-link btn-sm">Login sebagai Admin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</body>
</html>
