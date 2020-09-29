<?php
echo "<table border=\"1\"  >";
echo "<caption><b>Coordonnées personnelle </b></caption>";
//Avec une boucle foreach on va parcourir le tableau (superglobale) $_POST et afficher les données envoyées.
foreach($_POST as $cle=>$val)
{

    echo "<tr> <td> $cle : &nbsp;</td> <td>".$val
        ."</td></tr>";
}
echo "</table>";

if(isset($_POST['Envoyer'])){
    $erreurs="";//chaîne de caractère ou on va stocker les erreurs détectées
    extract($_POST);//permet de créer des variables à partir du tableau $_POST
    //par exemple il va créer $nom à partir de $_POST["nom"]...donc on pourra travailler simplement avec les variable $nom,$tel...
    if(empty($nom) || empty($email) || empty($tel) || empty($adresse) || empty($code) ){
        $erreurs.="Le formulaire est incomplet : tous les champs sont obligatoires<br>";
    }
    //empty détermine  si une variable est vide
    if(strpos($email,"@")===false){
        $erreurs.="l'adresse email est incorrect <br>";
    }
    //strpos renvoie la position d'une sous chaîne dans une chaîne si elle existe sinon renvoie false
    if(!preg_match("/^(06|05)(\s[0-9]{2}){4}$/",$tel)){
        $erreurs.="Format du tel est invalide .Format valide: (06 ou 05)00 00 00 00<br>";
    }
    //preg_match permet de faire un test basé sur une expression régulière

    if(!ctype_digit($code)){
        $erreurs.="le code postal est invalide";
    }
    //ctype_digit détermine si une chaîne est un entier
    // si aucune erreur on affiche les données
    if($erreurs==""){
        echo "<table border=\"1\"  >";
        echo "<caption><b>Confirmation de vos coordonnées</b></caption>";
        foreach($_POST as $cle=>$val)
        {

            echo "<tr> <td> $cle : &nbsp;</td> <td>".$val
                ."</td></tr>";
        }
        echo "</table>";
    }
    //sinon on affiche les erreurs
    else
        echo $erreurs;
}



/*
    $name = addslashes(htmlspecialchars(htmlentities(strip_tags($_POST['nom']))));
    $prenom = addslashes(htmlspecialchars(htmlentities(strip_tags($_POST['Prénom']))));
    $email = addslashes(htmlspecialchars(htmlentities(strip_tags($_POST['Email']))));
    $telephone = addslashes(htmlspecialchars(htmlentities(strip_tags($_POST['Téléphone']))));
    $adresse = addslashes(htmlspecialchars(htmlentities(strip_tags($_POST['Adresse']))));
    $cp = addslashes(htmlspecialchars(htmlentities(strip_tags($_POST['CodePostal']))));
    $commune = addslashes(htmlspecialchars(htmlentities(strip_tags($_POST['Commune']))));


    // afficher le résultat
    echo '<h3>Informations récupérées en utilisant POST</h3>';
    echo 'Nom : ' . $name . ' Prénom : ' . $prenom . ' Email : ' . $email . ' Telephone : ' . $telephone . ' Adresse : ' . $adresse . ' Code postal ' . $cp . ' Commune ' . $commune ;
    exit;
*/
