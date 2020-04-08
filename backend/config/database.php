<?php

class Database {
  // Hostname
  private $DB_HOST = 'localhost';

  // Database Name
  private $DB_NAME = 'knivesandtools';

  // Database User
  private $DB_USER = 'ml-project';

  // Database Password
  private $DB_PW = 'Teste123!';

  // Database Encoding Charset
  // Utf8 accepts majority of characters
  private $DB_CHARSET = 'utf8';

  public $mysqli;

  // Constructor is a magic method
  // This is the first method called by a Class
  function __construct() {

    // This will try to connect to Mysqli if it fails
    // will catch the mysqli error for easily debug
    try {
      $this->mysqli = new mysqli($this->DB_HOST, $this->DB_USER, $this->DB_PW, $this->DB_NAME);
      $this->mysqli->set_charset($this->DB_CHARSET);
    } catch (\mysqli_sql_exception $e) {
      throw new \mysqli_sql_exception($e->getMessage(), $e->getCode());
    }
  }
}