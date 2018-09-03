<?php
/**
 * @author Loretz Gaëtan
 * @version 1.0
 * @since 30.08.2018
 * Titre: EE Révision chapitre 3
 * Description : Création d'un site d'échange d'information basique
 * Copyright: Entreprise Ecole CFPT-I © 2016
 */
include_once 'Functions/Affichage.php';
include_once 'Functions/FunctionConnect.php';
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Chapitre 3</title>
    </head>
    <body>
        <?php showFormConnect(); ?>
        
        <a href='inscription.php'>Pas encore inscrit?</a>
    </body>
</html>
