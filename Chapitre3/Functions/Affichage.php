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
    <button><a href="SessionDestroy.php">Déconnection</a></button>
    <?php
}

function showPost(){
    $posts[] = getPosts();
    $totalPosts = count($posts[0]['title']);
    ?>
    <table>
        <tbody>
            <?php for($i = 0;$i<$totalPosts;$i++){ ?>
            <tr><td><h2><?php echo $posts[$i]['title'] ?></h2></td></tr>
            <tr><td><?php echo $posts[$i]['description'] ?></td></tr>
            <?php } ?>
        </tbody>
    </table>
    <?php
}
