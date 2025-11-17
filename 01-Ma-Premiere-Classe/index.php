<?php

/**
 *  PROJET 01 : Ma Première Classe
 * Concept : Classes & Objets        
 */
//
class Voiture
{
    public $marque;
    public $couleur;
    public $vitesse;

    public function demarrer()
    {
        echo "<br> vroom ! la $this->marque démarre ! la vitesse max est de $this->vitesse <br>";
    }

    public function klaxonner()

    {

        echo "<br> Pouet Pouet ! la voiture $this->couleur <br>";
    }
}
echo " Création des Voitures \n<br>";

// Voiture 1 : $ferrari
$ferrari = new Voiture();
$ferrari->marque = "ferrari";
$ferrari->couleur  = "rouge";
$ferrari->vitesse = 320;

// Voiture 2 : twingo
$twingo = new Voiture();
$twingo->marque = "ferrari";
$twingo->couleur  = "jaune";
$twingo->vitesse = 150;


$ferrari->demarrer();
$twingo->demarrer();
$ferrari->klaxonner();
$twingo->klaxonner();
