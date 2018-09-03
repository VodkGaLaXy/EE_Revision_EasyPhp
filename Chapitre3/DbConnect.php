<?php
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

