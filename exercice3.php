<?php
#############" 1 ####################
$fruit = array("Pomme","Banane","Orange");

# echo $fruit[1];

############## 2 #######################
$fruit[3]="Mangue";

foreach($fruit as $i){
    echo $i;
}

// ############ 3 #################
$personne = array(
    'nom' => 'Raph',
    'prenom' => 'Petrozzi',
    'âge' => '99',
);
# echo $personne;
var_dump($personne);
?>