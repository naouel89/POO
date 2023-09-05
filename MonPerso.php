<?php
require_once('Personnage.class.php');

$p = new Personnage();
$p->setNom("Lebowski");
$p->setPrenom("Jeff");
$p->setAge(45); // Vous pouvez également définir l'âge et le sexe de la même manière
$p->setSexe("Masculin");

echo "Nom : " . $p->getNom() . "<br>";
echo "Prénom : " . $p->getPrenom() . "<br>";
echo "Âge : " . $p->getAge() . "<br>";
echo "Sexe : " . $p->getSexe() . "<br>";
?>
