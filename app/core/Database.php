<?php

trait Database
{
  private static $instance;

  public static function getConn()
  {
    if (!isset(self::$instance)) {
      self::$instance = new \PDO('mysql:host=localhost;dbname=my_db', 'root', '');
    }
    return self::$instance;
  }

  public function query($query, $data = [])
  {
    $conn = $this->getConn();
    $stmt = $conn->prepare($query);
    $check = $stmt->execute($data);
    if ($check) {
      $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
      if (is_array($res) && count($res)) {
        return $res;
      }
    }
    return false;
  }

  public function getRow($query, $data = [])
  {
    $conn = $this->getConn();
    $stmt = $conn->prepare($query);
    $check = $stmt->execute($data);
    if ($check) {
      $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
      if (is_array($res) && count($res)) {
        return $res[0];
      }
    }
    return false;
  }
}
