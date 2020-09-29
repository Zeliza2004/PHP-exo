
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Exercice 4</title>
</head>

<body>
<style>
    .titre {
        background:#DED983;
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
        background-color: cornflowerblue;
        border:none;
        margin-bottom:1em;
        width:24em;
        padding-top:1.5em;
    }
    #coordonnees label {
        position:absolute;
        font-size:90%;
        padding-top:.2em;
        left:20px;
    }
    #coordonnees input {
        margin-left:9em;
        line-height:1.4em;
        margin-bottom:.2em;
    }
    input[type="submit"], input[type="reset"] {
        background:#DED983;
        font:1.2em "Trebuchet MS", Verdana, sans-serif;
        color:#345071;
    }
    echo {
        color: crimson;
    }
</style>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <fieldset>
        <legend class="titre"><b>Saisissez vos coordonnées </b></legend>
        <table border="0"  >
            <tr>
                <td>Nom & Prénom: </td>
                <td><input type="text" name="nom" /></td>
            </tr>
            <tr>
                <td>Email :</td>
                <td><input type="text" name="email" /></td>
            </tr>
            <tr>
                <td>Tél :</td>
                <td><input type="text" name="tel" /></td>
            </tr>
            <tr>
                <td>Adresse : </td>
                <td><input type="text" name="adresse" /></td>
            </tr>

            <tr>
                <td>Code postal :</td>
                <td><input type="text" name="code" maxlength="5"/></td>
            </tr>
            <tr>

                <td><input type="submit" value="ENVOI" name="Envoyer"/></td>

            </tr>
        </table>
    </fieldset>
</form>

<!--<form method="post" action="controller.php">
    <p class="titre">Coordonnées</p>
    <fieldset id="coordonnees">
        <label for="nom">Nom : </label>
        <input type="text" id="nom" name="nom" size="30" required pattern="^[A-Za-z '-]+$"><br/>
        <label for="prénom">Prénom : </label>
        <input type="text" id="prénom" name="Prénom" size="30" required pattern="^[A-Za-z '-]+$"><br/>
        <label for="telephone">Téléphone : </label>
        <input required pattern="[0-9]{10}" type="tel" id="telephone" name="Téléphone" size="30"><br/>
        <label for="mail">Mail : </label>
        <input type="email" id="mail" name="Email" size="30"><br/>
        <label for="adresse">Adresse : </label>
        <input type="text" id="adresse" name="Adresse" size="30"><br/>
        <label for="code postal">Code postal : </label>
        <input pattern="[0-9]{5}" type="text" id="code-postal" name="CodePostal" size="30"><br/>
        <label for="ville">Ville : </label>
        <input type="text" id="ville" name="Commune" size="30"><br/>

    </fieldset>
    <p id="buttons">
        <input type="submit" value="Envoyer" />
        <input type="reset" value="Recommencer" />
    </p>
</form>-->

</body>
</html>