Exercice 2
Créer un fichier PHP :

Créez un nouveau fichier nommé exercice2.php. Utiliser une condition simple :

Utilisez une structure conditionnelle if pour vérifier si une variable $age est supérieure ou égale à 18. Si c'est le cas, affichez "Vous êtes majeur." avec echo. Sinon, affichez "Vous êtes mineur.". Utiliser une condition avec else if :

Ajoutez une condition pour vérifier si une variable $heure est inférieure à 12. Si c'est le cas, affichez "Bonjour!". Sinon, si $heure est inférieure à 18, affichez "Bon après-midi!". Sinon, affichez "Bonsoir!". Utiliser une condition avec des opérateurs logiques :

Créez deux variables $utilisateur et $motDePasse contenant des chaînes de caractères.

Utilisez une structure conditionnelle pour vérifier si $utilisateur est égal à "admin" et si $motDePasse est égal à "1234".

Si les deux conditions sont vraies, affichez "Connexion réussie!". Sinon, affichez "Nom d'utilisateur ou mot de passe incorrect.".

-------------------------------------------


réponse=

<?php
$age = 80;
if ($age >= 18){
    echo 'Vous êtes majeur'
}
else ($age < 18){
    echo 'vous etes mineur'
}
----------------
$heure = 24;

if ($heure <= 12){
   echo 'Bonjour' 
}
elseif ($heure < 18 ){
    echo 'Bon apré-midi'
}
else {
    echo 'Bonne soirée'
}

---------------

if ($utilisateur === "admin" && $motDePasse === "1234") {
    echo "Connexion réussie!<br>";
} else {
    echo "Nom d'utilisateur ou mot de passe incorrect.<br>";
    
    
