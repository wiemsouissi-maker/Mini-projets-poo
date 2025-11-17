<?php
abstract class forme
{
    protected $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    abstract public function calculerAire();
    public function afficher()
    {
        $aire = $this->calculerAire();
        echo "Aire du {$this->nom} : {$aire}\n";
    }
}
