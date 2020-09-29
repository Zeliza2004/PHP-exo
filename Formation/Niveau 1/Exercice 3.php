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
function estIlMajeur($age){
    if ($age >= 18){
        echo "false";
    } elseif ($age < 18){
        echo "true";
    }
}
estIlMajeur(5);
echo "<br>";
estIlMajeur(34);

?>
<p>Exercice 2</p>
<?php
function  plusGrand($t, $s){
    if ($t < $s){
        echo "$s est plus grand que $t";
    }
}
plusGrand(5,34);
?>
<p>Exercice 3</p>
<?php
function plusPetit($t, $s){
    if ($t > $s){
        echo "$s est plus petit que $t";
    }
}
plusPetit(50,12);

?>
<p>Exercice 4</p>
<?php
function lePlusPetit($t, $s, $r){
    if (($t > $s) && ($r > $s)) {
        echo "$s est le plus petit nombre";
    } elseif (($s > $r) && ($t > $r)){
        echo "$r est le plus petit nombre";
    } else {
        echo "$t est le plus petit nombre";
    }
}
lePlusPetit(1,12, 178);
?>
</body>
</html>
