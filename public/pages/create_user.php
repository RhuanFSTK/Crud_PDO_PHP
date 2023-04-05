<?php
require "../vendor/autoload.php";
?>
<body>
  <div class="form-signin d-flex justify-content-center">
    <div class="card col-4 bg-light">
      <div class="card-header">
        <legend>Create account</legend>
      </div>
      <div class="card-body">
        <form action="/pages/forms/create_user.php" method="POST" role="form">
          <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control m-1 col-6" name="name" placeholder="">
          </div>
          <div class="form-group">
            <label for="">Last name</label>
            <input type="text" class="form-control m-1 col-6" name="lastName" placeholder="">
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control m-1 col-6" name="email" placeholder="">
          </div>
          <div class="form-group mb-4">
            <label for="">Password</label>
            <input type="text" class="form-control m-1 col-6" name="password" placeholder="">
          </div>
          <div class="form-group d-flex flex-row-reverse">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <div class="card-footer d-flex flex-row-reverse col-12">
        <button class="btn btn-danger"><a class="text-decoration-none text-light" href="pegar link da tela loogin">Go back</a>
      </div>
    </div>
  </div>
</body>