<?php 
  function validate (array $fields){
    $request = request();
    $validate = [];
    foreach ($fields as $field => $type){
      switch ($type) {
        case 'a':
          $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_ADD_SLASHES);
        break;
        case 'e':
          $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_EMAIL);
        break;
        case 'i':
          $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_NUMBER_INT);
        break;
        case 's':
          $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_STRING );        
        break;
        case 'schar':
          $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_SPECIAL_CHARS);
        break;
        case 'u':
          $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_URL);
        break;
      }
    }
    /* Retornar um array como objeto */
    return (object) $validate;
  }

  /* Se algum campo do request estiver vazio a variavel $empty retorna verdadeira */
  function isEmpty(){
    $request = request();
    $empty = false;
    foreach ($request as $key => $value) {
      if(empty($request[$key])){
        $empty = true;
      }
    }
    return $empty;
  }
?>