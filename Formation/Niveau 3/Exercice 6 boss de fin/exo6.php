<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Cours PHP & MySQL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">
</head>
<style>
    .titre {
        background:pink;
        color:#345071;
        padding:.2em .3em;
        font-size:1.2em;
        border:2px outset #DED983;
        position:relative;
        margin-bottom:-1em;
        width:10em;
        margin-left:1em;
        margin-top:1em;
    }
    fieldset {
        background-color: hotpink;
        border:none;
        margin-bottom:1em;
        width:24em;
        padding-top:1.5em;
    }
    label {
        position:absolute;
        font-size:90%;
        padding-top:.2em;
        left:20px;
    }
    input {
        margin-left:9em;
        line-height:1.4em;
        margin-bottom:.2em;
    }
</style>
<body>
<form method="POST" action="upload.php" enctype="multipart/form-data">
    <p class="titre">Compétition e-sport</p>
    <fieldset id="Combat">
        <label for="nom1">Joueur 1 : </label>
        <input type="text" id="nom1" name="nom1" size="30"><br/>
        <label for="nom2">Joueur 2 : </label>
        <input type="text" id="nom2" name="nom2" size="30"><br/>
        <label for="combat">Match : </label>
        <input type="text" id="combat" name="combat" size="30"><br/>
        <label for="vainqueur">Vainqueur : </label>
        <input type="text" id="vainqueur" name="vainqueur" size="30"><br/>
    </fieldset>
       <!-- On limite le fichier à 100Ko -->
    <input type="hidden" name="MAX_FILE_SIZE" value="100000">
    Fichier : <input type="file" name="avatar">
    <input type="submit" name="envoyer" value="Envoyer le fichier">
</form>
</body>
</html>




