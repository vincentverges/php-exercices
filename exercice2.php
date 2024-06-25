<?php 
$age=62;

$heure=13;

$utilisateur='Jean';
$motDePasse='abc123';

################# 1 ###########################
if($age>=18){
    echo "Vous êtes majeur.";
}elseif($age<18){
    echo "Vous êtes mineur.";
}
########################## 2 ######################
if($heure<12){
    echo "Bonjour";
}elseif($heure<18 && $heure>12){
    echo "Bon apres midi";
}else{
    echo "Bonsoir";
}
################## 3 ##########################################
if($utilisateur=='admin' && $motDePasse=='1234'){
   echo "Connexion réussie!"; 
}else{
    echo "Nom d'utilisateur ou mot de passe incorrect.";
}
?>