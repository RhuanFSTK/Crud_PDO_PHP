<?php 

function connect(){
  $pdo = new \PDO("mysql:host=localhost;dbname=PHPFullstack;
  charset=utf8", 
  "root", 
  "root");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  return $pdo;
}

function create($table, $fields){
  /* Se fields(dados) não for um array, transforma em array */
  if(!is_array($fields)){
    $fields = (array) $fields;
  }
  
  /* Montagem de query */
  /* Inserir na table que receber de parametro nessa função */
  $sql = "INSERT INTO {$table} ";
  $sql.= "(". implode(', ', array_keys($fields)).", vigente)";
  $sql.= " values (:". implode(', :', array_keys($fields)).", 'S')";
  $sql.= " ON DUPLICATE KEY UPDATE ";

  $update_arr = array();
  foreach ($fields as $key => $value) {
      $update_arr[] = $key . " = VALUES(".$key.")";
  }

  $sql.= implode(', ', $update_arr);
  $sql.= ", vigente = VALUES(vigente)";
  $sql.= ";";
  $pdo = connect();

  $insert = $pdo->prepare($sql);
  return $insert->execute($fields);
}

function all($table){
  $pdo = connect();

  /* Selecionar tudo da table enviada por parametro */
  $sql = "SELECT * FROM {$table}";
  $list = $pdo->query($sql);
  $list->execute();
  return $list->fetchAll();
}


function find($table, $field, $value){
  $pdo = connect();

  $value = filter_var($value, FILTER_SANITIZE_NUMBER_INT);

  $sql = "SELECT * FROM {$table} ";
  $sql.= "WHERE {$field} = :{$field};";

  $find = $pdo->prepare($sql);
  $find->bindValue($field, $value);
  $find->execute();
  return $find->fetch();
}

function update($data){
  /* UPDATE $table SET $fields = 'dados novo' WHERE id = '$id' AND vigente = 'S'; */
  /* $sql = "INSERT INTO {$table} "; */

}

function delete($data){

}

?>