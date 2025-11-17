<?php

/**
 *  PROJET 02 : LE CONSTRUCTEUR MAGIQUE
 * Concept : Constructeur __construct()
 */
class comptebancaire
{
    public $titulaire;
    public $solde;

    public function __construct($titulaire, $soldeInitial)
    {
        $this->titulaire = $titulaire;
        $this->solde = $soldeInitial;
        echo "Compte créé pour {$this->titulaire} avec {$this->solde}€\n<br>";
    }
    public function deposer($montant)
    {
        $this->solde += $montant;
        echo " Dépôt de {$montant}€\n";
    }
    public function afficherSolde()
    {
        echo " Solde de {$this->titulaire} : {$this->solde}€\n<br>";
    }
}
// Création des comptes
$jean = new comptebancaire("Jean", 1000);
$marie = new comptebancaire("Marie", 500);
