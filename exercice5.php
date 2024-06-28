<?php

$i =1;
while ( $i <=10 ) {
    echo $i;
    $i++;
};

$j=1;
$k=0;
function addition() {
    while ($j <= 10) {
    $k = $k +$j  ;
    echo $k, "\n";
    $j++;
}
};
addition();

for ($j = 1; $j < 11; $j++) {
    echo $j;
    };

for ($i = 1; $i <= 50;  $i++) {
    $i = $i*5;
    echo $i;
};

$fruits = ["Pomme ", "Banane ", "Orange ", "Mangue "];
foreach ( $fruits as $fruit ) {
    echo $fruit;
};

do

?>