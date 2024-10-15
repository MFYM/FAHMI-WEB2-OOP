<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        .card-title {
            color: #007BFF;
            font-size: 1.8em;
        }
        .highlight {
            color: #FF5733;
        }
        .highlight-kip {
            color: #28A745;
        }
        .card-body {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 25px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Informasi Mahasiswa</h1>

        <div class="row justify-content-center">
            <?php
            
            class Mahasiswa {
                public $nama;
                public $nim;
                public $jurusan;

                public function __construct($nama, $nim, $jurusan) {
                    $this->nama = $nama;
                    $this->nim = $nim;
                    $this->jurusan = $jurusan;
                }

                public function cetakInfo() {
                    echo "<p>Nama: <span class='highlight'>$this->nama</span></p>";
                    echo "<p>NIM: <span class='highlight'>$this->nim</span></p>";
                    echo "<p>Jurusan: <span class='highlight'>$this->jurusan</span></p>";
                }
            }

            
            class MahasiswaReguler extends Mahasiswa {
                public $biayaKuliah;

                public function __construct($nama, $nim, $jurusan, $biayaKuliah) {
                    parent::__construct($nama, $nim, $jurusan);
                    $this->biayaKuliah = $biayaKuliah;
                }

                public function cetakInfo() {
                    parent::cetakInfo();
                    echo "<p>Biaya Kuliah: <span class='highlight'>Rp. $this->biayaKuliah</span></p>";
                }
            }

            
            class MahasiswaKIP extends Mahasiswa {
                public $bantuanKIP;

                public function __construct($nama, $nim, $jurusan, $bantuanKIP) {
                    parent::__construct($nama, $nim, $jurusan);
                    $this->bantuanKIP = $bantuanKIP;
                }

                public function tunjanganKIP() {
                    echo "<p class='highlight-kip'>Mahasiswa ini menerima bantuan KIP sebesar: Rp. $this->bantuanKIP</p>";
                }

                public function cetakInfo() {
                    parent::cetakInfo();
                    echo "<p>Bantuan KIP: <span class='highlight-kip'>Rp. $this->bantuanKIP</span></p>";
                }
            }

            
            $mahasiswaReguler = new MahasiswaReguler("Budi", "123456", "Teknik Informatika", 5000000);
            $mahasiswaKIP = new MahasiswaKIP("Siti", "654321", "Sistem Informasi", 2000000);

            
            echo '<div class="col-md-6 mb-4">';
            echo '<div class="card">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title text-center">Mahasiswa Reguler</h5>';
            $mahasiswaReguler->cetakInfo();
            echo '</div>';
            echo '</div>';
            echo '</div>';

            
            echo '<div class="col-md-6 mb-4">';
            echo '<div class="card">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title text-center">Mahasiswa KIP</h5>';
            $mahasiswaKIP->cetakInfo();
            $mahasiswaKIP->tunjanganKIP();
            echo '</div>';
            echo '</div>';
            echo '</div>';
            ?>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
