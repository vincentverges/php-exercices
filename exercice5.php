<?php 
// 1 -> 10
$i = 1;

while($i <= 10){
    echo $i++;
}
echo "\n";

// somme 1 -> 10
$somme = 0;
$i = 1;
while($i <= 10){
    $somme += $i;
    $i ++;
    
}
echo $somme;
  



echo "\n";

// 1 -> 10
for($i = 1 ; $i <= 10; $i++){
    echo $i;
}
echo "\n";

// table de multiplication de 5 
for($i = 1 ; $i  <=10; $i++){
    echo "\n".$i * 5;
}

//for($i = 0 ; $i  <=50; $i += 5){
    //echo "\n".$i ;
//}
echo "\n";
// afficher les element dun tableau

$fruits= ["Pomme", "Banane", "Orange", "Mangue"];

foreach ($fruits as $fruit){
    echo "\n".$fruit;
}git add .

echo "\n";
echo "\n";

// Boucle do...while : 1 -> 10
$a = 1;

do {
    echo $a ++;
} while ($a < 11);

?>