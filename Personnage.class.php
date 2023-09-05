<?php
class Personnage
{
    // Attributs privés pour stocker les données du personnage
    private $nom;
    private $prenom;
    private $age;
    private $sexe;

    // Getter pour obtenir le nom du personnage
    public function getNom()
    {
        return $this->nom;
    }

    // Setter pour définir le nom du personnage
    public function setNom($nom)
    {
        // Utilisation de $this pour faire référence à l'instance courante (l'objet)
        // Permet de définir la valeur de l'attribut privé $nom avec la valeur passée en argument
        $this->nom = $nom;
    }

    // Getter pour obtenir le prénom du personnage
    public function getPrenom()
    {
        return $this->prenom;
    }

    // Setter pour définir le prénom du personnage
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    // Getter pour obtenir l'âge du personnage
    public function getAge()
    {
        return $this->age;
    }

    // Setter pour définir l'âge du personnage
    public function setAge($age)
    {
        $this->age = $age;
    }

    // Getter pour obtenir le sexe du personnage
    public function getSexe()
    {
        return $this->sexe;
    }

    // Setter pour définir le sexe du personnage
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }
}
?>
