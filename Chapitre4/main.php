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
$UserNameSurname = getUserInformations($_SESSION['idConnect']);
if (isset($_POST['submitNews'])) {
    insertPost($UserNameSurname['id_User'], $_POST['description'], $_POST['title']);
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
        <h2>Bonjour <?php echo $UserNameSurname['surname'] . ' ' . $UserNameSurname['nameUser']; ?>, voici votre fil d'actualités !</h2>
        <?php
        showFormNews();
        showPost();
        ?>

    </body>
</html>
