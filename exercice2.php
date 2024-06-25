<?php 
/*$age = readline("Entrer votre age: "); 
if($age>=18){
echo "Vous êtes majeur";
}else{
    echo "Vous êtes mineur.";
} */

/*$heure = readline("Entrer une heure: "); 
if($heure < 12){
    echo "Bonjour!";
}else if($heure < 18){
    echo"Bon après-midi!";
}
else{
    echo"Bonsoir!";
}*/

$utilisateur = readline("Entrer votre nom d'utilisateur: ");
$motDePasse = readline("Entrer votre mot de passe : ");

if($utilisateur === 'admin' && $motDePasse === '1234'){
    echo "Connexion réussie!";
}else{
    echo "Nom d'utilisateur ou mot de passe incorrect.";
}
?>