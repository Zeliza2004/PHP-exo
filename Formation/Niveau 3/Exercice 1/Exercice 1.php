<?php
if(isset($_COOKIE["dates_visites"])){
    $liste_visites =$_COOKIE["dates_visites"];
    $dates=unserialize($_COOKIE["dates_visites"]);
    $dates[]=time();
    setcookie("dates_visites",serialize($dates));
    echo " Vous avez consulté cette page ".count($dates)." fois , voici les détails:";
    echo "<ul>";
    foreach ($dates as $key => $value) {
        echo "<li>".date("d-m-Y H:i:s",$value)."</li>";
    }
    echo "</ul>";
}
else{
    $dates[]=time();
    setcookie("dates_visites",serialize($dates));
    echo "C'est votre première visite :".date("d-m-Y H:i:s",time());
}
?>
<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Cours PHP & MySQL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">
</head>
<body>
<h1>Objectif :</h1>
<ol>
    <li>Manipuler les cookies.</li>
    <li>Calculer le nombre de visites d'une page</li>
</ol>

<h3>Énoncé :</h3>

<p>Ecrire un script PHP qui permet de sauvegarder les heures de visites dans un
    cookie, et affiche les détails des visites comme suit :</p>

<p>Pour la première visite :</p>

<p style="text-align: center"><em>C'est votre premiere visite: 18-02-2016 23:12:38</em></p>
<p>Par la suite affiche la liste des heures :</p>
<div style="text-align: center"><em>Vous avez consulté cette page 4 fois, voici les détails</em></div>
<div style="text-align: center; margin-top: 10px" >
         <ul style="display: inline-block">
            <li><em>18-02-2016 23:24:03</em></li>
            <li><em>18-02-2016 23:24:05</em></li>
            <li><em>18-02-2016 23:24:06</em></li>
            <li><em>18-02-2016 23:24:09</em></li>
         </ul>
</div>
<h3>Résultat</h3>

</body>
</html>