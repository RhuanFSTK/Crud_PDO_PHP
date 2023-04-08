<?php 
  /* Função var_dump + die */
  function vd($dump){
    var_dump($dump);
    die();
  }
  
  /* função print_r + die */
  function pr($print_r){
    print_r($print_r);
    die();
  }

  /* Independente do request(method) a info e resgatada */  
  function request(){
    /* Pegar o method em que as infos está chegando (GET ou POST) */
    $request = $_SERVER["REQUEST_METHOD"];
    if($request == 'POST'){
      return $_POST;
    }
    return $_GET;
  }

  /* Redirecionamento de página através do header  */
  function redirect($target){
    return header("location:/?page={$target}");
  }
  
  /* Redirecionamento de página para HOME através do header */
  function redirectToHome(){
    return header("location:/");
  }

?>