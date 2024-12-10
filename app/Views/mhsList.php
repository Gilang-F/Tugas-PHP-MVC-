<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <style>
        .container-table {
            margin-top: 50px;
        }
        .table thead th {
            text-align: center;
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

    <!-- Data Mahasiswa -->
    <div class="container container-table">
        <h3 class="text-center text-primary">Data Mahasiswa</h3>
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1; // Counter untuk nomor urut
                    foreach ($rs as $mahasiswa) {
                        echo '<tr>';
                        echo '<td>' . $no++ . '</td>';
                        echo '<td>' . htmlspecialchars($mahasiswa['nim']) . '</td>';
                        echo '<td>' . htmlspecialchars($mahasiswa['nama']) . '</td>';
                        echo '<td>
                            <a href="?act=edit&id=' . htmlspecialchars($mahasiswa['id']) . '" class="btn btn-sm btn-warning">Edit</a>
                            <a href="?act=delete&id=' . htmlspecialchars($mahasiswa['id']) . '" class="btn btn-sm btn-danger" onclick="return confirm(\'Yakin mau dihapus?\')">Delete</a>
                        </td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="text-center mt-3">
            <a href="?act=tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
        </div>
    </div>

    <script src="/assets/js/bootstrap.js"></script>
</body>
</html>
