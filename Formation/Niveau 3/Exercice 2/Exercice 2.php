<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Cours PHP & MySQL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">
</head>
<body>
<h1>Objectif :</h1>
<p>Effectuer des opérations sur les tableaux associatifs.</p>
<h3>Énoncé :</h3>
<p>On vous propose dans cet exercice un tableau associatif qui contient les notes des
    étudiants, ce tableau se compose de couples clé => valeur (les clés sont les noms
    des étudiant et les valeurs représentent les notes).</p>

<ol>
    <li><p>Créer et initialiser un tableau $notes avec les valeurs suivantes :</p>
<?php
$note =[
    "roger" => 12,
    "Monica" => 16,
    "Najat"=>15,
];
?>
    </li>
    <li><p>Ajouter au tableau la note 10 pour l’étudiant "Anton".</p>
<?php
$note["Anton"]=10; //ajoute "Anton"=>10
print_r($note);
?>
    </li>
    <li><p>Supprimer la note de l’étudiante "Monica"</p>
<?php
unset($note["Monica"]);
print_r($note);
?>
    </li>
    <li><p>Déterminer la note maximale et la note minimale du groupe.</p>
<?php
echo "la note maximale est: ",max($note)," la note minimale est: ",min($note);
?>
    </li>
    <li><p>Afficher le tableau après l'avoir trié par ordre alphabétique.</p>
<?php
ksort($note);
print_r($note);
?>
    </li>
    <li><p>Classer les étudiants par ordre de mérite (notes décroissantes) et afficher le tableau</p>
<?php
foreach ($note as $key => $value) {
    echo "la note de l’étudiant $key est : $value <br>";
}
arsort($note);

?>
    </li>
    <li><p>Déterminer la moyenne de la classe.</p>
 <?php
echo "la moyenne de la classe: ",round(array_sum($note)/count($note),2);

?>
</ol>
</body>
</html>

