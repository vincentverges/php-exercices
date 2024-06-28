<?php

while ($x <=10){
    echo '$x contient la valeur ' .$x. '<br>';
    $x++;
}

for ($x =0; $x <=10;$x++){
    echo '$x contient la valeur ' .$x. '<br>';
}

echo "Boucle multiplie <br>";

for ($z=0; $z<=10;$z++){
    echo '$z contient la valeur ' .($z*5). '<br>';
}

$fruit = array("Pomme", "Banane", "Orange","Mangue");
foreach($fruit as $var => $valeur){
    echo $valeur. '<br>';
}
do{
    echo $y. '<br>';
    $y++;
}while ($y<=10);

?>
