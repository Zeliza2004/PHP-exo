<?php
class personne
{
    private $nom;
    private $prenom;
    private $adresse;

    //Constructeur
    public function __construct($nom, $prenom, $adresse)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->adresse=$adresse;
    }

    //Destructeur
    public function __destruct()
    {
        echo "<script type=\"text/javascript\">alert('La personne nommée $this->prenom $this->nom \\n est supprimée de vos contacts')</script>";
    }

    /** renvoie une représentation de la personne sous la forme d'une chaine de caractère.
    Vous pouvez choisir d'afficher le prénom, puis le nom suivi de l'adresse par exemple*/
    public function getPersonne()
    {
        return "$this->nom, $this->prenom <br> $this->adresse <br><br>" ;
	}

    public function setadresse($adresse)
	{
		return "nouvelle adresse: $this->adresse";
	}
}

//Création d'objets
$client1 = new personne("Geelsen","Jan"," 145 Rue du Maine Nantes");
$client2 = new personne("Gerden","Jean"," 145 Rue du Manoir");
$client3 = new personne("Godfroid","Claude"," 14 Rue du Poteau");
$client4 = new personne("Poltri","Marine"," 14 Rue des coeurs brisés");
$client5 = new personne("Tirlir","Jacqueline"," 5 Rue du pont");
$client6 = new personne("Zenia","Pol"," 27 Rue du vers a soie");
echo $client1->getPersonne();
echo $client2->getPersonne();
echo $client3->getPersonne();
echo $client4->getPersonne();
echo $client5->getPersonne();
echo $client6->getPersonne();

//Modification de l'adresse
$client1->setadresse("23 Avenue Foch Lyon");
echo $client1->getPersonne();

// Le destructeur est appelé à 2 moments
// - soit lorsque vous supprimez vous-même une variable avec l'usage de "unset" qui désalliue l'espace mémoire occupé par la variable en appelant le destructeur
// - soit de manière automatique lorsque le garbage collector passe pour nettoyer la mémoire de ce qui n'est plus utilisé (par exemple en fin de script php)

// pour bien comprendre quand le destructeur est appelé amusez-vous à passer le booléen suivant à vrai ou faux et exécutez le script
$explicit_destruct = true ;

if ($explicit_destruct)
{
    //Suppression explicite du client avec unset, donc appel implicite au destructeur
    unset($client);
    echo '$client unset, appel au destructeur pour libérer la mémoire occupée par $client<br>';
}

if (isset($client))
{
    echo '$client existe encore, il va être nettoyé par le garbage collector en faisant appel à son destructeur<br>' ;
}

echo "Fin du script";
//Fin du script, le destructeur est appelé sur tous les objects encore vivants. Si $explicit_destruct est à false et donc si $client existe encore à ce stade du script, alors le destructeur sera appelé sur $client.
?>