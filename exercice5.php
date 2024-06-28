<?php

while ($x <=10){
    echo '$x contient la valeur ' .$x. '<br>';
    $x++;
}
$x=1;
$somme=0;
while ($x <=10){
    $somme = $somme + $x;
    echo '$x contient la valeur ' .($somme). '<br>';
    $x++;
}
for ($x=0; $x<=10; $x++)
{
    echo $x;
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
