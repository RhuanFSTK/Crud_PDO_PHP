<?php 

function send(array $data){
  $email = new PHPMailer\PHPMailer\PHPMailer;
  $email->CharSet = 'UTF-8'; 
  $email->SMTSecure = 'ssl';
  $email->isSMTP(); 
  $email->Host = 'sandbox.smtp.mailtrap.io';
  $email->Port = 2525;
  $email->SMTPAuth = true;
  $email->Username = 'b803bfa075ce4d';
  $email->Password = 'e9314e8056aa25';
  $email->isHTML(true);
  $email->setFrom('rhuanfullstack@gmail.com');
  $email->FromName = $data['quem'];
  $email->addAddress($data['para']);
  $email->Body = $data['mensagem'];
  $email->Subject = $data['assunto'];
  $email->AltBody = 'Para ver esse email tenha certeza de estar vendo em um programa que aceita ver HTML'; 
  $email->MsgHTML($data['mensagem']);


  $email->send(); 
  /* echo $email->ErrorInfo; */
}

?>