
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="form-signin d-flex justify-content-center">
    <div class="card col-12">
      <div class="card-header d-flex justify-content-between col-md-12">
        <div>
          <legend>Create account</legend>
        </div>
        <div class="">
          <?=get('message');?>
        </div>
      </div>
      <div class="card-body bg-light">
        <form action="/pages/forms/create_user.php" method="post" role="form">
          <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control mb-1 col-6" name="name" placeholder="">
          </div>
          <div class="form-group">
            <label for="">Last name</label>
            <input type="text" class="form-control mb-1 col-6" name="lastName" placeholder="">
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control mb-1 col-6" name="email" placeholder="">
          </div>
          <div class="form-group mb-4">
            <label for="">Password</label>
            <input type="text" class="form-control mb-1 col-6" name="password" placeholder="">
          </div>
          <div class="form-group d-flex flex-row-reverse">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <div class="card-footer d-flex flex-row-reverse col-12">
        <button class="btn btn-danger"><a class="text-decoration-none text-light" href="/">Go back</a>
      </div>
    </div>
  </div>
</body>
</html>