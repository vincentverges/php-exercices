<?php



function direBonjour() {  //0 parametres
    echo "Bonjour à tous!<br>";
}

direBonjour();

//========================================


function direBonjourA($nom) {  // 1 parametres

    echo "Bonjour, $nom!<br>";
}

direBonjourA("Alice");
direBonjourA("Bob");
direBonjourA("Claire");


//=================================================

function addition($a, $b) { // 2 parametres calcul
	return $a + $b;
}

$totalAdd = addition(3, 4);
echo "Le résultat est : $totalAdd<br>";

$totalAdd = addition(10, 5);
echo "Le résultat est : $totalAdd<br>";

git
//========================================

function multiplier($x, $y) {  // 2 parametres + returncalcul
	return $x * $y;
}

$resultat_multiplication = multiplier(6, 7);
echo "Le résultat est : $resultat_multiplication<br>";
?>