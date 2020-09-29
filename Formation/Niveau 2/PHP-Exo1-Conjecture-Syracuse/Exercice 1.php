<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Cours PHP & MySQL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">
</head>
<body>
<h1>Exercice PHP n°1 - La Conjecture de Syracuse</h1>
    <p>Inventée par Lothar Collatz (1910 - 1990)</p>
    <p>Il s'agit d'une séquence très simple d'opérations sur les nombres qui ramène toujours au même endroit, le nombre 1.
    D'abord un amusement, cette étonnante suite est devenue troublante pour les mathématiciens qui ne se lassent
    pas de l'explorer sans avoir encore réussi à la domestiquer.<br></p>
    <p>Voir la représentation avec l'image ci-jointe.</p>
<h3>Ennoncé de l'exercice</h3>
<p>Créez une fonction PHP qui prend comme argument n'importe quel nombre entier supérieur
    à zéro (faîtes les tests nécessaires pour garantir la validité de l'argument).</p>

<p>Tant que ce nombre est différent de 1 : </p>
    <ul>
        <li>S'il est pair divisez-le par 2.</li>
        <li>S'il est impair multipliez-le par 3 et ajoutez 1.</li>
    </ul>
<p>Au final votre fonction doit afficher une série de nombres, le dernier de ces nombres doit être obligatoirement 1.
    La fonction réalisera des 'echo' de chaque étape intermédiaire.</p>

<h4>Exemple :</h4>

<p>Valeur de départ : <em>25</em><br></p>
<p>Affichage attendu :<br></p>
<p><em>25 76 38 19 58 29 88 44 22 11 34 17 52 26 13 40 20 10 5 16 8 4 2 1</em><br></p>


<p>En savoir plus sur la conjecture de :<a href="http://villemin.gerard.free.fr/Wwwgvmm/Iteration/Syracuse.htm" target="_blank">Syracuse</a>.</p>
<h3>Résultat :</h3>
<?php
function syracuse($i){
    echo $i . " ";
    if (is_int($i)) {
        do {
            if ($i % 2 === 1) {
                $i = (($i * 3) + 1);
            } else {
                $i = ($i / 2);
            }
            echo $i . " ";
        } while ($i != 1);
    } else {
        echo "n'est pas un nombre!";
    }
}
syracuse("azerty");

?>
</body>
