<?php
require_once ('animal.php');
require_once ('frog.php');
require_once ('ape.php');

$sheep = new Animal("shaun");
$kodok = new Frog("buduk");
$sungokong = new Ape("kera sakti");

// echo $sheep->name; // "shaun"
// echo $sheep->legs; // 4
// echo $sheep->cold_blooded; // "no"
echo "Name: {$sheep->get_name()} <br>";
echo "Legs: {$sheep->get_legs()} <br>";
echo "Cold blooded: {$sheep->get_cold_blooded()} <br><br>";

// $kodok->jump() ; // "hop hop"
echo "Name: {$kodok->get_name()} <br>";
echo "Legs: {$kodok->get_legs()} <br>";
echo "Cold blooded: {$kodok->get_cold_blooded()} <br>";
echo "Jump: {$kodok->jump()} <br><br>";

// $sungokong->yell() // "Auooo
echo "Name: {$sungokong->get_name()} <br>";
echo "Legs: {$sungokong->get_legs()} <br>";
echo "Cold blooded: {$sungokong->get_cold_blooded()} <br>";
echo "Yell: {$sungokong->yell()}";
?>