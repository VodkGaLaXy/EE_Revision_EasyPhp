<?php

/* function getConnexion(){
  $servername = "127.0.0.1";
  $username = "root";
  $password = "";

  try {
  $db = new PDO("mysql:host=$servername;dbname=eerevision", $username, $password);
  // set the PDO error mode to exception
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
  }
  catch(PDOException $e)
  {
  echo "Connection failed: " . $e->getMessage();
  }
  return $db;
  } */
/**
 * @author Gaetan
 * La classe sert à se connecter à la base
 */
class SPDO {

    private static $PDOInstance = null;

    const SQL_HOST = '127.0.0.1';
    const SQL_USER = 'root';
    const SQL_PASS = '';
    const SQL_DTB = 'eerevision';

    public static function getInstance() {
        if (self::$PDOInstance == NULL) {
            self::$PDOInstance = new PDO('mysql:dbname=' . self::SQL_DTB . ';host=' . self::SQL_HOST, self::SQL_USER, self::SQL_PASS);
        }
        return self::$PDOInstance;
    }
    public static function query($query)
  {
    return self::$PDOInstance->query($query);
  }

}
/*foreach (SPDO::getInstance()->query('SELECT * FROM `tbl_users`') as $membre)
{
  echo '<pre>', print_r($membre) ,'</pre>';
}*/

