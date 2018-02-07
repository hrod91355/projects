<?php



class Dbh
{

    //more info on https://phpdelusions.net/pdo

    public function connect()
    {
        $servername = "127.0.0.1";
        $username = "root";
        $password = "potatoes";
        $dbname = "company_a";
        $charset = "utf8mb4";

        try {
            $dsn = "mysql:host=".$servername.";dbname=".$dbname.";charset=".$charset;
            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

    }
}
