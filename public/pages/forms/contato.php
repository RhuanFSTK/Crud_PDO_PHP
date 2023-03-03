<?php 

require "../../../bootstrap.php";


if(isEmpty()){

  flash('message', 'Fill in all fields');

  return redirect("contato");

} 

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
  
  flash('message', 'Email successfully sent', 'success');

  return redirect("contato");

}
  