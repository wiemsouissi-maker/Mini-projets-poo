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
        echo " {$this->nom} mange...<br>";
    }
    public function dormir()
    {
        echo " {$this->nom} dort... Zzz<br>";
    }
}
class chien extends animal
{
    public function aboyer()
    {
        echo " {$this->nom} : WOOF WOOF !<br>";
    }
}
class chat extends animal
{
    public function miauler()
    {
        echo " {$this->nom} : MIAOU !<br>";
    }
}
class oiseau extends animal
{
    public function voler()
    {
        echo " {$this->nom} vole dans le ciel !<br>";
    }
}
$chien = new chien("Rex");
$chat = new chat("Minou");

$chien->manger();
$chien->aboyer();


$chat->dormir();
$chat->miauler();
