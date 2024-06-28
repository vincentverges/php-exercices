<?php
////////////////////////////
function direBonjour() {
    echo "Bonjour à tous!";
}

direBonjour();

////////////////////////////
function direBonjourA($nom) {
    echo "Bonjour $nom!";
}

direBonjourA("Antoine");

////////////////////////////
function sum($a, $b) {
    return $a + $b;
}

echo sum(7,3);

////////////////////////////
function multiplier($y, $z) {
    return $y * $z;
}

$result = multiplier(5, 3);

echo $result;
////////////////////////////
?>