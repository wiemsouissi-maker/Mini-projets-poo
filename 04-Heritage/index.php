<?php

/**
 * PROJET 03 : PUBLIC VS PRIVATE
 * Concept : Encapsulation (protéger les données sensibles)
 *
 *  Lis le README.md avant de commencer !
 */
class animal
{
    protected $nom;
    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function manger()
    {
        echo " {$this->nom} mange...\n";
    }
    public function dormir()
    {
        echo " {$this->nom} dort... Zzz\n";
    }
}
class chien extends animal
{
    public function aboyer()
    {
        echo " {$this->nom} : WOOF WOOF !\n";
    }
}
class chat extends animal
{
    public function miauler()
    {
        echo " {$this->nom} : MIAOU !\n";
    }
}
class oiseau extends animal
{
    public function voler()
    {
        echo " {$this->nom} vole dans le ciel !\n";
    }
}
echo "\n========= TESTS DES ANIMAUX =========\n";
$rex = new chien("Rex");
$minou = new chat("Minou");
$rex->manger();
$rex->aboyer();
$minou->dormir();
$minou->miauler();
$pioupiou = new oiseau("Pioupiou");
$pioupiou->voler();
$pioupiou->manger();
$pioupiou->dormir();
