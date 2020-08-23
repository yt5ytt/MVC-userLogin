<?php
  class UserGet extends Users{
    public function getUser($email, $password){
      $userRow = $this->getUsers($email, $password);
      return $userRow;
    }
  }
