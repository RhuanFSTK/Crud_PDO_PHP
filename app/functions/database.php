<?php 

function connect(){

  $pdo = new \PDO("mysql:host=127.0.0.1;dbname=phpFullstack;
  charset=utf8", 
  "root", 
  "root");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  return $pdo;

}

function create($table, $fields){
  
  /* se fields não for um array, transforma em array */
  if(!is_array($fields)){
    $fields = (array) $fields;
  }
  /* Montagem de query */
  $sql = "INSERT INTO {$table} ";
  $sql .= "(" . implode(', ', array_keys($fields)).")";
  $sql .= " values (".":". implode(',:', array_values($fields)).")";

  $pdo = connect();

  $insert = $pdo->prepare($sql);

  return $insert->execute($fields);

  dd($sql);



}

function update($data){

}

function find($data){

}

function delete($data){

}

?>