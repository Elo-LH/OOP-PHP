---
theme: theme.json
author: Gaellan
date: May, 30th, 2024
paging: Page %d sur %d
---

# La Programmation Orientée Objet en PHP

## C'est quoi la POO

## Le concept d'objet

## Les classes

## Instance et classe

## L'encapsulation

## Analyse d'une classe

## Exercices classes et encapsulation

## La composition

## Exercices compositions

## Les classes et la BDD

## Exercices hydratation

---

# C'est quoi la POO ?

La programmation Orientée Objet (Object Oriented Programming en anglais) c'est une philosophie d'organisation du code. On appelle ça un paradigme.

## À quoi ça sert ?

À produire du code de qualité, partageable et réutilisable.

## Il y en a dans tous les langages ?

Presque 😁. La POO comporte de nombreux concepts et tous ne sont pas implémentés dans tous les langages. Parmi les langages qui en ont l' implémentation la plus complète on trouve le C++ et le Java.

Une implémentation plus ou moins complète (selon ce que permet la nature du langage en question) est présente dans la plupart des langages web, PHP et JavaScript en tête.

## C'est quoi le principe

Le principe de la POO c'est que chaque morceau de code a un rôle précis à remplir. Et plutôt que de l'éparpiller dans plein de fonctions on regrouper ce qui va ensemble dans des objets appellés classes.

---

# Le concept d'objet

En POO le concept d'objet est le suivant :

- Un objet a des propriétés
- Un objet a des comportements

Par exemple :

Un chat a des _propriétés_ :

- un nom
- un age
- des couleurs de pelage
- ...

Un chat a des _comportements_ :

- il peut miauler
- il peut griffer
- il peut manger
- ...

En POO on aura donc un modèle de chat (la classe Chat) qui a des _propriétés_, qu'on appelle des **attributs**, et des _comportements_ qu'on appelle des **méthodes**.

---

# Le code de notre potentielle classe Chat

Notre classe Chat ressemblerait à ça :

```php

class Chat {
    public string $name;
    public int $age;
    public array $colors;

    public function miauler() : string
    {
        return "Miaou";
    }

    public function griffer() : void 
    {

    }

    public function manger(string $nourriture) : void 
    {

    }
}

```

Il y a un mot clé que vous ne connaissez pas : `public`, il sera expliqué plus loin dans le cours. Le suspense est entier 😬

---

# Les classes

Une classe c'est ce qui défini la recette d'un objet en PHP. En gros cela nous dit : voilà comment ça s'appelle, voilà ce qu'il y a dedans, voilà ce que ça fait.

Prenons une classe toute simple : 

```php
class User {
    public string $name;

    public function sePresenter() : string
    {
        return "je m'appelle {$this->name}";
    }
}
```

Notre User a un nom et peut se présenter.


## this

Le mot clé `$this` est spécifique à la POO. Lorsque vous êtes à l'intérieur d'une classe (donc dans son fichier), il sert à appeler un _attribut_ ou une _méthode_ de la classe définie dans ce fichier. 

Dans l'exemple de la classe `User` ci dessus, il appelle l'attribut `name`. Il ne peut pas être utilisé en dehors du fichier de définition d'une classe.


---

# Le constructeur

Dans notre classe User : nous avons défini notre classe, nous savons qu'un User a un nom, et qu'il peut se présenter.

Il nous faut un moyen de "remplir" ce nom. Il y a deux façons de le faire :

- fournir une méthode permettant de modifier le nom, appellée un _setter_
- permettre de lui donner un nom dès qu'on la créée, avec un _constructeur_

```php
class User {

    public function __construct(public string $name)
    {

    }

    //...
}
```

Lorsque l'on va instancier la classe (nous verrons au prochain slide ce que cela signifie), nous allons lui passer un argument avec la valeur du name, qui sera automatiquement stockée dans l'attribut de la classe.

💡 Avant PHP 8, nous devions écrire cette assignation `$this->name = $name` dans le corps du constructeur (entre les accolades) mais maintenant le langage le fait pour nous si on lui précise un modificateur de visibilité (`public`, `private` ou `protected`).

---

# Instance et classe

Dans votre fichier `User.php` vous avez défini la classe `User` c'est une recette qui définit ce qu'est un User, ce qu'il contient et ce qu'il peut faire. Mais les gourmand-e-s le savent : ça n'est pas parce qu'on a la recette qu'on a un gâteau 🧁.

Dans cette métaphore, la classe est la recette et le gâteau va s'appeller une _instance de classe_.

```php
class User {

    public function __construct(public string $name)
    {

    }

    public function sePresenter() : string
    {
        return "je m'appelle {$this->name}";
    }
}
```

Pour créer une variable qui soit une instance de la classe `User` on dit qu'on va instancier un `User`. La syntaxe est la suivante :

```php
$user = new User("Mari");
echo $user->sePresenter(); // je m'appelle Mari
```

Écrire `new User("Mari")` cela demande à appeler le constructeur de la classe `User` en lui passant le paramètre `"Mari"` qui ira donc remplir son attribut `name`. Je peux ensuite appeler ses méthodes en utilisant `->`.

---

# L'encapsulation

Un peu plus tôt dans le cours j'ai fait miroiter de vous expliquer à quoi correspondait le mot clé `public` : le moment est venu.

Un autre principe fondamental de la POO c'est l'encapsulation. Chacun a un rôle et gêre ses petites affaires. Pour éviter les erreurs et le fouillis, on règlement l'accès aux méthodes et aux attributs de la classe.

Pour règlementer ces accès on utilise deux mots clés : `public` et `private`. Il en existe un troisième, `protected` que nous verrons au moment d'aborder l'héritage.

## public

Si un attribut ou une méthode est `public` on peut y accéder depuis l'exterieur de la classe (l'extérieur de son fichier). C'est ce qui
permet de faire `$user->sePresenter()` avec le `User`. La méthode `sePresenter` est `public`.

## private

Si un attribut ou une méthode est `private`, on ne peut y accéder que depuis l'intérieur de la classe (dans son fichier donc). C'est ce qui permet d'éviter les erreurs et les effets de bord et de controler ce qui se passe dans la classe.

## Bonnes pratiques

Pour les attributs c'est assez simples : ils sont toujours `private`. Dans mes exemples précédents ils étaient `public` pour pouvoir fonctionner directement si vous copiez collez le code.

Pour les méthodes, cela dépend, mais en règle générale elle sont `public` sauf si vous n'avez jamais besoin de les appeler depuis l'extérieur de la classe.

---

# Encapsulation : les getters et setters

Mais si tous mes attributs sont `private`, ils me servent à quoi si je ne peux jamais y accéder ?

En fait il va falloir créer des méthodes, spécifiquement pour pouvoir les lire et les modifiers. 

Les méthodes de lecteurs sont appellées des `getters` et les méthodes de modification des `setters`. Les getters et les setters sont `public`.

```php
class User {
    private string $name;

    public function __construct(private string $name)
    {

    }

    /* Le getter de l'attribut name */
    public function getName() : string 
    {
        return $this->name;
    }

    /* Le setter de l'attribut name */
    public function setName(string $name) : void
    {
        $this->name = $name;
    }
}
```

Un getter aura le nom `getMonAttribut` et un setter le nom `setMonAttribut`.

---

# Analyse d'une classe

Essayez de me décrire la classe suivante :

```php
class Personnage
{
    public function __construct(private string $nom, private int $vie)
    {

    }

    public function getNom() : string 
    {
        return $this->nom;
    }

    public function setNom(string $nom) : void 
    {
        $this->nom = $nom;
    }

    public function getVie() : int 
    {
        return $this->vie;
    }

    public function setVie(int $vie) : void 
    {
        $this->vie = $vie;
    }
}
```

---

# Précisions sur les attributs

Dans une classe, les attributs peuvent avoir une valeur par défaut :

```php
class User {
    private string $name = "John Doe";

    public function __construct()
    {

    }

    /* Le getter de l'attribut name */
    public function getName() : string 
    {
        return $this->name;
    }

    /* Le setter de l'attribut name */
    public function setName(string $name) : void
    {
        $this->name = $name;
    }
}
```

---

# Précisions sur les attributs

et peuvent être `null` :

```php
class User {
    private ? int $id = null;
    private string $name = "John Doe";

    public function __construct()
    {

    }

    /* Le getter de l'attribut name */
    public function getName() : string 
    {
        return $this->name;
    }

    /* Le setter de l'attribut name */
    public function setName(string $name) : void
    {
        $this->name = $name;
    }
}
```

---

# Exercices classes et encapsulation

Dans le fichier `exercices-classes.md` sur Discord.

---

# La composition

Le principe de la composition est assez simple : une classe peut en contenir une autre.

En effet, l'attribut d'une classe peut être une autre classe.

## Exemple : User et Address

```php
class Address
{
    public function __construct(private string $number, private string $street)
    {
    }

    public function getNumber() : string 
    {
        return $this->number;
    }

    public function setNumber(string $number) : void 
    {
        $this->number = $number;
    }

    public function getStreet() : string 
    {
        return $this->street;
    }

    public function setStreet(string $street) : void 
    {
        $this->street = $street;
    }
}
```

---

# La composition : suite de l'exemple

```php

require "Address.class.php";

class User
{
    private Address $address;

    public function __construct(private string $username)
    {
        $this->address = new Address("", "");
    }

    public function getUsername() : string 
    {
        return $this->username;
    }

    public function setUsername(string $username) : void
    {
        $this->username = $username;
    }

    public function getAddress() : Address
    {
        return $this->address;
    }

    public function setAddress(Address $address) : void 
    {
        $this->address = $address;
    }
}

```

---

# La composition : suite de l'exemple


```php
$user = new User("Mari");

// si je veux modifier les infos de l'adresse

$user->getAddress()->setNumber("43");
$user->getAddress()->setStreet("rue Ernest Renan");

// si je veux les lire

echo "{$user->getAddress()->getNumber()} {$user->getAddress()->getStreet()}";

// si je veux complètement changer l'adresse
$address = new Address("23", "boulevard Alexis Carrel");
$user->setAddress($address);
```

---

# Exercice composition

Dans le fichier `exercice-composition.md` sur Discord.

---

# Les classes et la BDD

Lorsque nous faisons du PHP pour le Web, une des choses principales que nous avons à faire c'est de manipuler notre base de données pour y lire et écrire des informations.

Avant nous faisions ça un peu directement en récupérant des champs de formulaires. Mais pour coder proprement nos informations doivent être stockées dans des instances de classes pour pouvoir être manipulées.

Nous allons donc utiliser les requêtes SQL pour remplir nos instances, puis lorsque nous avons fini de les manipuler nous allons sauvegarder les modifications dans notre base de données. 

Remplir une classe depuis les infos d'une base de données à un nom : on appelle ça l'hydratation. On dit qu'on hydrate une instance de classe.

## Le déroulé d'une hydratation

1. Je me connecte à ma base de données
2. Je fais une requête `SELECT`pour récupérer des données
3. J'instancie une classe
4. J'hydrate mon instance de classe avec les données de la requête
5. Je retourne mon instance de classe hydratée

## Le déroulé d'une sauvegarde

1. Je me connecte à ma base de données
2. Je prépare les paramètres de ma requête avec les attributs de mon instance de classe
3. Je fais une requête `INSERT` ou `UPDATE` avec mes paramètres
4. Si j'ai fait un `INSERT` je mets à jour l'id de mon instance de classe avec celui de la base de données
5. Je retourne mon instance de classe

---

# Exercices hydratation et sauvegarde

Dans le fichier `exercice-hydratation.md` sur Discord.