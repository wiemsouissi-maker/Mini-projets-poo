<?php
interface PaymentInterface
{
    public function payer($montant);
    public function rembourser($montant);
}

class CarteBancaire implements PaymentInterface
{

    private $numero;

    public function __construct($numero)
    {
        $this->numero = $numero;
    }
    public function payer($montant)
    {
        $lastFour = substr($this->numero, -4);
        echo "💳 Paiement de {$montant}€ par carte ****{$lastFour}<br>";
    }
    public function rembourser($montant)
    {
        echo "💳 Remboursement de {$montant}€ sur la carte<br>";
    }
}
class PayPal implements PaymentInterface
{

    private $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function payer($montant)
    {
        echo "🅿️  Paiement PayPal de {$montant}€ via {$this->email}<br>";
    }

    public function rembourser($montant)
    {
        echo "🅿️  Remboursement PayPal de {$montant}€<br>";
    }
}

class Crypto implements PaymentInterface
{

    private $wallet;

    public function __construct($wallet)
    {
        $this->wallet = $wallet;
    }

    public function payer($montant)
    {
        $walletStart = substr($this->wallet, 0, 8);
        echo "₿ Paiement crypto de {$montant}€ depuis wallet {$walletStart}...<br>";
    }

    public function rembourser($montant)
    {
        echo "₿ Remboursement crypto de {$montant}€<br>";
    }
}
function traiterPaiement(PaymentInterface $methode, $montant)
{
    echo "🛒 COMMANDE : {$montant}€<br>";
    $methode->payer($montant);

    echo "✅ Paiement validé !<br>";
}

echo "<br>";
$carte = new CarteBancaire("1234567812345678");
$paypal = new PayPal("jean@email.com");
$crypto = new Crypto("1A2B3C4D5E6F7G8H9I");

traiterPaiement($carte, 100);
echo "\n";

traiterPaiement($paypal, 150);
echo "\n";

traiterPaiement($crypto, 200);
echo "\n";
