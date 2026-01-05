<?php
class Game {
    private $nama;
    private $tahun;
    private $genre;
    private $platform;

    public function __construct($nama, $tahun, $genre, $platform) {
        $this->nama = $nama;
        $this->setTahun($tahun);
        $this->genre = $genre;
        $this->platform = $platform;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getTahun() {
        return $this->tahun;
    }

    public function setTahun($tahun) {
        if ($tahun > 1950 && $tahun <=date("Y")) {
            $this->tahun = $tahun;
        } else {
            $this->tahun = date("Y");
        }
    }

    public function infoGame() {
        echo "$this->nama ($this->tahun) - $this->genre [$this->platform]\n";
    }
}

class OpenWorldGame extends Game {
    public $Open_World;
    private $ukuran_Map;
    public $fiturMabar;

    public function __construct($nama, $tahun, $genre, $platform, $fiturMabar, $Open_World, $ukuran_Map) {
        parent::__construct($nama, $tahun, $genre, $platform);
        $this->Open_World = $Open_World;
        $this->fiturMabar = $fiturMabar;
        $this->ukuran_Map = $ukuran_Map;
    }

    public function getUkuranMap() {
        return $this->ukuran_Map;
    }

    public function setUkuranMap($size) {
        $ukuran_benar = ["besar", "sedang", "kecil"];
        $lowarcasi = strtolower($size);

        if (in_array($lowarcasi, $ukuran_benar)) {
            $this->ukuran_Map = ucfirst($lowarcasi);
        } else {
            $this->ukuran_Map = "Rusak";
        }
    }

    public function infoGame() {
        parent::infoGame();
        echo "Bisa Mabar Emang: " . ($this->fiturMabar ? "Yes" : "No") . "\n";
        echo "Open World Emang: " . ($this->Open_World ? "Yes" : "No") . "\n";
        echo "Ukuran Map: " . ($this->ukuran_Map) . "\n";
    }
}

$game1 = new OpenWorldGame("Need For Speed Heat", 2019, "Racing", "Xbox Series X", true, true, "Besar");
$game1->setUkuranMap("kEcIl");
$game1->infoGame();

?>