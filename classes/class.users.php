<?php

class Users extends Dbc {

  //create table users function
  protected function tableUsers(){
    $sql = "CREATE TABLE IF NOT EXISTS users(
      id int(5) not null auto_increment primary key,
      first_name varchar(50) not null,
      last_name varchar(50) not null,
      email varchar(50) not null,
      password varchar(50) not null,
      status int(1) not null default 0
    ) Engine=InnoDB COLLATE utf8mb4_general_ci";
    $result = $this->connect()->prepare($sql);
    $result->execute();
  }

  protected function setUsers($firstname,$lastname, $email, $password){
    $sql = "INSERT INTO users (first_name, last_name, email, password) values (?, ?, ?, ?)";
    $result = $this->connect()->prepare($sql);
    $result->execute([$firstname, $lastname, $email, $password]);
  }
}
