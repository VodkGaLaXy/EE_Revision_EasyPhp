<?php

include_once './DbConnect.php';

function registerUser($surname, $nameUser, $login, $passwordUser) {
    try {
        $bdd = SPDO::getInstance();
        $req = $bdd->prepare("INSERT INTO tbl_users (surname,nameUser,login,passwordUser) VALUES (:surname,:nameUser,:login,:passwordUser)");
        $req->execute(array(
            'surname' => $surname,
            'nameUser' => $nameUser,
            'login' => $login,
            'passwordUser' => $passwordUser
        ));
    } catch (PDOException $e) {
        echo "Erreur " . $e->getMessage();
    }
}

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
        echo "l'utilisateur a bien été enregistré.";
    } else {
        echo "Il manque des champs ou les mots de passe ne correspondent pas !";
    }
}

/**
 * Function that connect the user
 */
function connect($login) {
    $userInformations = getUserInformations($login);
        $id = $_POST['id'];
        $password = $_POST['password'];
    if ($id == $userInformations['login'] && $password = $userInformations['passwordUser']) {
        $_SESSION['idConnect'] = $userInformations['login'];
        $_SESSION['passwordConnect'] = $userInformations['passwordUser'];
        header('Location: http://127.0.0.1:8080/EE_Revision_EasyPhp/Chapitre3/confirmation.php');
        exit;
    } else {
        echo "L'identifiant ou le mot de passe est incorrect !";
    }
}

function getUserInformations($login) {
    try {
        
        foreach (SPDO::getInstance()->query("SELECT login,passwordUser,surname,nameUser FROM tbl_users WHERE login = '$login'") as $membre) {
            return $membre;
        }
    } catch (PDOException $e) {
        echo "Erreur " . $e->getMessage();
    }
}

