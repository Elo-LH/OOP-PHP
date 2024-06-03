<?php


require "Reader.php";

// 1. Créez un lecteur et ajoutez deux livres à sa liste de favoris.
$lecteur = new Reader('reader@mail.com', 'yes');
$lecteur->addBookToFavorites('Alien planet');
$favBooks = $lecteur->addBookToFavorites('LOTR');

// 2. Affichez la liste de ses livres favoris

var_dump($favBooks);

// 3. Retirez l'un des deux livres.

$favBooks = $lecteur->removeBookFromFavorites('LOTR');

// 4. Affichez la liste de ses livres favoris

var_dump($favBooks);

// 5. Affichez son email et son mot de passe sans modifier les classes.
var_dump($lecteur->login());
