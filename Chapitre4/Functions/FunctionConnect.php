<?php

include_once './DbConnect.php';

/**
 * 
 * @param type $surname
 * @param type $nameUser
 * @param type $login
 * @param type $passwordUser
 * 
 * function that register the user
 */
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
 * Function that take the informations and send them to the real register function
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
        $_SESSION['idUser'] = $userInformations['id_User'];
        header('Location: http://127.0.0.1:8080/EE_Revision_EasyPhp/Chapitre4/main.php');
        exit;
    } else {
        echo "L'identifiant ou le mot de passe est incorrect !";
    }
}

/**
 * 
 * @param type $login
 * @return type
 * Function that get the user's information by his login
 */
function getUserInformations($login) {
    try {

        foreach (SPDO::getInstance()->query("SELECT login,passwordUser,surname,nameUser,id_User FROM tbl_users WHERE login = '$login'") as $membre) {
            return $membre;
        }
    } catch (PDOException $e) {
        echo "Erreur " . $e->getMessage();
    }
}
/**
 * 
 * @param type $idUser
 * @param type $description
 * @param type $title
 * Function that insert a post in the database
 */
function insertPost($idUser, $description, $title) {
    try {
        $bdd = SPDO::getInstance();
        $req = $bdd->prepare("INSERT INTO tbl_news (id_User,title,description) VALUES (:idUser,:title,:description)");
        $req->execute(array(
            'idUser' => $idUser,
            'title' => $title,
            'description' => $description,
        ));
        echo "le post a été enregistré avec succès !";
    } catch (PDOException $e) {
        echo "Erreur " . $e->getMessage();
    }
}

/**
 * 
 * @return type
 * 
 * Function that get the Posts (all of them)
 */
function getPosts() {
    try {
        $bdd = SPDO::getInstance();
        $req = $bdd->prepare("SELECT * FROM tbl_news ORDER BY id_News DESC");
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Erreur " . $e->getMessage();
    }
}

/**
 * 
 * @param type $idUser
 * 
 * Unused function
 */
function getOwner($idUser){
    $post = getPosts();
    
}

/**
 * 
 * @param type $id
 * @return type
 * 
 * Function that get the user by his id
 */
function getUserById($id) {
    try {

        foreach (SPDO::getInstance()->query("SELECT login,passwordUser,surname,nameUser,id_User FROM tbl_users WHERE id_User = '$id'") as $membre) {
            return $membre;
        }
    } catch (PDOException $e) {
        echo "Erreur " . $e->getMessage();
    }
}

/**
 * 
 * @param type $id
 * @return type
 * Function that get a post by his id
 */
function getPostById($id){
    try {
        $bdd = SPDO::getInstance();
        $req = $bdd->prepare("SELECT * FROM tbl_news WHERE id_News = :id");
        $req->execute(array(
            'id' => $id,
        ));
        return $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Erreur " . $e->getMessage();
    }
}

/**
 * 
 * @param type $description
 * @param type $title
 * @param type $idNews
 * Function that update a post in the database by his id
 */
function updatePost($description, $title,$idNews) {
    try {
        $bdd = SPDO::getInstance();
        $req = $bdd->prepare("UPDATE tbl_news SET title = :title,description = :description WHERE id_News = :idNews");
        $req->execute(array(
            'title' => $title,
            'description' => $description,
            'idNews' => $idNews
            
        ));
        echo "le post a été modifié avec succès !";
    } catch (PDOException $e) {
        echo "Erreur " . $e->getMessage();
    }
}

/**
 * 
 * @param type $idNews
 * Function that delete a pos by his id
 */
function deletePost($idNews){
    try {
        $bdd = SPDO::getInstance();
        $req = $bdd->prepare("DELETE FROM tbl_news WHERE id_News = :idNews");
        $req->execute(array(
            'idNews' => $idNews
            
        ));
        header('Location: http://127.0.0.1:8080/EE_Revision_EasyPhp/Chapitre4/main.php');
        exit;
        echo "le post a été supprimé avec succès !";
    } catch (PDOException $e) {
        echo "Erreur " . $e->getMessage();
    }
}