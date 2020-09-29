<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Cours PHP & MySQL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">
</head>
<body>
<h1>PHP Exercice 4 - La suite Fibonacci</h1>
    <p>Leonardo Pisano (Fibonacci) (1175 - 1250)</p>
<h3>Enoncé tiré de l'ouvrage Liber Abaci de Leonardo Pisano écrit en 1202.</h3>
    <p>« Possédant initialement un couple de lapins, combien de couples obtient-on en douze mois si chaque couple engendre
    tous les mois un nouveau couple à compter du second mois de son existence ? »_</p>
    <p>En d'autres termes : la suite de Fibonacci est une suite d'entiers dans laquelle chaque terme est la somme
    des deux termes qui le précèdent. Elle commence par les termes 0 et 1 et ses premiers termes sont : 0, 1, 1, 2, 3, 5, 8, 13, 21, etc</p>
    <p>Creez donc une fonction qui prend un paramètre de type entier, cela correspondra à la durée en mois de la
    reproduction des lapins, votre fonction doit retourner le nombre de couples que vous afficherez à l'aide d'un echo.</p>
    <p>Pour comprendre, de manière imagée, le fonctionnement de la suite de Fibonacci avec la reproduction des lapins, vous pouvez consulter l'image fournie dans le dossier.</p>
    <p><em>Exemple</em></p>
    <p>fibonacci(12) ;</p>
   <p>Devra afficher le résultat suivant : 144</p>
    <p>Pour aller plus loin :</p>
        <ul>
        <li> Renseignez-vous sur le principe de récursivité et essayez de programmer une seconde version de la fonction de calcul de la suite de Fibonacci de manière récursive.</li>
    <li>Culture : Cette suite est fortement liée au nombre d'or, φ (phi). Ce nombre intervient dans l'expression du terme général de la suite.
        Inversement, la suite de Fibonacci intervient dans l'écriture des réduites de l'expression de φ en fraction continue :
        les quotients de deux termes consécutifs de la suite de Fibonacci sont les meilleures approximations du nombre d'or.
        Et plus on tend vers l'infini, plus l'approximation sera précise. Amusez-vous à calculer ce quotient (valeur au rang n / valeur au rang (n-1))
        sur plusieurs valeurs pour constater cette approximation.</li>
    </ul>
<h3>Résultats</h3>
<?php

function Fibonacci($n){
    $num1 = 0;
    $num2 = 1;
    $counter = 1;
    while ($counter < $n){
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        $counter = $counter + 1;
    }
    return $num3;
}
echo Fibonacci(12);

?>
</body>
</html>


<!--// PHP code to get the Fibonacci series
// Recursive function for fibonacci series.
function Fibonacci($number){

// if and else if to generate first two numbers
if ($number == 0)
return 0;
else if ($number == 1)
return 1;

// Recursive Call to get the upcoming numbers
else
return (Fibonacci($number-1) +
Fibonacci($number-2));
}

// Driver Code
$number = 10;
for ($counter = 0; $counter < $number; $counter++){
echo Fibonacci($counter),' ';
} -->