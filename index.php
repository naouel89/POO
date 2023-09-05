<!DOCTYPE html>
<html>
<head>
    <title>Gestion des Employés</title>
</head>
<body>
<?php
// Incluez le fichier Employe.php pour avoir accès à la classe Employe
require_once("employes.php");

// Créez des instances d'employés
$employe1 = new employes("Dupont", "Jean", "01/01/2020", "Vendeur", 25, "Commercial");
$employe2 = new employes("Martin", "Marie", "15/03/2019", "Comptable", 30, "Comptabilité");

// Affichez les informations des employés
echo "<h2>Informations sur les employés :</h2>";
echo "<h3>Employé 1 :</h3>";
$employe1->afficherInformations();

echo "<h3>Employé 2 :</h3>";
$employe2->afficherInformations();
?>
</body>
</html>
