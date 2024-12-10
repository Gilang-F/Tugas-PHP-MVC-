<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Native MVC Example</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css" />
    <style>
        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 8px;
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="card-title text-center">Data Mahasiswa</h3>
                        <div class="mt-4">
                            <?php 
                                if ($rs) {
                                    echo '<p><strong>ID:</strong> ' . htmlspecialchars($rs['id']) . '</p>';
                                    echo '<p><strong>NIM:</strong> ' . htmlspecialchars($rs['nim']) . '</p>';
                                    echo '<p><strong>Nama:</strong> ' . htmlspecialchars($rs['nama']) . '</p>';
                                } else {
                                    echo '<p class="text-danger">Data tidak ditemukan.</p>';
                                }
                            ?>
                        </div>
                        <div class="text-center mt-4">
                            <a href="/mvc-example/" class="btn btn-outline-primary">Kembali ke Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/assets/js/bootstrap.js"></script>
</body>
</html>
