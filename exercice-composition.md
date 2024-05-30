# Exercice composition

## Exercice 3

Pour cet exercice pour aller créer trois fichiers :

- `Weapon.php`
- `Character.php`
- `game.php`

Votre classe `Weapon` aura comme attributs :

- `name` qui est une string privée
- `damages` qui est un int privé

Elle aura un constructeur qui prend les attributs en argument.
Elle aura un getter et un setter pour chacun des attributs.

Elle aura également une méthode publique `strike` qui retourne la string `"Mais aïeuh! <br>"`.

Votre classe `Character` aura comme attributs :

- `name` qui est une string privée
- `weapon` qui est une `Weapon` privée

Elle aura un constructeur qui prend son attribut `name` en argument et initialise l'attribut `weapon` avec un `name` vide et des `damages` à 0.

Elle aura un getter et un setter pour chacun des attributs.

Elle aura également une méthode publique `fight` qui retourne le résultat de la méthode `strike` de sa `weapon`.

Dans votre fichier `game.php`, créez un personnage avec le `name` Ragnar.

Donnez lui ensuite une `Weapon` avec le name `"Sword"` et des damages de 10.

Affichez avec un écho le nom du Character, le name de sa weapon et les damages de sa weapon.

Affichez le résultat de sa méthode `fight`.