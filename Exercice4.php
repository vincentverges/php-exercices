<?php 


function direbonjour(){
    echo 'Bonjour à tous';
}
direbonjour();



function direbonjoura($nom){
    $nom = 'lucas';
    echo "Bonjour à $nom ";
}
direbonjoura($nom); 



function addition($a, $b) {
    $total = $a + $b;
    echo "La somme du calcul est : $total";
}
addition(10, 20);



function multiplier($x, $y) {
    $produit = $x * $y;
    return $produit;
}

$resultat = multiplier(10, 3);

echo "Le produit est : " . $resultat;
?>