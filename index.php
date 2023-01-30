
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
   
<h1>Exercice Livre</h1>
<p>Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des livres et 
leurs auteurs respectifs.
Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un 
auteur. Un auteur comporte un nom et un prénom.
Une méthode toString() sera appréciée dans chacune de vos classes.
Vous implémenterez une méthode afficherBibliographie() qui permettra d’afficher la bibliographie 
complète d’un auteur </p>
<h2>Résultat</h2>



<?php
 //include ("Auteur.php");
 
//importer tous les classes 
 spl_autoload_register(function ($class_name) {
     require_once $class_name . '.php';
     });

$a1 = new Auteur("kayal","georges");
//echo $a1;


 $l1 = new Livre("la vie", 365, 1980, 20,$a1);
 //echo $l1;
 $l1 = new Livre("Bio", 365, 1980, 20,$a1);
 //echo $l1;


 $a1-> afficherBibliographie();

?>
</body>
</html>