<!--
  Script config connexion DB
-->
<?php

// A enlever si on passe pas par le .env
require_once "../../DotEnv.php";

echo "sqsdqdqdqd".$test;



// A enlever si on passe pas par le .env
(new DotEnv('../../.env'))->load();

// echo getenv('APP_ENV','DATABASE_NAME');
// dev
// echo "Je suis dans database.php";
// echo $_ENV['DATABASE_NAME'];

// On définit la class Database
class Database
{
  /* 
   * On définit nos variables
   */

  // connexion mysql
  //Ancienne varaible sans passer par le .env
  // private static $dbName = "crud_tutorial";
  // private static $dbHost = "127.0.0.1";
  // private static $dbUsername = "wil";
  // private static $dbUserPassword = "Cii$22";
  private static $cont  = null;


  // la connexion exporter
  // fonction "non reconnu"
  public function __construct()
  {
    die('Init function is not allowed');
  }

  // fonction de connexion
  public static function connect()
  {
    $dbName = $_ENV['DATABASE_NAME'];
    $dbHost = $_ENV['DATABASE_HOST'];
    $dbUsername = $_ENV['DATABASE_USER'];
    $dbUserPassword = $_ENV['DATABASE_PASSWORD'];

    // Une connexion à travers toute l'application
    if (null == self::$cont) {
      // j'essaie
      try {

        // On définit notre connexion qui est un nouvelle objet du constructeur PDO (notre connexion avec notre db)
        self::$cont =  new PDO("mysql:host=" . $dbHost . ";" . "dbname=" . $dbName, $dbUsername, $dbUserPassword);
        // ancien code sans passer par le .env
        // self::$cont =  new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName, self::$dbUsername, self::$dbUserPassword);

        // echo "connection réussie";

        // si j'arrive pas
      } catch (PDOException $e) {
        // je renvoie un message d'erreur
        echo "<br>Connection failed: <br>" . $e->getMessage();
      }
    }
    // je retourne le cont connecter ou pas si il ya ou un soucis ou pas
    return self::$cont;
  }

  // la fonction pour ce déconnecter
  public static function disconnect()
  {
    // et on définit notre connexion sur null
    $cont = null;
  }
}
?>