<?php 
function send(array $data){
  $email = new PHPMailer\PHPMailer\PHPMailer;
  $email->CharSet = 'UTF-8'; 
  $email->SMTSecure = 'plain'; /* ou ssl */
  $email->isSMTP(); 
  $email->Host = 'sandbox.smtp.mailtrap.io';
  $email->Port = 2525;
  $email->SMTPAuth = true;
  $email->Username = 'b803bfa075ce4d';
  $email->Password = 'e9314e8056aa25';
  $email->isHTML(true);
  $email->setFrom('rhuanfullstack@gmail.com');
  $email->FromName = $data['who'];
  $email->addAddress($data['for']);
  $email->Body = $data['message'];
  $email->Subject = $data['subject'];
  $email->AltBody = 'Para ver esse email tenha certeza de estar vendo em um programa que aceita ver HTML'; 
  $email->MsgHTML($data['message']);

  return $email->send(); 
  
  /* Para capturar algum erro no PHPmail só por a linha abaixo */
  /* echo $email->ErrorInfo; */
}

?>