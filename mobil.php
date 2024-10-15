<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Mobil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 20px;
            padding: 15px;
            background-color: #f9f9f9;
        }

        .card h2 {
            margin-top: 0;
        }

        .btn {
            display: inline-block;
            padding: 10px 15px;
            margin-top: 10px;
            color: #fff;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .turbo, .irit, .sensor {
            margin-top: 10px;
            padding: 10px;
            background-color: #e7f3ff;
            border-left: 5px solid #007bff;
        }

    </style>
</head>
<body>

<div class="container">
    <h1>Informasi Mobil</h1>
    <div id="mobil-info">
        <?php 
            

            class Mobil {
                public $nama;
                public $merk;
            
                public function __construct($nama, $merk) {
                    $this->nama = $nama;
                    $this->merk = $merk;
                }
            
                public function cetakInfo() {
                    echo "<h2>Nama Mobil : " . $this->nama . "</h2>";
                    echo "<p>Merk : " . $this->merk . "</p>";
                }
            }
            
            
            class MobilSport extends Mobil {
                public $kecepatan;
            
                public function __construct($nama, $merk, $kecepatan) {
                    parent::__construct($nama, $merk); // Memanggil constructor dari class utama
                    $this->kecepatan = $kecepatan;
                }
            
                public function turbo() {
                    echo "<div class='turbo'>Mobil ini memiliki kecepatan turbo sebesar " . $this->kecepatan . " km/jam.</div>";
                }
            }
            
            
            class CityCar extends Mobil {
                public $model;
            
                public function __construct($nama, $merk, $model) {
                    parent::__construct($nama, $merk); // Memanggil constructor dari class utama
                    $this->model = $model;
                }
            
                public function irit() {
                    echo "<div class='irit'>City car ini sangat irit bahan bakar.</div>";
                }
            
                public function sensor() {
                    echo "<div class='sensor'>City car ini dilengkapi dengan sensor parkir.</div>";
                }
            }
            
            
            echo "<div class='card'>";
            $mobilSport = new MobilSport("Huracan", "Lamborghini", 260);
            $mobilSport->cetakInfo();
            $mobilSport->turbo();
            echo "</div>";
            
            
            echo "<div class='card'>";
            $cityCar = new CityCar("Yaris", "Toyota", "Model A");
            $cityCar->cetakInfo();
            $cityCar->irit();
            $cityCar->sensor();
            echo "</div>";
            
            
        ?>
    </div>
</div>

</body>
</html>
