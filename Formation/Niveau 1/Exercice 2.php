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
$nmb1 = 5;
$nmb2 = 6;
function somme(){
     echo 5 + 6;
}
somme();
?>
<p>Exercice 2</p>
<?php
function soustraction(){
    $nmb3 = 5;
    $nmb4 = 4;
    echo $nmb3 - $nmb4;
}
soustraction();
?>
<p>Exercice 3</p>
<?php
function multiplication(){
    $nmb5 = 5;
    $nmb6 = 4;
    echo $nmb5 * $nmb6;
}
multiplication();
?>
</body>
</html>


<!--Question 1 :
Créer une fonction from scratch qui s'appelle somme(). Elle prendra deux
arguments de type int. Elle devra retourner la somme des deux.
Exemple :
argument 1 = 5
argument 2 = 6
resultat : 11
Question 2 :
Créer une fonction from scratch qui s'appelle soustraction(). Elle
prendra deux arguments de type int. Elle devra retourner la soustraction
des deux.
Exemple :
argument 1 = 5
argument 2 = 4
Resultat : 1
Question 3 :
Créer une fonction from scratch qui s'appelle multiplication(). Elle
prendra deux arguments de type int. Elle devra retourner la
multiplication des deux.
Exemple : argument 1 = 5
argument 2 = 4
Resultat : 20-->