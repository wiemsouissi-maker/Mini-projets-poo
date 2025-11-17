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
        echo " Portefeuille créé pour {$this->proprietaire} avec {$this->argentDisponible}€\n";
    }

    public function getArgent()
    {
        return $this->argentDisponible;
    }

    public function ajouterArgent($montant)
    {
        if ($montant > 0) {
            $this->argentDisponible += $montant;
            echo "Ajout de {$montant}€\n";
        } else {
            echo " Montant invalide !\n";
        }
    }

    public function retirerArgent($montant)
    {
        if ($montant > 0 && $montant <= $this->argentDisponible) {
            $this->argentDisponible -= $montant;
            echo " Retrait de {$montant}€\n";
        } else {
            echo " Montant invalide ou insuffisant !\n";
        }
    }
}

echo "\n========= TESTS DU PORTEFEUILLE =========\n";
$monPortefeuille = new portefeuille("Alice", 100);
echo "Argent disponible : " . $monPortefeuille->getArgent() . "€\n";
$monPortefeuille->ajouterArgent(50);
echo "Argent disponible : " . $monPortefeuille->getArgent() . "€\n";
$monPortefeuille->retirerArgent(30);
echo "Argent disponible : " . $monPortefeuille->getArgent() . "€\n";
$monPortefeuille->retirerArgent(150); // Test retrait invalide
echo "Argent disponible : " . $monPortefeuille->getArgent() . "€\n";
