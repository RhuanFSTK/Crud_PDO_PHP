<?php 

require "../../../config.php";

if(isEmpty()){
  flash('message', 'Fill in all fields');
  return redirect("create_user");
} 

$validate = validate([
  'name' => 's',
  'lastName' => 's',
  'email' => 'e',
  'password' => 's'
]);


$registered = create('users', $validate);

if($registered){  
  flash('message', 'Registered successfully','success');
  return redirect('users');
}

flash('message', 'Registered error');
/* Sendo a ultima linha não é nescessario - return */
redirect('create_user');




