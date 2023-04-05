<?php 
require "../vendor/autoload.php"

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link rel="stylesheet" href="./assets/css/cadastrar.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
  <div class="body-content">
    <div class="module">
      <h1>Criar conta</h1>
      <form class="form" action="createSenha.php" method="post" autocomplete="off">
        <div class="alert alert-error"></div>
        <input type="text" placeholder="Nome" name="nome" required />
        <input type="text" placeholder="Usuário" name="usuario" required />
        <input type="password" placeholder="Senha" name="senha" autocomplete="new-password" required />
        <input type="submit" value="Cadastrar" name="submit" class="btn btn-block btn-primary" />
      </form>
      <div class="col-md-12 d-flex flex-row-reverse">
        <button type="button" class="btn btn-danger"><a class="button text-decoration-none text-light" href="index.php">Fazer login</a></button>
      </div>
    </div>  
  </div>
</body>
</html>