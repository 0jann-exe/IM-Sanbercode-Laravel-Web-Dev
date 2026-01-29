<?php
require_once("Hewan.php");

class Ape extends Hewan
{
    public $legs = 2;
    public function yell() {
        echo "Auooo <br>";
    }
}
?>