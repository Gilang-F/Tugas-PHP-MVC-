<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <style>
        .container-form {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 56px);
        }
        .card {
            border-radius: 10px;
        }
        .btn-primary {
            width: 100%;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/MVC-EXAMPLE/">MVC Example</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="/MVC-EXAMPLE/">Home</a>
        <a class="nav-link" href="/MVC-EXAMPLE/?act=tampil-data">Data Mahasiswa</a>
      </div>
    </div>
  </div>
</nav>

    <!-- Form Edit -->
    <div class="container container-form">
        <div class="row justify-content-center">
            <div>
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="card-title text-center text-primary">Edit Data Mahasiswa</h3>
                        <form method="POST" action="?act=update&id=<?= htmlspecialchars($mahasiswa['id']) ?>">
                        <div class="form-group mb-3">
                                <label for="nim">NIM:</label>
                                <input type="text" class="form-control" id="nim" name="nim" value="<?= htmlspecialchars($mahasiswa['nim']) ?>" required>
                            </div>
                        <div class="form-group mb-3">
                                <label for="nama">Nama:</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= htmlspecialchars($mahasiswa['nama']) ?>" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a href="/MVC-EXAMPLE/?act=tampil-data" class="btn btn-outline-primary">Kembali ke Data Mahasiswa</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>
