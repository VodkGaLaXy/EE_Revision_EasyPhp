<?php
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
