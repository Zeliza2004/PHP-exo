<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>exercice 4</title>
</head>
<body>
<?php
class form
{
    private $code; // code complet du formulaire
    private $codeinit; // code de l'entete du formulaire : balises form + fielset + legend
    private $codetext ; // code de chaque input
    private $codesubmit; // code du bouton submit

    public function __construct($action, $titre, $method="post")
    {
        $this->codeinit = "<form method=\"$method\" action= \"$action\">" ;
        $this->codeinit.="<fieldset><legend>$titre</legend>";
	}

    //********************************************
    public function settext($name, $libelle)
    {
        $this->codetext.="<span>$libelle</span><input type=\"text\" name=\"$name\" /><br><br>" ;
		// notez que si vous appelez plusieurs fois la fonction settext, les input se concatènent
	}

    //************************************************
    public function setsubmit($name="envoi", $value="Envoyer")
    {
        $this->codesubmit= "<input type=\"submit\" name=\"$name\" value=\"$value\"/><br>" ;
	}

    //**************************
    public function getform()
    {
        $this->code="";
        $this->code.= $this->codeinit; //en tete du form
        $this->code.=$this->codetext;//on ajoute les inputs
        $this->code.=$this->codesubmit;// on ajoute le btn validé
        $this->code.="</fieldset></form>";
		echo $this->code;
	}
}
?>
</body>
</html>








