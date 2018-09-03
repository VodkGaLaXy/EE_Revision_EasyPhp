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

$UserNameSurname = getUserInformations($_SESSION['idConnect']);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Chapitre 3</title>
    </head>
    <body>
        <h1>Bonjour <?php echo $UserNameSurname['surname'].' '.$UserNameSurname['nameUser']; ?> vous êtes connecté !</h1>
        <a href="http://127.0.0.1:8080/EE_Revision_EasyPhp/Chapitre3/index.php">Retour à l'accueil</a>
    </body>
</html>
