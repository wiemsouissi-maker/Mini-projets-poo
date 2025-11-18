<?php
trait Nageable
{
    public function nager()
    {
        echo "🏊 {$this->nom} nage comme un poisson !<br>";
    }
}
trait Volant
{
    public function voler()
    {
        echo "🦅 {$this->nom} vole dans les airs !<br>";
    }
}
trait Invisible
{
    public function seRendreInvisible()
    {
        echo "👻 {$this->nom} devient invisible !<br>";
    }
}
class Guerrier
{
    use Nageable;

    public $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function attaquer()
    {
        echo "⚔️ {$this->nom} attaque avec son épée !<br>";
    }
}

class Magicien
{
    use Nageable, Volant, Invisible;

    public $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function lancerSort()
    {
        echo "🔮 {$this->nom} lance un sort !<br>";
    }
}

$conan = new Guerrier("Conan");
$conan->attaquer();
$conan->nager();

echo "<br>";
$gandalf = new Magicien("Gandalf");
$gandalf->lancerSort();
$gandalf->nager();
$gandalf->voler();
$gandalf->seRendreInvisible();
