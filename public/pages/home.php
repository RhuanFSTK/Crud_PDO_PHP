<?php
require "../vendor/autoload.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/index.css">
</head>
<body class="text-center">
  <div class="text-center">
    <h2>Curso PHP Fullstack</h2>
  </div>
  <div class="form-signin bg-light">
    <form action="" method="post">
      <img class="mt-2 mb-3" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png" alt="logo" width="72">
      <h2 class="h3 mb-3 fw-normal">Access account</h2>
        <div class="form-floating">
          <input type="text" class="form-control mb-3" name="usuario" placeholder="name@example.com">
          <label for="floatingInput">User</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" name="senha" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        <div class="checkbox mb-3 mt-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-dark mb-2" type="submit">Access</button>
        <p><a href="?page=create_user">Create account</a></p>
    </form>
  </div>
</body>
</html>
