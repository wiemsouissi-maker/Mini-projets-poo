<?php

/**
 *  PROJET 01 : Ma Première Classe
 * Concept : Classes & Objets        
 */
//
class Voiture
{
    public $marque;
    public $modele;
    public $couleur;
    public $vitesse = 0;
    public $km = 0;

    public function afficherInfos()
    {
        echo "Marque: {$this->marque}, Modèle: {$this->modele}, Couleur: {$this->couleur}, Vitesse: {$this->vitesse} km/h, Distance parcourue: {$this->km} km\n";
    }

    public function accelerer($vitesse)
    {
        $this->vitesse += $vitesse;
        echo "Accélération à {$this->vitesse} km/h\n";
    }

    public function freiner($vitesse)
    {
        $this->vitesse = max(0, $this->vitesse - $vitesse);
        echo "Freinage à {$this->vitesse} km/h\n";
    }

    public function rouler($distance)
    {
        $this->km += $distance;
        echo "Distance parcourue: {$distance} km\n";
    }
}
echo "========= 1. Création des Voitures =========\n";

// Voiture 1 : $peugeot
$peugeot = new Voiture();
$peugeot->marque = "Peugeot";
$peugeot->modele = "208";
$peugeot->couleur = "Bleue";

// Voiture 2 : $tesla
$tesla->marque = "Tesla";
$tesla->modele = "Model S";
$tesla->couleur = "Rouge";

$peugeot->afficherInfos();
$peugeot->afficherInfos();
$tesla->afficherInfos();
echo "\n========= 2. Test de la Peugeot =========\n";
$peugeot->rouler(10);
$peugeot->accelerer(50);
$peugeot->rouler(10);
$peugeot->freiner(20);
$peugeot->rouler(5);
$peugeot->afficherInfos();

echo "\n========= 3. Test de la Tesla =========\n";
$tesla->accelerer(100);
$tesla->rouler(50);
$tesla->afficherInfos();
