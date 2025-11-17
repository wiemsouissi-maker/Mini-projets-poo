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
        echo "Infos: {$this->marque} {$this->modele}, Vitesse: {$this->vitesse} km/h\n<br>";
    }

    public function accelerer($vitesse)
    {
        $this->vitesse += $vitesse;
        echo "Accélération à {$this->vitesse} km/h\n<br>";
    }
}
echo "==1. Création des Voitures ==\n<br>";

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
echo "\n=. Test de la Peugeot ==\n<br>";
$peugeot->accelerer(50);
$peugeot->afficherInfos();

echo "\n= 3. Test de la Tesla ==\n<br>";
$tesla->accelerer(100);
$tesla->afficherInfos();
