<?php
class Utilisateur
{
    private static $compteur = 0;
    private $nom;
    private $id;
    public function __construct($nom)
    {
        self::$compteur++;
        $this->id = self::$compteur;
        $this->nom = $nom;
        echo "✅ Utilisateur #{$this->id} créé : {$this->nom}" . "<br>";
    }
    public static function getNombreUtilisateurs()
    {
        return self::$compteur;
    }
    public function afficher()
    {
        echo "👤 User #{$this->id} : {$this->nom}<br>";
    }
}
echo "Nombre d'utilisateurs (avant) : " . Utilisateur::getNombreUtilisateurs() . "<br>";
echo "<br>";
$user1 = new Utilisateur("Jean");
$user2 = new Utilisateur("Marie");
$user3 = new Utilisateur("Paul");

echo "<br>";
$user1->afficher();
$user2->afficher();
$user3->afficher();
