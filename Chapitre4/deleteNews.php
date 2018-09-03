<?php
/**
 * @author Loretz Gaëtan
 * @version 1.0
 * @since 30.08.2018
 * Titre: EE Révision chapitre 4
 * Description : Création d'un site d'échange d'information basique
 * Copyright: Entreprise Ecole CFPT-I © 2016
 */
include_once 'Functions/Affichage.php';
include_once 'Functions/FunctionConnect.php';
session_start();
if(isset($_POST['confirm'])){
    if($_POST['confirmation']=="oui"){
        deletePost($_GET['id']);
        echo "Le post a bien été supprimé!";
        echo "<a href=\"http://127.0.0.1:8080/EE_Revision_EasyPhp/Chapitre4/main.php\">retour</a>";
        
    }else{
        echo "Le post n'a pas été supprimé.";
        echo "<a href=\"http://127.0.0.1:8080/EE_Revision_EasyPhp/Chapitre4/main.php\">retour</a>";
        
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Chapitre 4</title>
    </head>
    <body>
        <form method="post" action="">
            <input type="radio" name="confirmation" value="oui" id="oui" checked/>
            <label for="oui">Oui</label>
            <input type="radio" name="confirmation" value="non" id="non"/>
            <label for="non">Non</label>
            <input type="submit" name="confirm" value="Confirmer"/>
        </form>
    </body>
</html>