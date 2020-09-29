<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Cours PHP & MySQL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">
</head>

<body>
<p>Exercice 1</p>
<?php
echo 'Hello World <br>';
?>
<p>Exercice 2</p>
<?php
function quiEstLeMeilleurProf(){
    echo "Mon super formateur de dev web <br>";
}
quiEstLeMeilleurProf();
?>
<p>Exercice 3</p>
<?php
$argument = 123;
function jeRetourneMonArgument($a){
        echo "$a <br>";
}
jeRetourneMonArgument($argument);
?>
<p>exercice 4</p>
<?php
function concatenation(){
    $arg1 = "Kingsley";
    $arg2 ="Coman";
    echo $arg1 . $arg2;
}
concatenation();
?>
<p>Exercice 5</p>
<?php
function concatenationAvecEspace(){
    $arg3 = "Manuel";
    $arg4 = " Neuer";
    echo "$arg3 $arg4";
}
concatenationAvecEspace();
?>
</body>
</html>


<!--Question 1 :
Faite en sorte que la fonction HelloWorld retourne exactement la valeur
Hello World!
<?php
/*function helloWorld(){
    return "Texte à afficher";
}
*/?>
Question 2 :
Créer une fonction from scratch qui s'appelle quiEstLeMeilleurProf().
Elle doit retourner "Mon super formateur de dev web"
Question 3 :
Créer une fonction from scratch qui s'appelle jeRetourneMonArgument().
Exemple : argument = "abc" ==> return abc
arg = 123 ==> return 123
Question 4 :
Créer une fonction from scratch qui s'appelle concatenation(). Elle
prendra deux arguments de type string. Elle devra retourner la
concatenation des deux.
Exemple :
argument 1 = "Kingsley"
argument 2 = "Coman"
Resultat : "KingsleyComan"
Question 5 :
Créer une fonction from scratch qui s'appelle concatenationAvecEspace().
Elle prendra deux arguments de type string. Elle devra retourner la
concatenation des deux avec un espace entre les deux.
Exemple :
argument 1 = "Manuel"
argument 2 = "Neuer"
Resultat : "Manuel Neuer"-->