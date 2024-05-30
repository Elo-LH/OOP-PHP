# Exercices sur les classes et l'encapsulation

💡Pour utiliser une classe dans un fichier, il faut `require` le fichier de cette classe.

## Exercice 1 : déclarer, instancier et utiliser une classe

Vous allez créer deux fichiers :

- `User.php`
- `index.php`

Dans le fichier `User.php` vous allez définir une classe `User`. Votre classe a 3 attributs :

- id qui est un int
- username qui est une string
- password qui est une string

Cette classe doit avoir un constructeur ainsi que des getters et setters pour chacun des attributs.

Le constructeur doit recevoir les attributs dans ses arguments.

Dans le fichier `index.php` vous allez instancier deux instances de la classe `User`.

L'un avec l'id 1, le username `admin` et le password `admin`.
La seconde avec l'id 2, le username `user` et le password `user`.

Vous allez ensuite utiliser ces instances pour faire un echo de leur id, leur username et leur password à chacune.


## Exercice 2 : attributs par défaut et méthodes

Vous allez créer deux fichiers :

- `Character.php`
- `index.php`

Dans le fichier `Character.php` vous allez définir une classe `Character`. Votre classe a 3 attributs :

- id qui est un int
- firstName qui est une string, par défaut il a la valeur "Jane"
- lastName qui est une string, par défaut il a la valeur "Doe"

Cette classe doit avoir un constructeur ainsi que des getters et setters pour chacun des attributs.

Le constructeur doit recevoir l'id et uniquement l'id dans ses arguments.

Votre classe doit en plus avoir une méthode publique `getFullName` qui renvoit une string contenant le `firstName` et le `lastName`, séparés par un espace.

Dans le fichier `index.php`, vous allez instancier une instance de la classe `Character` avec l'id 1.

Vous allez ensuite utiliser cette instance pour faire un echo de son nom complet.

Puis vous allez utiliser ses setters pour qu'elle prenne le prénom "Sarah" et le nom de famille "Connor".

Refaites ensuite un echo de son nom complet.
