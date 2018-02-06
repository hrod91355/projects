<?php
/**
 * Created by PhpStorm.
 * User: hectorrodarte
 * Date: 2/5/18
 * Time: 10:15 PM
 */

class User extends DataBaseConnector
{

    public function getUsersLastNames()
    {
        $userLastNameArr = $this->connect()->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);
//        $array = var_export($stmt);
        foreach ($userLastNameArr as $row)
        {
            echo $row['last_name'] . "\n";
        }
    }

    public function insertUserInfo() {

    }


}