<?php
#################""" 1 ###########################
function direBonjour(){
    echo "Bonjour à tous!";
}

direBonjour();

########################### 2 ##############################
echo "Bonjour $nom";
function direBonjour2($nom){
    $nom = 'Raph';

}

direBonjour2($nom);

######################### 3 ###################################
function addition($a, $b){
    return $a+$b;
}

addition(10, 20);

######################## 4 ############################################
function multiplier($x, $y){
    return $x*$y;
}

$result = multiplier(10,20);
echo $result;
?>