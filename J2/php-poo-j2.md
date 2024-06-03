---
theme: theme.json
author: Gaellan
date: June 3rd, 2024
paging: Page %d sur %d
---

# La Programmation Orientée Objet en PHP

## L'héritage

## Exercice héritage

## L'abstraction

## Mini-projet Blog


---

# L'héritage

L'héritage est un principe de POO qui permet entre autre de factoriser le code en créant des classes qui partagent des attributs et des méthodes.

## Exemple sans héritage

Imaginons que nous avons deux types d'utilisateurs : les `Reader`et les `Author`. Ces deux types d'utilisateurs ont un email, un mot de passe et peuvent se connecter. Le `Reader` peut mettre des livres en favori, l'`Author` peut publier des livres.

Sans héritage nous allons devoir définir nos deux classes comme suit :

```php
class Reader 
{
    private string $email;
    private string $password;
    private array $favoriteBooks;

    public function __construct(){}
    public function login() : void {}
    public function addBookToFavorites(Book $book): void {}
    public function removeBookFromFavorites(Book $book): void {}  
}
```

```php
class Author 
{
    private string $email;
    private string $password;
    private array $publishedBooks;

    public function __construct(){}
    public function login() : void {}
    public function publishBook(Book $book) : void {}  
}
```

Et nous avons donc pas mal de code dupliqué entre nos deux classes.

---

# Exemple avec héritage

```php
class User 
{
    protected string $email;
    protected string $password;

    public function __construct(){}
    public function login() : void {}
}
```

```php
class Reader extends User
{
    private array $favoriteBooks;

    public function __construct(){}
    public function addBookToFavorites(Book $book): void {}
    public function removeBookFromFavorites(Book $book): void {}  
}
```

```php
class Author extends User
{
    private array $publishedBooks;

    public function __construct(){}
    public function publishBook(Book $book) : void {}  
}
```

Ici, `User` est la classe mère et contient le code commun. `Reader` et `Author` sont des classes filles qui héritent de `User`. En héritant de `User`, elle vont avoir les attributs et méthodes de `User` sans avoir besoin de les redéclarer.

Si vous instanciez un `User`, il pourra se connecter.

Si vous instanciez un `Reader`, il pourra se connecter et gérer ses livres favoris.

Si vous instanciez un `Author`, il pourra se connecter et publier des livres.

---

# Héritage et substitution

Si une classe hérite d'une autre classe, on dit qu'elle peut s'y substituer. En pratique cela signifie qui si une fonction prend un `User` en paramètre et que vous lui passer un `Author` ou un `Reader` cela fonctionnera.

```php
function checkLogin(User $user) : bool 
{
    return true;
}

$author = new Author();
$reader = new Reader();
$user = new User();

checkLogin($author); // fonctionne
checkLogin($reader); // fonctionne
checkLogin($user); // fonctionne

```

L'inverse est par contre faux. Si un `Author` est une forme de `User`, un `User` n'est pas une forme d'`Author`, il lui manque un attribut et une méthode.

```php
function findFavoritesFromAuthor(Reader $reader, Author $author) : array
{
    return [];
}

$author = new Author();
$reader = new Reader();
$user = new User();

findFavoritesFromAuthor($reader, $author); // fonctionne
findFavoritesFromAuthor($user, $user); // ne fonctionne pas
findFavoritesFromAuthor($author, $reader); // ne fonctionne pas
```

---

# Le mot clé protected

Nous allons voir le troisième et dernier modificateur de visibilité : `protected`.

Ce mot clé signifie `private` sauf pour les classes filles.

Si un attribut ou une méthode est protected, il est `private` pour tous les action en dehors de la classe SAUF si ces actions sont réalisées dans une classe fille.

## Le constructeur de la classe mère

Si pour une raison quelconque vous avez besoin de faire un comportement spécifique pour le constructeur d'une classe mère vous pouvez utiliser cette syntaxe : 

```php
class Author extends User
{
    private array $publishedBooks;

    public function __construct(){
        parent::__construct(); // appelle le constructeur de la classe mère
    }

    public function publishBook(Book $book) : void {}  
}
```

---

# Exercice héritage

Dans le fichier `exercices-heritage.md` sur Discord.

---

# L'abstraction

L'abstraction va de pair avec l'héritage. Une classe abstraite c'est une classe qu'on ne peut pas instancier. Elle sont très utiles pour transmettre par héritage des attributs ou méthodes à leurs classes filles sans pour autant pouvoir exister seules.

Pour déclarer une classe abstraite, il suffit d'utiliser le mot-clé `abstract` :

```php
abstract class AbtractManager
{
    protected PDO $db;

    public function __construct()
    {
        // initialiser la base de données
    }
}
```

```php
class CategoryManager extends AbtractManager
{
    private array $categories = [];

    public function __construct()
    {
        parent::__construct();
    }
    // ...
}
```

```php
class PostManager extends AbtractManager
{
    private array $posts = [];

    public function __construct()
    {
        parent::__construct();
    }
    // ...
}
```

---

# Mini Projet Blog

Vous trouverez tous les fichiers du projet sur Discord.






