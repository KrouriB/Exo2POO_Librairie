<h1>Exercice 2</h1>

<p>II.Livres<br>
<br><strong>Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des livres et leurs auteurs respectifs.</strong><br>
<br>Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un auteur. Un auteur comporte un nom et un prénom.<br>
<br>Une méthode toString() sera appréciée dans chacune de vos classes.<br>
<br>Vous implémenterez une méthode afficherBibliographie() qui permettra d'afficher la bibliographie complète d'un auteur :<br>
<br><h2>Livres de Stephen King<h2><br>
<br>Ca (1986) : 1138 pages / 20 €<br>
Simetierre (1983) : 374 pages / 15 €<br>
Le Fléau (1978) : 823 pages / 14 €<br>
Shining (1977) : 447 pages / 16 €<br></p>

<h2>Résultat</h2>

<?php

// toString() est une fonction qui permet de renvoyer une chaine de caractere avec toute les information d'un objet afficher comme on le veux

spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

//class Livre propriété --> Titre , nb pages , parution année , prix , auteur (class)
//class Auteur --> nom prénom
//afficherBibliographie (Auteur) --> 

// function afficherBibliographie($l_auteur){
//     echo "Livres de " . $l_auteur;
//     foreach ( as ) {
//         if ($l_auteur === Livres::getAuteur) {

//         }
//     }
// }

$auteur = new Auteur("Stephen", "King");
$l1 = new Livres("Ca","1138","1986","20",$auteur);
$l2 = new Livres("Simetierre","374","1983","15",$auteur);
$l3 = new Livres("Le Fléau","823","1978","14",$auteur);
$l4 = new Livres("Shining","447","1977","16",$auteur);
$auteur->afficherBibliographie();

?>