<?php

class ViewUser extends User {

  public function showAllUsers() {
    $datas = $this->getAllUsers();
    // foreach ($datas as $data) {
    //   echo $data['sutdent_id'];
    //   echo $data['student_lastName'];
    // }
  }


}
