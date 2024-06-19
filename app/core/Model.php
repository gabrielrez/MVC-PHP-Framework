<?php

class Model
{
  use Database;
  protected $table = 'data';

  public function where($data, $data_not)
  {
    $keys = array_keys($data);
    $str = "";
    foreach ($keys as $key) {
      $str = $key . "=:" . $key;
    }
    $sql = 'SELECT * FROM $this->data WHERE id = :id && id != :id';
    $this->query($sql, ['id' => 12]);
  }

  public function first($data)
  {
  }

  public function insert($data)
  {
  }

  public function update($id, $data, $id_column = 'id')
  {
  }

  public function delete($id, $id_column = 'id')
  {
  }
}
