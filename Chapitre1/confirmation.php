<?php
/**
 * @author Loretz Gaëtan
 * @version 1.0
 * @since 30.08.2018
 * Titre: EE Révision chapitre 1
 * Description : Création d'un site d'échange d'information basique
 * Copyright: Entreprise Ecole CFPT-I © 2016
 */
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Chapitre 1</title>
    </head>
    <body>
        <h1>Bonjour <?php echo $_SESSION['firstName'].' '.$_SESSION['name']; ?> vous êtes connecté !</h1>
        <a href="http://127.0.0.1/EE_Revision/Chapitre1/index.php">Retour à l'accueil</a>
    </body>
</html>
