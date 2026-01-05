<?php
namespace Butuh;

class orang {
    
    public $namaOrang;
    public $umurOrang;

    public function __construct($namaOrang, $umurOrang) {
        $this->namaOrang = $namaOrang;
        $this->umurOrang = $umurOrang;
    }

    public function infoOrang() {
        echo "Info Orang:\nNama orang: $this->namaOrang\nUmur Orang: $this->umurOrang\n";
    }

}
?>