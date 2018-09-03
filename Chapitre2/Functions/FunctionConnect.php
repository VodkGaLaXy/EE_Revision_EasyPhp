<?php

include_once './DbConnect.php';

/**
 * Function that register the user
 */
function register() {
    $firstName = $_POST['firstName'];
    $name = $_POST['name'];
    $id = $_POST['id'];
    $password = $_POST['password'];
    $passwordValidation = $_POST['passwordValidation'];

    if (isset($firstName) && isset($name) && isset($id) && isset($password) && isset($passwordValidation) && $password == $passwordValidation) {
        registerUser($firstName, $name, $id, $password);
        header('Location: http://127.0.0.1:8080/EE_Revision_EasyPhp/Chapitre2/inscription.php');
        exit;
    } else {
        echo "Il manque des champs ou les mots de passe ne correspondent pas !";
    }
}

/**
 * Function that connect the user
 */
function connect() {
    $id = $_POST['id'];
    $password = $_POST['password'];
    if ($id == $_SESSION['id'] && $password = $_SESSION['password']) {
        $_SESSION['idConnect'] = $id;
        $_SESSION['passwordConnect'] = $password;
        header('Location: http://127.0.0.1:8080/EE_Revision_EasyPhp/Chapitre2/confirmation.php');
        exit;
    } else {
        echo "L'identifiant ou le mot de passe est incorrect !";
    }
}

