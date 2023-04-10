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
  $pdo = connect();
  
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

  $insert = $pdo->prepare($sql);
  return $insert->execute($fields);
}

function all($table){
  $pdo = connect();

  /* Selecionar tudo da table enviada por parametro */
  $sql = "SELECT * FROM {$table} WHERE vigente = 'S'";
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
  /* Troca o valor do primeiro parametro pelo do segundo $field = $value nesse caso */
  $find->bindValue($field, $value);
  $find->execute();
  return $find->fetch();
}

function update($table, $fields, $where){
  $pdo = connect();
  
  /* Se fields(dados) não for um array, transforma em array */
  if(!is_array($fields)){
    $fields = (array) $fields;
  }


  /* Montar a query com array_map de acordo que fique key = :key (id = :id, name = :name...)  */
  $data = array_map(function($field){
    return "{$field} = :{$field}";
  }, array_keys($fields));

  $sql = "UPDATE {$table} SET ";
  $sql.= implode(', ', $data);
  $sql.= " WHERE {$where[0]} = :{$where[0]}";

  /* Fazer o merge nos dois array (fields e where indice 0 está o key e indice 1 está o value) */
  $data = array_merge($fields, [$where[0]=>$where[1]]);

  $update = $pdo->prepare($sql);
  $update->execute($data);
  /* rowCount - contagem de quantas linhas ele alterou se vier 0 = false (não alterou)*/
  return $update->rowCount();

}

function delete($table, $field, $value){
  $pdo = connect();

  /* $sql = "DELETE FROM {$table} WHERE id = :{$field}"; */
  $sql = "UPDATE {$table} SET vigente = 'N' WHERE id = :{$field};";
  $delete = $pdo->prepare($sql);
  /* Troca o valor do primeiro parametro pelo do segundo $field = $value nesse caso */
  $delete->bindValue($field, $value);
  
  return $delete->execute();
}

?>