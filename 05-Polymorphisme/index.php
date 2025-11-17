
<?php
class Instrument
{
    protected $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function jouer()
    {
        echo " 🎵 {$this->nom} joue de la musique...<br>";
    }
}

class Guitare extends Instrument
{
    public function jouer()
    {
        echo " 🎸 {$this->nom} : GLING GLING GLING ♪<br>";
    }
}

class Piano extends Instrument
{
    public function jouer()
    {
        echo " 🎹 {$this->nom} : PLONK PLONK PLONK ♫<br>";
    }
}
class Batterie extends Instrument
{
    public function jouer()
    {
        echo " 🥁 {$this->nom} : BOOM BOOM CRASH ♪♫<br>";
    }
}
$orchestre = [
    new Guitare("Ma Guitare"),
    new Piano("Mon Piano"),
    new Batterie("Ma Batterie")
];

foreach ($orchestre as $instrument) {
    $instrument->jouer();
}
?>