<?php 
require "../vendor/autoload.php"
?>

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