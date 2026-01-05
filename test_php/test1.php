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

$game1 = new Game("God of War", 2008, "Action", "Playstation");
$game2 = new Game("Need For Speed Most Wanted", 2012, "Racing", "Playstation");
$game3 = new Game("Minecraft Java Edition", 2009, "Open World", "PC");

$games = [$game1, $game2, $game3];

foreach ($games as $game) {
    $game->infoGame();
}

?>