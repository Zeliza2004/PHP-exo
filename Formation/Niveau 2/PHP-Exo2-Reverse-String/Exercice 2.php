<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Cours PHP & MySQL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">
</head>
<body>
<h1>Exercice n°2 PHP : Inverser une chaîne de caractères</h1>
<p>Créez une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine de caractères mais exactement inversée.
    Vous afficherez le résultat à l'aide d'un echo pour contrôler.</p>
<p><em>Exemple :</em></p>
<p>reverse_string("abcdef GHI") ;</p>
<p>doit afficher "IHG fedcba" ;</p>

<p>Indications:</p>
<ul>
    <li>Vous pouvez parcourir la première chaine de caractères et concaténer les caractères lus "à gauche" de la nouvelle chaine de caractères</li>
    <li>Ou alors vous pouvez parcourir la première chaine "à l'envers" (en partant de la fin) et construire la nouvelle chaine en concaténant normalement les caractères lus.</li>
</ul>

<h3>Résultat</h3>
<?php
function inversion($phrase){
    $phrase = strrev ($phrase);
    echo $phrase;
}
inversion("Terence est le meilleur")
?>


</body>
</html>