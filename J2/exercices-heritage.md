# Exercices héritage

## Exercice 1 : manipuler des classes avec héritage simple

Utilisez les classes suivantes : 

```php
class User 
{
    protected string $email;
    protected string $password;

    public function __construct(){

    }

    public function login() : array {
    	return ["login" => $this->email, "password" => $this->password];
    }
}
```

```php
class Reader extends User
{
    private array $favoriteBooks = [];

    public function __construct(string $email, string $password){
    	$this->email = $email;
    	$this->password = $password;
    }

    public function addBookToFavorites(string $book): array {
    	$this->favoriteBooks[] = $book;

    	return $this->favoriteBooks;
    }

    public function removeBookFromFavorites(string $book): array {
    	foreach($this->favoriteBooks as $key => $favoriteBook)
    	{
    		if($favoriteBook === $book)
    		{
    			unset($this->favoriteBooks[$key]);
    		}
    	}

    	return $this->favoriteBooks;
    }  
}
```

1. Créez un lecteur et ajoutez deux livres à sa liste de favoris. 

2. Affichez la liste de ses livres favoris

3. Retirez l'un des deux livres.

4. Affichez la liste de ses livres favoris

5. Affichez son email et son mot de passe sans modifier les classes.


## Exercice 2 : créer des classes avec héritage simple

### La classe mère 

Vous allez créer une class `Character`. 

Un `Character` a 2 attributs :

- `life` qui est un `int` protected
- `name` qui est une `string`protected

Un `Character` a des getters et setters pour ses deux attributs. Son constructeur ne prend pas d'argument et ne fait rien.

Un `Character` a une méthode protected : `introduce` qui retourne une string qui dit `"Bonjour je m'appelle " + le nom du Character`.

### Les classes filles

Vous allez créer deux classes filles qui héritent de `Character` :

#### La classe Warrior

un attribut private : `energy` qui est un int

Elle a un getter et un setter pour cet attribut.

Son constructeur prend `life`, `name` et `energy` en paramètre et initialise les attributs.

#### La classe Mage

un attribut private : `mana` qui est un int

Elle a un getter et un setter pour cet attribut.

Son constructeur prend `life`, `name` et `mana` en paramètre et initialise les attributs.

### Manipulation

Instanciez un `Character`, un `Warrior` et un `Mage` et faites les se présenter.

Puis pour le `Warrior`, faites le se présenter et annoncer son niveau de vie et d'énergie.

Puis pour le `Mage`, faites le se présenter et annoncer son niveau de vie et de mana.







