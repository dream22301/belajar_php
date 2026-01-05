<?php
interface ZombieGame {
    public function isItAZombieGame();
}

interface HorrorGame {
    public function isItAHorrorZombieGame($HorrorGame);
}

class Game implements ZombieGame, HorrorGame {
    public function isItAZombieGame() {
        echo "This is Game \n";
    }

    public function isItAHorrorZombieGame($HorrorGame) {
        echo "This is not $HorrorGame \n";
    }
}

$myGame = new Game("Need For Speed");
$myGame->isItAZombieGame();
$myGame->isItAHorrorZombieGame("NO");
?>