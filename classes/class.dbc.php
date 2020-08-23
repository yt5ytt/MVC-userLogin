<?php

  class Dbc {

    private $hostname = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbName = 'oopphp';

    protected function connect(){

      $dsn = 'mysql: host=' . $this->hostname . '; dbname=' . $this->dbName;
      $pdo = new PDO($dsn, $this->username, $this->password);
      $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
      return $pdo;

    }

  }
