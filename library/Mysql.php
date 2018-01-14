<?php

namespace Library;

use Library\Database;

class Mysql implements Database {

  private const HOST = '127.0.0.1';
  private const DATABASE = 'garage';
  private const USERNAME = 'usr_garage';
  private const PASSWORD = 'garage';
  private $_connexion;

  public function __construct()
  {
    try {
      $this->_connexion = new \PDO("mysql:host=".self::HOST.";dbname=".self::DATABASE.";charset=utf8", self::USERNAME, self::PASSWORD);
    } catch (\Exception $e) {
        throw new \Exception('The connexion database forbidden', 403);
    }
  }

  public function getConnexion()
  {
    return $this->_connexion;
  }

  public function closeConnexion()
  {

  }

}
