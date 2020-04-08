<?php

class Database {
  private $DB_HOST = 'localhost';
  private $DB_NAME = 'knivesandtools';
  private $DB_USER = 'ml-project';
  private $DB_PW = 'Teste123!';
  private $DB_CHARSET = 'utf8';

  public $mysqli;

  function __construct() {
    try {
      $this->mysqli = new mysqli($this->DB_HOST, $this->DB_USER, $this->DB_PW, $this->DB_NAME);
      $this->mysqli->set_charset($this->DB_CHARSET);
    } catch (\mysqli_sql_exception $e) {
        throw new \mysqli_sql_exception($e->getMessage(), $e->getCode());
    }
  }
}