<!--
  Script config connexion DB
-->
<?php
// On définit la class Database
class Database
{
  /* 
   * On définit nos variables de connexion mysql
   */

  private static $cont  = null;

  //* Variable utilisée en private pour etre rappeler avec self:: */
  // private static $dbName = "";
  // private static $dbHost = "";
  // private static $dbUsername = "";
  // private static $dbUserPassword = "";


  // la connexion exporter
  // fonction "non reconnu"
  public function __construct()
  {
    die('Init function is not allowed');
  }

  // fonction de connexion
  public static function connect()
  {
    /* 
   * On définit nos variables de connexion mysql
   */

    $appEnv = $GLOBALS['APP_ENV'];
    $dbName = $GLOBALS['DATABASE_NAME'];
    $dbHost = $GLOBALS['DATABASE_HOST'];
    $dbUsername = $GLOBALS['DATABASE_USER'];
    $dbUserPassword = $GLOBALS['DATABASE_PASSWORD'];

    // Une connexion à travers toute l'application
    if (null == self::$cont) {
      // j'essaie
      try {
        // On définit notre connexion qui est un nouvelle objet du constructeur PDO (notre connexion avec notre db) avec les variables "private static".
        // self::$cont =  new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName, self::$dbUsername, self::$dbUserPassword);

        // On définit notre connexion qui est un nouvelle objet du constructeur PDO (notre connexion avec notre db) avec les variables "$global definit dans env.php.
        self::$cont =  new PDO("mysql:host=" . $dbHost . ";" . "dbname=" . $dbName .  ";" . "charset=utf8", $dbUsername, $dbUserPassword);

      //   $pdo = new PDO('mysql:host=localhost;dbname=blogpoo;charset=utf8', 'root', '', [
      //     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      //     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      // ]);
        // echo "Je suis en mode: " . strtoupper($appEnv) ."<br>";
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