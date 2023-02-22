<?php 

require "../../../bootstrap.php";


if(isEmpty()){
  dd('preencha todos os campos');
} 

$validate = validate([

  'name' => 's',
  'email' => 'e',
  'subject' => 's',
  'message' => 's'

]);

dd($validate->email);

?>