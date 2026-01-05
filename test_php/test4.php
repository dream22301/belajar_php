<?php
class Game {
    protected $namaGame;
    protected $rilisGame;
    protected $genreGame;

    public function __construct($namaGame, $rilisGame, $genreGame) {
        $this->namaGame = $namaGame;
        $this->rilisGame = $rilisGame;
        $this->genreGame = $genreGame;
    }

    public function infoGame() {
        echo "----------------- \n";
        echo "Nama Game: $this->namaGame \nrilis Game pada tahun: $this->rilisGame \nGame Bernama $this->namaGame Bergenre: ($this->genreGame) \n";
    }
}

class PublisherGame extends Game {
    protected $pembuatGame;
    protected $publisherGame;

    public function __construct($namaGame, $rilisGame, $genreGame, $pembuatGame, $publisherGame) {
        parent::__construct($namaGame, $rilisGame, $genreGame);
        $this->pembuatGame = $pembuatGame;
        $this->publisherGame = $publisherGame;
    }

    public function infoGame() {
        echo "----------------- \n";
        echo "Nama Game: $this->namaGame \nRilis Game: ($this->rilisGame)\ngenre Game: $this->genreGame \nPembuat game ini: $this->pembuatGame \nGame ini di publish oleh: $this->publisherGame \n";
    }
}

class WishList extends Game {
    protected $mostWishlistedGame;

    public function __construct($namaGame, $rilisGame, $genreGame, $mostWishlistedGame) {
        parent::__construct($namaGame, $rilisGame, $genreGame);
        $this->mostWishlistedGame = $mostWishlistedGame;
    }

    public function infoGame() {
        parent::infoGame();
        echo "----------------- \n";
        echo "game ini: $this->namaGame \nRilis game: $this->rilisGame \ngenre game: $this->genreGame \nApakah game ini banyak di wishlisted: $this->mostWishlistedGame \n";
    }
}

$games = [
    new Game("Silksong", 2025, "Platformer"),
    new PublisherGame("Need For Speed Heat", 2013, "Racing", "Electronics Art", "Electronics Art"),
    new WishList("Silksong", 2025, "Platformer", true)
];

foreach ($games as $game) {
    $game->infoGame();
}

?>