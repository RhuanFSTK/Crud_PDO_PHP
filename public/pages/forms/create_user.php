<?php 
require "../../../config.php";

if(isEmpty()){
  flash('message', 'Fill in all fields');
  return redirect("cadastrar_user");
} 

$validate = validate([
  'name' => 's',
  'lastName' => 's',
  'email' => 'e',
  'password' => 's'
]);

$registered = create('users', $validate);
dd($registered);

if($registered){  
  flash('message', 'Registered successfully', 'success');
  return redirect('create_user');
}

flash('message', 'Registered error');
/* Sendo a ultima linha no redirect, não é nescessario - Return */
redirect('create_user');




