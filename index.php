<!DOCTYPE html>
<html>
<head>
    <title>Liste des Employés</title>
</head>
<body>
<?php
require_once("employes.php");

// Créez des instances de magasins
$magasin1 = new Magasin("Magasin A", "123 Rue de la Ville", "75001", "Paris");
$magasin2 = new Magasin("Magasin B", "456 Avenue de la Rue", "69001", "Lyon");

// Créez des instances d'employés rattachés à des magasins
$employe1 = new Employe("Dupont", "Jean", "01/01/2020", "Vendeur", 25000, "Commercial", $magasin1);
$employe2 = new Employe("Martin", "Marie", "15/03/2019", "Comptable", 30000, "Comptabilité", $magasin1);
$employe3 = new Employe("Doe", "John", "10/07/2018", "Responsable des ventes", 40000, "Commercial", $magasin2);
$employe4 = new Employe("Girard", "Sophie", "05/02/2021", "Assistante Comptable", 28000, "Comptabilité", $magasin2);

?>

<h2>Informations sur les employés :</h2>

<!-- Employé 1 -->
<section>
    <h3>Employé 1 :</h3>
    <?php
    $employe1->afficherInformations();
    $montantPrime1 = $employe1->calculerPrime();
    echo "<p>Prime annuelle : $montantPrime1 €</p>";
    echo $employe1->envoyerOrdreTransfert();
    
    // Afficher les informations sur le magasin du premier employé
    $magasin2->afficherInformations();
    ?>
</section>

<!-- Employé 2 -->
<section>
    <h3>Employé 2 :</h3>
    <?php
    $employe2->afficherInformations();
    $montantPrime2 = $employe2->calculerPrime();
    echo "<p>Prime annuelle : $montantPrime2 €</p>";
    echo $employe2->envoyerOrdreTransfert();
    
    // Afficher les informations sur le magasin du deuxième employé
    $magasin1->afficherInformations();
    ?>
</section>

<!-- Employé 3 -->
<section>
    <h3>Employé 3 :</h3>
    <?php
    $employe3->afficherInformations();
    $montantPrime3 = $employe3->calculerPrime();
    echo "<p>Prime annuelle : $montantPrime3 €</p>";
    echo $employe3->envoyerOrdreTransfert();
    
    // Afficher les informations sur le magasin du troisième employé
    $magasin2->afficherInformations();
    ?>
</section>

<!-- Employé 4 -->
<section>
    <h3>Employé 4 :</h3>
    <?php
    $employe4->afficherInformations();
    $montantPrime4 = $employe4->calculerPrime();
    echo "<p>Prime annuelle : $montantPrime4 €</p>";
    echo $employe4->envoyerOrdreTransfert();
    
    // Afficher les informations sur le magasin du quatrième employé
    $magasin1->afficherInformations();
    ?>
</section>

</body>
</html>
