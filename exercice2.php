<?php

function age($age){
if($age>=18){
echo"Vous etes Majeur";
}
else{
    echo"Vous etes mineur";

}
}

function Heure($heure){
if($heure<12){
echo"bonjour";
}
elseif($heure<18){
echo"Bon après-midi";
}
else{
    echo"Bonsoir";
}
}


function Connection(){
$utilisateur= "admin";
$motDePasse="1234";

if($utilisateur='admin'){

}
elseif($motDePasse='1234'){

}

}

age("19");
Heure("11");


?>