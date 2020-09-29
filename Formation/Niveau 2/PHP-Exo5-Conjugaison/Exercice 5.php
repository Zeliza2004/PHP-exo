<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Cours PHP & MySQL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">
</head>
<body>
<h1>PHP Exercice 5 - Conjugaison</h1>

<h3>Enoncé :</h3>
<p>Créez une fonction qui prend une string en paramètre. Ce paramètre sera un verbe régulier du premier groupe
    (finissant par "er" tels que parler, trier, chanter, coder, programmer, ...). Votre fonction doit conjuguer ce verbe au présent de l'indicatif et l'afficher à l'écran.</p>

<p>Contrainte</p>
<ul>
    <li>La chaîne passée en paramètre ne doit pas dépasser 15 caractères ni contenir d'espaces.</li>
    <li>Vérifiez que la chaîne passée en paramètre se termine bien par "er".</li>
</ul>
<p>Exemple :</p>

<p>En entrée :<em> "programmer"</em></p>

<p>En sortie :</p>

    <ul>
        <li><em>je programme</em></li>
        <li><em>tu programmes</em></li>
        <li><em>il programme</em></li>
        <li><em>nous programmons</em></li>
        <li><em>vous programmez</em></li>
        <li><em>ils programment</em></li>
    </ul>

    <p>Réfléchissez bien à la manière dont vous allez vous y prendre ! Vous pouvez notamment :</p>
<ul>
    <li>supprimer des bouts de chaines de caractères</li>
    <li>concaténer (rajouter à la fin) de nouvelles chaines</li>
    <li>remplacer un bout de chaine par un autre</li>
    <li>... une fois que vous savez comment vous allez vous y prendre, recherchez s'il n'existe pas déjà des fonctions toute prêtes en PHP pouvant vous aider.</li>
</ul>
<p>Testez ensuite votre code sur de nombreux verbes pour vous assurer que ça fonctionne bien.</p>

<p>Pour aller plus loin :</p>
<p>* Essayez de prendre en compte les verbes demandant des traitements particuliers tels que "manger".</p>

<h3>Résultat</h3>

<?php
function premier_groupe_present_indicatif($verb){
    // le pattern regexp qui détermine si le verbe est bien un verbe du premier groupe
    //    // => désigne les contour de l'expression régulière
    //    ^$ => indique respectivement les début et fin de chaine
    //    () => délimite un groupe
    //    [A-Za-z] prend toute les lettre sans accent de a à z en majuscule et en minuscule
    //    [\u00C0-\u00FF] prend tous les caractères de l'alphabet mais avec accent (unicode)
    $first_group_pattern = '/^([A-Za-zÀ-ÿ]{3,})(er)$/';
    if(preg_match($first_group_pattern,$verb) && strlen($verb) <= 15){
        $available = [
            0 => [
                'pronom' => 'je',
                'end' => 'e'
            ],
            1 => [
                'pronom' => 'tu',
                'end' => 'es'
            ],
            2 => [
                'pronom' => 'il',
                'end' => 'e'
            ],
            3 => [
                'pronom' => 'nous',
                'end' => 'ons'
            ],
            4 => [
                'pronom' => 'vous',
                'end' => 'ez'
            ],
            5 => [
                'pronom' => 'ils',
                'end' => 'ent'
            ]
        ];
        for($i = 0; $i <= count($available) - 1; $i++){
            if((strtolower(substr($verb,strlen($verb) - 3,1))) == 'g' && $i == 3){
                echo $available[$i]['pronom'].' '.strtolower(substr($verb,0,strlen($verb) - 2)).'e'.$available[$i]['end'].'<br>';
            }else{
                echo $available[$i]['pronom'].' '.strtolower(substr($verb,0,strlen($verb) - 2)).$available[$i]['end'].'<br>';
            }
        }

    }else{
        echo 'Ceci n\'est pas un verbe du premier groupe';
    }
}
echo '<br>--------------------------------<br>';
premier_groupe_present_indicatif('Péter');
echo '<br>--------------------------------<br>';
premier_groupe_present_indicatif('Manger');
echo '<br>--------------------------------<br>';
premier_groupe_present_indicatif('Programmer');
echo '<br>--------------------------------<br>';
?>
</body>
</html>

<!--
// le pattern regexp qui détermine si le verbe est bien un verbe du premier groupe
//    // => désigne les contour de l'expression régulière
//    ^$ => indique respectivement les début et fin de chaine
//    () => délimite un groupe
//    [A-Za-z] prend toute les lettre sans accent de a à z en majuscule et en minuscule
//    [\u00C0-\u00FF] prend tous les caractères de l'alphabet mais avec accent (unicode)


-->
<!--function conjugaison($verbe) {
// Si $verbe fait + de 15 caractères, on affiche une erreur, et on arrête la fonction
// Si $verbe a un espace, on affiche une erreur et on arrête la fonction
// Si $verbe ne finit pas par "er", on affiche une erreur et on arrête la fonction
// Les 3 cas ci-dessous sont passés, donc c'est un verbe acceptable
// Je créé un tableau $pronoms avec tous les pronoms personnels
// Je créé un tableau $terminaisons avec toutes les terminaisons des verbes du 1er groupe
// Pour chaque élément de $terminaisons
// J'enlève "er" de $verbe
// J'ajoute la $terminaison[$i]
// j'affiche le $pronoms[$i] suivi de la $terminaisons[$i]
}-->
