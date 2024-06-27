<?php
function direBonjour(){
    echo 'Bonjour à tous!' . '<br/>';
}
?>


<?php
function direBonjourA ($nom){
    echo 'Bonjour'. $nom . '<br />'
}

direBonjour('Alejandro');
direBonjour('Pedro');
direBonjour('Tristan');
direBonjour('eric');
?>

<?php
function addition ($a,$b){
    $somme = $a + $b;
    echo 'la somme est :' .$somme;
}
addition(2+1);
addition(3+5);
addition(6+3);
?>

<?php
function multiplier ($x,$y){
    $resultat = $x * $y;
    echo 'le resultat est :' . $resultat;
}
multiplier(2 * 4);
multiplier(5 * 6);
multiplier(10 * 20);
?>


