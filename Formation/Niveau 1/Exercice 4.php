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
$pommes = array("cerises","pomme","pruneau");

function premierElementTableau($pommes){
    if (count($pommes) === 0){
    echo "le tableau est vide";
    }else {
        echo $pommes[0];
    }
}
premierElementTableau($pommes);
echo "<br>";
// si tableau pommes est vide, le if affiche bien "le tableau est vide"
?>
<p>Exercice 2</p>
<?php
$pommes = array("cerises","pomme","pruneau","fraise");

function dernierElementTableau($pommes){
    if (count($pommes) === 0){
        echo "le tableau est vide";
    }else {
        echo $pommes[(count($pommes)-1)];
    }
}
dernierElementTableau($pommes);
echo "<br>";
?>
<p>Exercice 3</p>
<?php
$pieds = array(25,42,12,7);

function plusGrand($pieds){
    if (count($pieds) === 0){
        echo "le tableau est vide";
    }else {
        echo (max($pieds));
    }
}
plusGrand($pieds);
echo "<br>";
?>
<p>Exercice 4</p>
<?php
$pieds = array(25,42,12,7);

function plusPetit($pieds){
    if (count($pieds) === 0){
        echo "le tableau est vide";
    }else {
        echo (min($pieds));
    }
}
plusPetit($pieds);
echo "<br>";
?>
</body>
</html>


<!--Question 1 :
Créer une fonction from scratch qui s'appelle premierElementTableau().
Elle prendra un argument de type array. Elle devra retourner le premier
élement du tableau.
Si l'array est vide, il faudra retourner null;
Question 2 :
Créer une fonction from scratch qui s'appelle dernierElementTableau().
Elle prendra un argument de type array. Elle devra retourner le dernier
élement du tableau.
Si l'array est vide, il faudra retourner null;
Question 3 :
Créer une fonction from scratch qui s'appelle plusGrand(). Elle prendra
un argument de type array. Elle devra retourner le plus grand des
élements présent dans l'array.
Si l'array est vide, il faudra retourner null;
Question 4 :
Créer une fonction from scratch qui s'appelle plusPetit(). Elle prendra
un argument de type array. Elle devra retourner le plus petit des
élements présent dans l'array.
Si l'array est vide, il faudra retourner null;-->
