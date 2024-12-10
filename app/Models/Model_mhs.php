<?php

    /**
     * Model mahasiswa berfungsi untuk menjalankan query
     * Sebelum menggunakan query, load dulu library database
     */

    namespace Models;
    use Libraries\Database;

    class Model_mhs
    {
        private $dbh;
        public function __construct()
        {
            $db = new Database();
            $this->dbh = $db->getInstance();
        }

        function simpanData($nim,$nama)
        {
            $rs = $this->dbh->prepare("INSERT INTO mahasiswa (nim,nama) VALUES (?,?)");
            $rs->execute([$nim,$nama]);
        }

        function lihatData()
        {

            $rs = $this->dbh->query("SELECT * FROM mahasiswa");
            return $rs;
        }

        function lihatDataDetail($id)
        {

            $rs = $this->dbh->prepare("SELECT * FROM mahasiswa WHERE id=?");
            $rs->execute([$id]);
            return $rs->fetch();// kalau hasil query hanya satu, gunakan method fetch() bawaan PDO
        }
        
        public function getMahasiswaById($id)
        {
            $query = "SELECT * FROM mahasiswa WHERE id = :id";
            $stmt = $this->dbh->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch(\PDO::FETCH_ASSOC); // Perhatikan penggunaan namespace \PDO
        }
        
        public function updateMahasiswa($id, $data)
        {
            $query = "UPDATE mahasiswa SET nama = :nama, nim = :nim WHERE id = :id";
            $stmt = $this->dbh->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':nama', $data['nama']);
            $stmt->bindParam(':nim', $data['nim']);
            return $stmt->execute();
        }

        public function hapusData($id)
        {
            try {
                // Siapkan query DELETE
                $stmt = $this->dbh->prepare("DELETE FROM mahasiswa WHERE id = :id");
                
                // Bind parameter :id ke nilai $id
                $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
                
                // Eksekusi query
                return $stmt->execute(); // Return true jika berhasil
            } catch (\PDOException $e) {
                // Tangani error
                echo "Error: " . $e->getMessage();
                return false; // Return false jika gagal
            }
        }
    }

    

  
    