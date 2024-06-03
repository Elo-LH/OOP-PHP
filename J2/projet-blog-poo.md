# Mini-projet Blog

## Étape 0 : préparation

### Le repository

Créez un repository Github public avec un README et appelez le `bre02_blog_poo`.
Clonez-le dans le dossier `sites/php` de votre IDE.

### La base de données

Sur votre PhpMyAdmin, créez une base de données, appellée `prenomnom_blog_poo`.
Importez dans cette base (et dans cet ordre cela devrait normalement vous éviter des soucis) les 4 fichiers SQL que vous trouverez sur Discord :

- `users.sql`
- `categories.sql`
- `posts.sql`
- `posts_categories.sql`


## Étape 1 : créer les classes des données

Créez un dossier `models` dans lequel vous allez créer 3 classes correspondant aux 4 tables suivantes de votre base de données :

Toutes vos classes doivent avoir des getters et setters pour tous leurs attrbiuts, et leurs id peuvent être null et le sont par défaut. Les constructeurs des classes doivent prendre en paramètres tous les champs sauf l'id.

Attention le nom de la classe est au singulier même si celui de la table est au pluriel.

### La classe User

Correspond à la table `users`.

### La classe Category

Correspond à la table `categories`.

### La classe Post

Correspond à la table `posts`. L'auteur d'un `Post` est un `User`.

Laissez la table `post_categories` de côté pour le moment.


## Étape 2 : représenter les relations entre Post et Category

### Côté Post

Dans votre classe `Post` vous allez ajouter un attribut private `categories` qui est un tableau. Par défaut c'est un tableau vide. Ajoutez un getter et un setter pour cet attribut.

Vous allez également ajouter deux méthodes public à votre classe `Post` :

- `addCategory` qui prend une `Category` en paramètres et ne retourne rien. Elle ajoute la catégorie en paramètres à la liste des catégories si elle n'y est pas déjà.
- `removeCategory` qui prend une `Category` en paramètres et ne retourne rien. Elle retire la catégorie en paramètres de la liste des catégories.

### Côté Category

Dans votre classe `Category` vous allez ajouter un attribut private `posts` qui est un tableau. Par défaut c'est un tableau vide. Ajoutez un getter et un setter pour cet attribut.

Vous allez également ajouter deux méthodes public à votre classe `Category` :

- `addPost` qui prend un `Post` en paramètres et ne retourne rien. Elle ajoute le post en paramètres à la liste des posts si il n'y est pas déjà.
- `removePost` qui prend un `Post` en paramètres et ne retourne rien. Elle retire le post en paramètres de la liste des posts.


## Étape 3 : créer les Managers

Dans un dossier `managers` nous allons créer 4 classes, qui serviront à faire l'intermédiaire entre nos modèles (nos classes de données) et notre base de données.

### La classe AbstractManager

La classe `AbtractManager` est une classe abstraite.

Elle contient un attribut protected : `db` qui est une classe `PDO`.

Dans son constructeur elle initialise la connection à votre base de données et la stoke dans l'attribut `db`.

Elle n'a ni getter ni setter.


### La classe UserManager

La classe `UserManager` hérite de la classe `AbtractManager`. Elle n'a pas d'attribut et son constructeur appelle simplement le constructeur de sa classe mère.

Elle a par contre 5 méthodes public :

#### findAll

La méthode `findAll` ne prend pas de paramètre et retourne un `array`.

Elle va interroger la base de données et retourner un tableau d'instances de classe `User` correspondants aux utilisateurs en base de données.

#### findOne

La méthode `findOne` prend un `int $id` en paramètres et retourne un `User` ou null.

Elle va interroger la base de données et retourner un instances de classe `User` correspondant à l'utilisateur en base de données qui a l'id passé en paramètres. Si il n'eiste pas elle retourne null.

#### create

La méthode `create` prend un `User` en paramètres et ne retourne rien. Elle va créer un `User`correspondant à celui passé en paramètres dans la base de données.

#### update

La méthode `update` prend un `User` en paramètres et ne retourne rien. Elle va modifier le `User` correspondant à celui passé en paramètres dans la base de données.

#### delete

La méthode `delete` prend un `int $id` en paramètres et ne retourne rien. Elle va supprimer le `User` en base de données qui a l'id passé en paramètres.

### La classe CategoryManager

Faites la même chose pour les `Category`.

Faites attention à bien récupérer / créer / supprimer / modifier les relations entre `Post` et `Category` en base de données si nécéssaire (il vous faudra peut être plusieurs requêtes pour `create` et `update`).

### La classe PostManager

Faites la même chose pour les `Posts`.

Faites attention à bien récupérer / créer / supprimer / modifier les relations entre `Post` et `Category` en base de données si nécéssaire (il vous faudra peut être plusieurs requêtes pour `create` et `update`).



