<?php
class employes {
    public $nom;
    public $prenom;
    public $dateEmbauche;
    public $fonction;
    public $salaireAnnuel;
    public $service;

    public function __construct($nom, $prenom, $dateEmbauche, $fonction, $salaireAnnuel, $service) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateEmbauche = $dateEmbauche;
        $this->fonction = $fonction;
        $this->salaireAnnuel = $salaireAnnuel;
        $this->service = $service;
    }

    public function afficherInformations() {
        echo "Nom : " . $this->nom . "\n";
        echo "Prénom : " . $this->prenom . "\n";
        echo "Date d'embauche : " . $this->dateEmbauche . "\n";
        echo "Fonction : " . $this->fonction . "\n";
        echo "Salaire annuel : " . $this->salaireAnnuel . " K euros\n";
        echo "Service : " . $this->service . "\n";
    }
}
?>
