<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Cours PHP & MySQL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">
</head>
<body>
<h1>Enoncé</h1>
<p>Créez une fonction qui prend un paramètre de type entier, cela déterminera la hauteur (en lignes) d'un triangle isocèle
    rempli d'étoiles qu'il faudra afficher à l'écran. Le sommet du triangle sera toujours constitué de 2 étoiles comme dans l'exemple ci-dessous.</p>
<p>Exemple</p>
<p>display_triangle(10) ;</p>
<p>Produira le résultat suivant :</p>
<p>**</p>
<p>****</p>
<p>******</p>
<p>********</p>
<p>**********</p>
<p>************</p>
<p>**************</p>
<p>****************</p>
<p>******************</p>
<p>********************</p>

<p>Le triangle fait 10 lignes de haut. Vous trouverez comment faire pour que le résultat s'affiche bien comme ça en HTML.</p>

<?php
function display_triangle($hauteur){
//Boucle total de ligne (Horizontal)
    for ($i=1; $i <= $hauteur; $i++) {
        for($j=1;$j<=(2*$hauteur)-1;$j++) {
            if($j >=$hauteur-($i-1) && $j <=$hauteur+($i-1) ){
            echo "*";
        }else{
            echo "&nbsp;&nbsp;";
        }
    }
        echo "</br>";
    }

}
display_triangle(10)
?>
</body>
</html>






























<!--function pyramid($int) {
for($i = 0; $i < $int; $i++) {
echo '<div>';
    for($j = 0; $j <= $i; $j++) {
    echo'**';
    }
    echo '</div>';
}
};

echo '<div style="text-align: center;">';
    echo pyramid(10);
    echo '</div>';-->