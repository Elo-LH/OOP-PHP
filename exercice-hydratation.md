# Exercice classes et BDD

## Étape 0 : Préparer la connexion

Dans un fichier `connexion.php`.

Faites en sorte de créer et faire marcher une classe PDO pour vous connecter à votre base de données (les informations de connexion sont dans le cadre rouge sur la page d'accueil de votre PhpMyAdmin).

Dans votre PhpMyAdmin, créez un nouvelle base `prenomnom_pooj1` et importez le fichiers `users.sql` dedans.


## Étape 1 : préparer la classe

Nous allons créer une classe `User` (dans un fichier `User.php`) qui correspondra à la structure de la table `users` dans notre base de données.

Notre classe aura donc 4 attributs privés :

- `id` qui est un int et peut être null
- `firstName` qui est une string
- `lastName` qui est une string
- `email` qui est une string

L'attribut id sera null par défaut.

Notre constructeur prendra `firstName`, `lastName` et `email` en paramètres.

La class `User` aura des getters et setters pour chacun des attributs.


## Étape 2 : Hydrater depuis un tableau associatif

Dans un fichier `index.php`, faites un `require` de votre classe `User`.

```php
$superman = [
	"first_name" => "Clark",
	"last_name" => "Kent",
	"email" => "clark.kent@test.fr"
];
```

Puis utilisez le tableau associatif `$superman` pour remplir une instance de la classe `User`.


## Étape 3 : Hydrater une instance depuis la BDD

Faites un `require` de votre fichier `connexion.php` en haut de votre fichier `index.php`.

Dans votre fichier `index.php` :

Exécutez une requête SQL qui vous retourne le premier `user` stocké dans la base de données.

Utilisez le retour de la requête pour remplir une instance de la classe `User`.


## Étape 4 : Hydrater un tableau d'instances depuis la BDD

Dans votre fichier `index.php` :

Utilisez PDO pour exécuter une requête SQL qui vous retourne tous les `users` stockés dans la base de données.

Utilisez le retour de la requête pour remplir un tableau d'instances de la classe `User`, une ligne de votre table doit correspondre à une instance de la classe `User`.


## Étape 5 : Sauvegarder dans la BDD

Instanciez une nouvelle instance de la classe `User` avec les informations suivantes :

- `firstName` : Clark
- `lastName` : Kent
- `email` : clark.kent@test.fr

Utilisez PDO pour créer une requête SQL qui va ajouter un nouveau `user` dans la base de données à partir de votre instance de classe.

Utilisez la méthode lastInsertId de PDO (https://www.php.net/manual/en/pdo.lastinsertid.php ) pour récupérer l'id de votre nouveau user et mettre à jour votre instance de classe.