<?php
// Inclure le fichier de la classe Personnage
require_once('Personnage.class.php');

// Créer une instance de la classe Personnage
$p = new Personnage();

// Définir les attributs du personnage en utilisant les méthodes set
$p->setNom("Lebowski");
$p->setPrenom("Jeff");
$p->setAge(45);
$p->setSexe("Masculin");

// Afficher les informations du personnage en utilisant les méthodes get
echo "Nom : " . $p->getNom() . "<br>";
echo "Prénom : " . $p->getPrenom() . "<br>";
echo "Âge : " . $p->getAge() . "<br>";
echo "Sexe : " . $p->getSexe() . "<br>";
?>
