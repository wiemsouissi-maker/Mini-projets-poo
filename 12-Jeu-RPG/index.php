
<?php
trait Attaquant
{
    public function attaquer(Personnage $cible)
    {
        $degats = $this->attaque;
        echo "⚔️ {$this->nom} attaque {$cible->getNom()} et inflige {$degats} dégâts !<br>";
        $cible->recevoirDegats($degats);
    }
}
abstract class Personnage
{
    private static $totalPersonnages = 0;

    protected $nom;
    protected $vie;
    protected $attaque;

    private $estVivant = true;

    public function __construct($nom, $vie, $attaque)
    {
        self::$totalPersonnages++;

        $this->nom = $nom;
        $this->vie = $vie;
        $this->attaque = $attaque;

        echo "✨ {$this->nom} entre dans l'arène ! (Vie: {$this->vie}, Attaque: {$this->attaque})<br>";
    }
    public function recevoirDegats($degats)
    {
        if (!$this->estVivant) return;

        $this->vie -= $degats;

        if ($this->vie <= 0) {
            $this->vie = 0;
            $this->estVivant = false;
            echo "💀 {$this->nom} est KO !" . PHP_EOL;
        } else {
            echo "💔 {$this->nom} a {$this->vie} PV restants" . PHP_EOL;
        }
    }
    public function getEstVivant()
    {
        return $this->estVivant;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public static function getTotalPersonnages()
    {
        return self::$totalPersonnages;
    }
    abstract public function crier();
    abstract public function attaquer(Personnage $cible);
}
class Guerrier extends Personnage
{
    use Attaquant;

    public function __construct($nom)
    {
        parent::__construct($nom, 100, 20);
    }
    public function crier()
    {
        echo "{$this->nom} : 🗡️ POUR L'HONNEUR !" . PHP_EOL;
    }
}
class Archer extends Personnage
{
    use Attaquant;

    public function __construct($nom)
    {
        parent::__construct($nom, 80, 25);
    }

    public function crier()
    {
        echo "{$this->nom} : 🏹 TIR MORTEL !" . PHP_EOL;
    }
}
class Mage extends Personnage
{
    use Attaquant;

    public function __construct($nom)
    {
        parent::__construct($nom, 70, 30);
    }

    public function crier()
    {
        echo "{$this->nom} : 🔮 PAR LES ARCANES !" . PHP_EOL;
    }

    public function sortSpecial(Personnage $cible)
    {
        $degats = $this->attaque * 1.5;
        echo "🔥 {$this->nom} lance une BOULE DE FEU sur {$cible->getNom()} et inflige {$degats} dégâts !<br>";
        $cible->recevoirDegats($degats);
    }
}
class Arene
{
    public function combat(Personnage $perso1, Personnage $perso2)
    {
        echo "--- ⚔️ COMBAT : {$perso1->getNom()} VS {$perso2->getNom()} ---<br>";
        $perso1->crier();
        $perso2->crier();
        while ($perso1->getEstVivant() && $perso2->getEstVivant()) {
            echo "--- Tour de {$perso1->getNom()} --<br>";
            $perso1->attaquer($perso2);

            if (!$perso2->getEstVivant()) {
                break;
            }

            echo "--- Tour de {$perso2->getNom()} ---<br>";
            $perso2->attaquer($perso1);
        }
        if ($perso1->getEstVivant()) {
            echo "🏆 {$perso1->getNom()} est le gagnant !<br>";
            return $perso1;
        } else {
            echo "🏆 {$perso2->getNom()} est le gagnant !<br>";
            return $perso2;
        }
    }
}
echo "<br>";
$conan = new Guerrier("Conan le Guerrier");
$gandalf = new Mage("Gandalf le Mage");
$legolas = new Archer("Legolas l'Archer");
$arene = new Arene();

echo "<br>";
echo "🔥 Gandalf prend l'initiative avec une BOULE DE FEU !<br>";
$gandalf->sortSpecial($conan);
$gagnant1 = $arene->combat($conan, $gandalf);

echo "--- COMBAT FINAL : {$gagnant1->getNom()} VS Legolas ---<br>";
$champion = $arene->combat($gagnant1, $legolas);
echo "<br>";
echo "🏆 LE CHAMPION DU TOURNOI EST... {$champion->getNom()} !<br>";
echo "📊 Total de personnages créés : " . Personnage::getTotalPersonnages();
