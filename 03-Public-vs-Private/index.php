<?php

/**
 * 🔒 PROJET 03 : PUBLIC VS PRIVATE
 * Concept : Encapsulation (protéger les données sensibles)
 *
 * 📖 Lis le README.md avant de commencer !
 */
// 


class portefeuille
{
    private $proprietaire;
    private $argentDisponible;

    public function __construct($proprietaire, $argentInitial)
    {
        $this->proprietaire = $proprietaire;
        $this->argentDisponible = $argentInitial;
        echo " Portefeuille créé pour {$this->proprietaire} avec {$this->argentDisponible}€<br>";
    }

    public function getArgent()
    {
        return $this->argentDisponible;
    }

    public function ajouterArgent($montant)
    {
        if ($montant > 0) {
            $this->argentDisponible += $montant;
            echo "Ajout de {$montant}€<br>";
        } else {
            echo "❌ Montant invalide !<br>";
        }
    }

    public function retirerArgent($montant)
    {
        if ($montant > 0 && $montant <= $this->argentDisponible) {
            $this->argentDisponible -= $montant;
            echo " ✅Retrait de {$montant}€<br>";
        } else {
            echo "❌Montant invalide ou insuffisant !<br>";
        }
    }
}

$monPortefeuille = new portefeuille("wiem", 100);
echo "Argent disponible : " . $monPortefeuille->getArgent() . "€<br>";
$monPortefeuille->ajouterArgent(50);
echo "Argent disponible : " . $monPortefeuille->getArgent() . "€<br>";
$monPortefeuille->retirerArgent(30);
echo "Argent disponible : " . $monPortefeuille->getArgent() . "€<br>";
$monPortefeuille->retirerArgent(150);
echo "Argent disponible : " . $monPortefeuille->getArgent() . "€<br>";
