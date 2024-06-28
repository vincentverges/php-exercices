<?php
////////////////////////////
$count = 0;

while ($count <= 10) {
    echo $count;
    $count++;
}
//////////////////////////
$i = 1;
while ($i <= 10) {
    $count+=$i;
    $i++;
}
echo $count;
//////////////////////////
for ($i = 0; $i <= 10; $i++) {
    echo $i;
}
//////////////////////////
for ($i = 0; $i <= 10; $i++) {
    $count+= $i;
}
echo $count;
//////////////////////////
$fruits = ["Pomme", "Banane", "Orange", "Mangue"];

foreach ($fruits as $fruit) {
    echo $fruit;
}
//////////////////////////
do{
    echo $count;
    $count++;
} while ($count<=10);
// //////////////////////////




?>