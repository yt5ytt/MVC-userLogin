<?php

class UserSet extends Users {

  public function createTable(){
    $table = $this->tableUsers();
  }

  public function setUser($firstname, $lastname, $email, $password){
    $setUser = $this->setUsers($firstname, $lastname, $email, $password);
    return $setUser;
  }

}
