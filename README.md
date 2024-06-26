# Exercices PHP

Chaque jours, vous aurez de nouveaux exercices d'entrainement lors du module PHP de Base. Ceux-ci ont pour but de vous entrainer et vous faire découvrir les notions de base de PHP.

Pour ce faire, pensez à **Cloner** le projet pour pouvoir le mettre à jour.

Créer un branche à votre nom et pour pouvoir mettre à jour vos exercices.

## Exercice 1

- Créez un fichier **exercice1.php**
- Ajouter des commentaires en utilisant les différentes possibilités de les intégrer
- Affichez un texte **"Hello World"**
- Créez une variable **$nom** avec une valeur String et integrez le à un texte.
- En commentaire donnez la différence entre **variable** et **constante**

N'oubliez pas pour lancer votre mini-programme, utiliser la commande de server 

```
php -S localhost:8080
````

**Nous ferons la correction ensemble.**

## Exercice 2

Créer un fichier PHP :

- Créez un nouveau fichier nommé exercice2.php.
Utiliser une condition simple :

- Utilisez une structure conditionnelle if pour vérifier si une variable $age est supérieure ou égale à 18.
Si c'est le cas, affichez "Vous êtes majeur." avec echo.
Sinon, affichez "Vous êtes mineur.".
Utiliser une condition avec else if :

- Ajoutez une condition pour vérifier si une variable $heure est inférieure à 12.
Si c'est le cas, affichez "Bonjour!".
Sinon, si $heure est inférieure à 18, affichez "Bon après-midi!".
Sinon, affichez "Bonsoir!".
Utiliser une condition avec des opérateurs logiques :

- Créez deux variables $utilisateur et $motDePasse contenant des chaînes de caractères.

- Utilisez une structure conditionnelle pour vérifier si $utilisateur est égal à "admin" et si $motDePasse est égal à "1234".
- Si les deux conditions sont vraies, affichez "Connexion réussie!".
Sinon, affichez "Nom d'utilisateur ou mot de passe incorrect.".

## Exercice 3 

Objectif : Apprendre à créer, manipuler et afficher des tableaux en PHP.

Instructions

-Créez un nouveau fichier nommé exercice3.php.

Créer un tableau indexé :

- Créez un tableau nommé $fruits contenant les éléments suivants : "Pomme", "Banane", "Orange".
- Affichez le deuxième élément du tableau (Banane) en utilisant echo.


Ajouter des éléments à un tableau indexé :

- Ajoutez un élément "Mangue" au tableau $fruits.
- Affichez tous les éléments du tableau à l'aide d'une boucle foreach.


Créer un tableau associatif :

- Créez un tableau associatif nommé $personne avec les clés "nom", "prénom", et "âge", et des valeurs de votre choix.
- Affichez les valeurs du tableau associatif en utilisant echo.

Modifier et afficher des éléments du tableau associatif :

- Modifiez la valeur de la clé "âge" dans le tableau $personne.
- Affichez toutes les clés et valeurs du tableau associatif en utilisant une boucle foreach.