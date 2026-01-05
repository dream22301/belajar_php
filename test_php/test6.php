<?php
abstract class Ikan {
    protected $ikan;

    public function __construct($ikan) {
        $this->ikan = $ikan;
    }

    abstract public function notFish();

    public function info() {
        echo "ini adalah $this->ikan \nx";
    }
}

class Mujaer extends Ikan {
    public function notFish() {
        echo "$this->ikan it's not fish :( \n";
    }
}

class Catfish extends ikan {
    public function notFish() {
        echo "$this->ikan is real fish :) \n";
    }
}

$animals = [
    new Mujaer("Mujaer"),
    new Catfish("Catfish")
];

foreach ($animals as $animal) {
    $animal->info();
    $animal->notFish();
}

?>