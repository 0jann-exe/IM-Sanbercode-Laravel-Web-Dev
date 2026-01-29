<?php

require_once("Hewan.php");
require_once("Frog.php");
require_once("Ape.php");

$Gajah = new Hewan('gajah');

echo "Nama hewan : ". $Gajah->name . "<br>";
echo "Jumlah kaki : ". $Gajah->legs . "<br>";
echo "Berdarah dingin : ". $Gajah->cold_bloded . "<br>";
echo "<br><br>";

$monyet = new Ape('monyet');
echo "Nama hewan : ".$monyet->name . "<br>";
echo "Jumlah kaki : ". $monyet->legs . "<br>";
echo "Berdarah dingin : ". $monyet->cold_bloded . "<br>";
echo "Yell : ";
$monyet->yell();
echo "<br><br>";

$kodokboy = new Frog('kodok');
echo "Nama hewan : ".$kodokboy->name . "<br>";
echo "Jumlah kaki : ". $kodokboy->legs . "<br>";
echo "Berdarah dingin : ". $kodokboy->cold_bloded . "<br>";
echo "Lompatt : ";
$kodokboy->lompatdok();

?>