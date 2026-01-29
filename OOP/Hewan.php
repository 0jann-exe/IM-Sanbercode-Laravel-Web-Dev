<?php

class Hewan 
{
    public $name;
    public $legs = 4;
    public $cold_bloded = "no";

    public function __construct($hewan) {
        $this->name = $hewan;
    }
}

?>