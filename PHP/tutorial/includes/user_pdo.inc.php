<?php

class User extends Dbh {

  public function getAllUsers() {

    $stmt = $this->connect()->query("SELECT * FROM classmates");
    while ($row = $stmt->fetch()) {
      echo $row['student_lastName'];
    }
  }

  public function getUsersWithCountCheck() {
    $studentId = 6;
    $studentLastname = "colture";

    $stmt = $this->connect()->prepare("SELECT * FROM classmates WHERE student_id=? AND student_lastName=?");
    $stmt->execute([$studentId, $studentLastname]);

    if ($stmt->rowCount()) {
      while ($row = $stmt->fetch()) {
        return $row['studentLastname'];
      }
    }
    else {

    }
  }

}
