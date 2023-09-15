<?php
class Query {
    private static $connection;
    private static $isInitialized = false;
    private function __construct() {}
    private static function connect() {
        if(self::$isInitialized) {
            return self::$connection;
        }
        try {
            $servername = "localhost";
            $username = "username";
            $password = "password";
            $database = "database";

            // Create connection
            self::$connection = mysqli_connect($servername, $username, $password, $database);

        } catch(PDOException $e) {
            // if(DEBUG_MODE) {
                print "<span class='span_error'>No se pudo conectar: ".$e->getMessage()."<br/>".$e->getCode()."</span>";
            // }
            return false;
        }
        self::$isInitialized = true;
        foreach (glob("modelos/*.php") as $filename) { //All models are included dinamycally
            if($filename!="modelos/Query.php") {
                include_once $filename;
            }
        }
    }
    private static function runQuery($sql) {
        self::connect();
        if(self::$isInitialized) {
            try {
                $result = self::$connection->query($sql);
            } catch(PDOException $e) {
                //if(DEBUG_MODE) {
                    echo "<b>®</b><p class='error' style='width:100%;height:500px;display:none;'><b>ERROR:</b>";
                    echo $e->getMessage()."<br/>";
                    echo "<textarea style='width:100%;height:500px;'>$sql</textarea></p>";
                //}
                return false;
            }
            return $result;
        }
    }

    private static function select($sql) {
        $rows = array();
        $result = self::runQuery($sql);
        if($result === false) { // If query failed, return `false`
            return false;
        }
        try {
            while($row = $result->fetch_array(MYSQLI_ASSOC)) { // If query was successful, retrieve all the rows into an array (it will return an array even if it's only one result.')
                $rows[] = $row;
            }
        } catch(PDOException $pdoe) {
            print "No se encontraron resultados, refina tus criterios de búsqueda";
            print "<script>console.log(".$e->getMessage().")</script>";
        }
        if($rows === false) {
            $error = db_error(); // Handle error - inform administrator, log to file, show error page, etc.
            return false;
        }
        return $rows;
    }
    public static function selectLibre($query) {
        $q = strip_tags($query);
        $rows = self::select($q);
        return $rows;
    }

    private static function insert($sql) {
        $result = self::runQuery($sql);
        if($result === false) { // If query failed, return `false`
            return false;
        }
    }
    public static function insertLibre($query) {
        $q = strip_tags($query);
        $rows = self::insert($q);
        return $rows;
    }
}
?>
