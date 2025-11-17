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
    public $vitesse = 0;

    public function afficherInfos()
    {
        echo "Infos: {$this->marque} {$this->modele}, Vitesse: {$this->vitesse} km/h\n";
    }

    public function accelerer($vitesse)
    {
        $this->vitesse += $vitesse;
        echo "Accélération à {$this->vitesse} km/h\n";
    }
}
echo "========= 1. Création des Voitures =========\n";

// Voiture 1 : $peugeot
$peugeot = new Voiture();
$peugeot->marque = "Peugeot";
$peugeot->modele = "208";

// Voiture 2 : $tesla
$tesla = new Voiture();
$tesla->marque = "Tesla";
$tesla->modele = "Model S";

$peugeot->afficherInfos();
$tesla->afficherInfos();
echo "\n========= 2. Test de la Peugeot =========\n";
$peugeot->accelerer(50);
$peugeot->afficherInfos();

echo "\n========= 3. Test de la Tesla =========\n";
$tesla->accelerer(100);
$tesla->afficherInfos();
