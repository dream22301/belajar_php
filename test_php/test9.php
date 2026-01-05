<?php
trait Fuel {
    public function refuel($fuel) {
        echo "[Refuel]: Vehicle Refuelled with $fuel \n";
    }
}

class Car {
    use Fuel;

    protected $namaMobil;
    protected $jenisMobil;

    public function __construct($namaMobil, $jenisMobil) {
        $this->namaMobil = $namaMobil;
        $this->jenisMobil = $jenisMobil;
    }

    public function mobile() {
        echo "Nama Mobil: $this->namaMobil\nJenis Mobil: ($this->jenisMobil)\n";
    }
}

class Motorcycle {
    use Fuel;

    protected $namaMotor;
    protected $jenisMotor;

    public function __construct($namaMotor, $jenisMotor) {
        $this->namaMotor = $namaMotor;
        $this->jenisMotor = $jenisMotor;
    }

    public function motore() {
        echo "Nama Motor: $this->namaMotor\nJenis Motor: ($this->jenisMotor)\n";
    }
}

$c1 = new Car("Bmw M3 Gtr", "Sports Car");
$c1->mobile();
$c1->refuel("Ron 92");
echo "\n";

$m1 = new Motorcycle("Supra", "Motor Bebek");
$m1->motore();
$m1->refuel("Ron 92");

?>