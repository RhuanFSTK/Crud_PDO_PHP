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
  /* Inserir na table que receber de parametro dessa função */
  $sql = "INSERT INTO {$table} ";
  /* Separa por virgula as array_keys (implode(por qual string ou simbolo separar, array_keys)) */
  $sql.= "(". implode(', ', array_keys($fields)).", vigente)";
  /* Valores da query com : (PDO) */
  $sql.= " values (".":". implode(', :', array_keys($fields)).", 'S');";

  $pdo = connect();

  $insert = $pdo->prepare($sql);
  return $insert->execute($fields);
}

function update($data){

}

function find($data){

}

function delete($data){

}

?>