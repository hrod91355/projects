<?php

class User extends Dbh {

  public function getAllUsers() {
      $sql = "SELECT * FROM  classmates";
      $results = $this->connect()->query($sql);
      $numRows = $results->$num_rows;
      if ($num_rows > 0) {
        while ($row = $results->fetch_assoc()) {
          $data[] = $row;
        }
        return $data;
      }
  }


}
