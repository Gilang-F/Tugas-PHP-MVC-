<?php namespace Controllers;
    use Models\Model_mhs;
    class Mahasiswa
    {
        private $mhs;
        public function __construct()
        {
            $this->mhs = new Model_mhs();
        }

        public function index()
        {
            require_once 'app/Views/index.php';
        }

        function show_data()
        {
            if(!isset($_GET['i']))
            {
                //jika tidak ada parameter id yang dikirim, maka akan menampilkan semua data yang ada
                $rs = $this->mhs->lihatData();
                require_once('app/Views/mhsList.php');
            }
            else
            {
                //ada parameter id yang dikirim, tampilkan detail dari salah satu data yang dipilih
                $rs = $this->mhs->lihatDataDetail($_GET['i']);
                require_once('app/Views/mhsDetail.php');
            }
        }

        function save()
        {
            $nim =  $_POST['nim'];
            $nama = $_POST['nama'];

            //penyimpanan data ke model
            $this->mhs->simpanData($nim,$nama);
            $this->index(); //controller dikembalikan ke method index setelah selesai mengakses method ini.
        }
        
        public function edit()
{
    // Pastikan parameter 'id' ada
    if (!isset($_GET['id'])) {
        echo "ID tidak ditemukan.";
        exit();
    }

    $id = $_GET['id'];

    // Ambil data mahasiswa berdasarkan ID
    $mahasiswa = $this->mhs->lihatDataDetail($id);

    if (!$mahasiswa) {
        echo "Data mahasiswa tidak ditemukan.";
        exit();
    }

    // Tampilkan halaman edit dengan data mahasiswa
    include "app/Views/mhsEdit.php";
}
 
public function update()
{
    // Pastikan parameter 'id' ada
    if (!isset($_GET['id'])) {
        echo "ID tidak ditemukan.";
        exit();
    }

    $id = $_GET['id'];

    // Validasi input form
    $data = [
        'nama' => $_POST['nama'],
        'nim' => $_POST['nim'],
    ];

    // Update data mahasiswa
    if ($this->mhs->updateMahasiswa($id, $data)) {
        header("Location: ?act=tampil-data");
        exit();
    } else {
        echo "Gagal memperbarui data.";
    }
}

public function delete()
{
    // memastikan parameter 'id' ada
    if (!isset($_GET['id'])) {
        echo "ID tidak ditemukan.";
        exit();
    }

    $id = $_GET['id'];

    // Hapus data mahasiswa berdasarkan ID
    if ($this->mhs->hapusData($id)) {
        // Redirect kembali ke halaman tampil data setelah penghapusan berhasil
        header("Location: ?act=tampil-data");
        exit();
    } else {
        echo "Gagal menghapus data.";
    }
}

    }