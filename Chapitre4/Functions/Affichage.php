<?php
include_once 'FunctionConnect.php';

function showFormRegister() {
    ?>
    <fieldset>
        <legend>Inscription</legend>
        <form method="post" action="">
            <table>
                <tbody>
                    <tr><td>Prénom:</td></tr>
                    <tr><td><input name='firstName' type='text' value=''/></td></tr>
                    <tr><td>Nom:</td></tr>
                    <tr><td><input name='name' type='text' value=''/></td></tr>
                    <tr><td>Identifiant:</td></tr>
                    <tr><td><input name='id' type='text' value=''/></td></tr>
                    <tr><td>Mot de passe:</td></tr>
                    <tr><td><input name='password' type='password' value=''/></td></tr>
                    <tr><td>Validation du mot de passe:</td></tr>
                    <tr><td><input name='passwordValidation' type='password' value=''/></td></tr>
                    <tr><td><input name='submitRegister' type='submit' value='Valider'/></td></tr>
                </tbody>
            </table>
        </form>
    </fieldset>
    <?php
}

function showFormConnect() {
    ?>
    <fieldset>
        <legend>Connection</legend>
        <form method="post" action="">
            <table>
                <tbody>
                    <tr><td>Identifiant:</td></tr>
                    <tr><td><input name='id' type='text' value=''/></td></tr>
                    <tr><td>Mot de passe:</td></tr>
                    <tr><td><input name='password' type='password' value=''/></td></tr>
                    <tr><td><input name='submitConnect' type='submit' value='Valider'/></td></tr>
                </tbody>
            </table>
        </form>
    </fieldset>
    <?php
}

function showFormNews() {
    ?>

    <fieldset>
        <legend>Nouveau post</legend>
        <form method="post" action="">
            <table>
                <tbody>
                    <tr><td>Titre:</td></tr>
                    <tr><td><input name='title' type='text' value=''/></td></tr>
                    <tr><td>Description:</td></tr>
                    <tr><td><textarea name="description" rows="30" cols="100"></textarea></td></tr>
                    <tr><td><input name='submitNews' type='submit' value='Valider'/></td></tr>
                </tbody>
            </table>
        </form>
    </fieldset>
    <button><a href="http://127.0.0.1:8080/EE_Revision_EasyPhp/Chapitre4/index.php">Déconnection</a></button>
    <?php
}

function showPost() {
    $posts = getPosts();

    $totalPosts = count($posts);
    ?>
    <table>
        <tbody>
            <?php for ($i = 0; $i < $totalPosts; $i++) { ?>
                <tr><td><h2><?php echo $posts[$i]['title'] ?></h2></td></tr>
                <tr><td><?php echo $posts[$i]['description'] ?></td></tr>
                <?php
                $owner = getUserById($posts[$i]['id_User']);
                ?>
                <tr><td>Auteur: <?php echo $owner['surname'] ?></td></tr>
        <?php if ($posts[$i]['id_User'] == $_SESSION['idUser']) { ?>
                    <tr><td>
                            <button><a href="http://127.0.0.1:8080/EE_Revision_EasyPhp/Chapitre4/updateNews.php?id=<?php echo $posts[$i]['id_News']; ?>&amp;currentPost=<?php echo $i; ?>">Modifier</a></button>
                            <button><a href="http://127.0.0.1:8080/EE_Revision_EasyPhp/Chapitre4/deleteNews.php?id=<?php echo $posts[$i]['id_News']; ?>&amp;currentPost=<?php echo $i; ?>">Supprimer</a></button>
                        </td></tr>
                <?php
                }
            }
            ?>
        </tbody>
    </table>
    <?php
}
function showFormNewsUpdate() {
    ?>

    <fieldset>
        <legend>Données du post</legend>
        <form method="post" action="">
            <table>
                <tbody>
                    <tr><td>Titre:</td></tr>
                    <tr><td><input name='title' type='text' value='<?php echo getPostById($_GET['id'])[0]['title']; ?>'/></td></tr>
                    <tr><td>Description:</td></tr>
                    <tr><td><textarea name="description" rows="30" cols="100"><?php echo getPostById($_GET['id'])[0]['description']; ?></textarea></td></tr>
                    <tr><td><input name='updateNews' type='submit' value='Valider'/></td></tr>
                </tbody>
            </table>
        </form>
    </fieldset>
    <button><a href="http://127.0.0.1:8080/EE_Revision_EasyPhp/Chapitre4/main.php">Retour</a></button>
    <?php
}
