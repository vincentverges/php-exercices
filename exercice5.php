<?php
while($i<=10){
    echo $i;
    $i++;
}




while($i<=10){
    $i++;
    $addition=1;
    $addition=$addition+$i;
    echo $addition;

}


echo "<br>";
for($i=1;$i<=10;$i++){
    echo $i;
}

echo "<br>";
for($i=1;$i<=50;$i++){
    if ($i %5==0)
    echo " " . $i;
}
echo"<br>";
$fruits = array("Pomme", "Banane", "Orange", "Mangue");
foreach($fruits as $fruits)
echo " ". $fruits;


echo"<br>";

    $i = 0;

    do {
      $i++;
      if ($i == 3) continue;
      echo $i;
    } while ($i < 10);

?>