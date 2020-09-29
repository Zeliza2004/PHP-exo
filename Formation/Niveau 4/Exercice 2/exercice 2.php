<?php
class ville
{
    private $nom;
    private $departement;

    // c'est comme ça qu'on déclare le constructeur de la classe

    public function __construct($n, $d)
    {
        $this->nom = $n;
        $this->departement = $d;
    }

    public function getinfo()
    {
        return "La ville de $this->nom est dans le département : $this->departement. <br>";
    }
}

$ville1 = new ville("Nantes", "Loire Atlantique");
$ville2 = new ville("Lyon", "Rhône");

echo $ville1->getinfo();
echo $ville2->getinfo();
?>