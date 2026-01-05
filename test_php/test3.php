<?php
class Game {
    public $nama;
    public $tahun;
    public $genre;
    public $platform;

    public function __construct($nama, $tahun, $genre, $platform) {
        $this->nama = $nama;
        $this->tahun = $tahun;
        $this->genre = $genre;
        $this->platform = $platform;
    }

    public function infoGame() {
        echo "$this->nama ($this->tahun) - $this->genre [$this->platform]\n";
    }
}

class OpenWorldGame extends Game {
    public $Open_World;
    public $ukuran_Map;
    public $fiturMabar;

    public function __construct($nama, $tahun, $genre, $platform, $fiturMabar, $Open_World, $ukuran_Map) {
        parent::__construct($nama, $tahun, $genre, $platform);
        $this->Open_World = $Open_World;
        $this->fiturMabar = $fiturMabar;
        $this->ukuran_Map = $ukuran_Map;
    }

    public function infoGame() {
        parent::infoGame();
        echo "Bisa Mabar Emang: " . ($this->fiturMabar ? "Yes" : "No") . "\n";
        echo "Open World Emang: " . ($this->Open_World ? "Yes" : "No") . "\n";
        echo "Ukuran Map: " . ($this->ukuran_Map) . "\n";
    }
}

$game1 = new OpenWorldGame("Need For Speed Heat", 2019, "Racing", "Xbox Series X", true, false, "500x500");
$game1->tahun = -100;

$game2 = new OpenWorldGame("Minecraft Java", 2009, "Sandbox", "PC", true, true, "1024x1024");

$game3 = new OpenWorldGame("Grand Theft Auto V", 2013, "Action", "PS5", true, true, "512x512");

$games = [$game1, $game2, $game3];

foreach ($games as $game) {
    $game->infoGame();
    echo "\n";
}
?>