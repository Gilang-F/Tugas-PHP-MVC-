<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Native MVC Example</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <style>
        body {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: #f8f9fa; /* Warna latar belakang yang lembut */
        }
        .navbar-brand {
            font-weight: bold;
        }
        .container-form {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 56px); /* Tinggi layar dikurangi tinggi navbar */
        }
        .card {
            border-radius: 10px;
        }
        .form-group {
            margin-bottom: 1.5rem; /* Jarak antar elemen form */
        }
    </style>
</head>
<body>

<!-- navbar -->
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

<!-- form -->
    <div class="container container-form">
        <div class="row justify-content-center">
            <div> 
                <div class="card shadow">
                    <div class="card-body p-4"> 
                        <h3 class="card-title text-center text-primary mb-4">Form Data Mahasiswa</h3>
                        <form method="post" action="/MVC-EXAMPLE/?act=simpan">
                            <div class="form-group">
                                <label for="exampleInputNim" class="form-label">NIM</label>
                                <input type="text" class="form-control" id="exampleInputNim" name="nim" placeholder="Masukkan NIM" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="exampleInputNama" name="nama" placeholder="Masukkan Nama" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mt-3">Submit</button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a href="/MVC-EXAMPLE/?act=tampil-data" class="btn btn-outline-primary mt-2">Lihat Data Mahasiswa</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/assets/js/bootstrap.js"></script>
    <script src="/assets/js/npm.js"></script>
</body>
</html>
