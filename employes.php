<?php

class Magasin {
    private $nom;
    private $adresse;
    private $codePostal;
    private $ville;

    public function __construct($nom, $adresse, $codePostal, $ville) {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
    }

    public function getNom() {
        return $this->nom;
    }

    public function afficherInformations() {
        echo "<p>Nom du magasin : {$this->nom}</p>";
        echo "<p>Adresse : {$this->adresse}</p>";
        echo "<p>Code Postal : {$this->codePostal}</p>";
        echo "<p>Ville : {$this->ville}</p>";
    }
}

class Employe {
    private $nom;
    private $prenom;
    private $dateEmbauche;
    private $poste;
    private $salaireAnnuel;
    private $departement;
    private $magasin;

    public function __construct($nom, $prenom, $dateEmbauche, $poste, $salaireAnnuel, $departement, $magasin) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateEmbauche = $dateEmbauche;
        $this->poste = $poste;
        $this->salaireAnnuel = $salaireAnnuel;
        $this->departement = $departement;
        //$this->magasin = $magasin;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getPoste() {
        return $this->poste;
    }

    public function afficherInformations() {
        echo "<p>Nom : $this->nom</p>";
        echo "<p>Prénom : $this->prenom</p>";
        echo "<p>Date d'embauche : $this->dateEmbauche</p>";
        echo "<p>Poste : $this->poste</p>";
        echo "<p>Salaire Annuel : $this->salaireAnnuel €</p>";
        echo "<p>Département : $this->departement</p>";
        //echo "<p>Magasin : {$this->magasin->getNom()}</p>";
    }

    public function anneesDansEntreprise() {
        $dateEmbauche = strtotime($this->dateEmbauche);
        $dateAujourdhui = strtotime(date('Y-m-d'));
        $difference = $dateAujourdhui - $dateEmbauche;
        $annees = floor($difference / (365 * 60 * 60 * 24));
        return $annees;
    }

    public function calculerPrime() {
        $primeSalaire = $this->salaireAnnuel * 0.05;
        $anneesDansEntreprise = $this->anneesDansEntreprise();
        $primeAnciennete = $this->salaireAnnuel * ($anneesDansEntreprise * 0.02);
        $primeTotale = $primeSalaire + $primeAnciennete;
        return $primeTotale;
    }

    public function envoyerOrdreTransfert() {
        $dateDuJour = date('Y-m-d');
        $dateVersement = '2023-09-07';

        if ($dateDuJour == $dateVersement) {
            $montantPrime = $this->calculerPrime();
            return "Ordre de transfert envoyé à la banque pour $this->nom $this->prenom, montant : $montantPrime € le $dateVersement.";
        } else {
            return "La date de versement n'est pas encore arrivée pour $this->nom $this->prenom.";
        }
    }
}

?>
