<?php 
require "../../../config.php";

if(isEmpty()){
  flash('message', 'Fill in all fields');
  return redirect("contato");
} 

/* $key => $value */
$validate = validate([
  'name' => 's',
  'email' => 'e',
  'subject' => 's',
  'message' => 's'
]);

$data = [
  'who' => $validate->email,
  'for' => 'rhuanfullstack@gmail.com',
  'message' => $validate->message,
  'subject' => $validate->subject,
];

if(send($data)){
  flash('message', 'Email successfully send', 'success');
  return redirect("contact");
}
  