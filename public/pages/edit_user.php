
<?php 

$user = find('users', 'id', $_POST['id']) ;

?>


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
          <legend>Edit account</legend>
        </div>
        <div class="">
          <?=get('message');?>
        </div>
      </div>
      <div class="card-body bg-light">
        <form action="/pages/forms/update_user.php" method="post" role="form">
          <input type="hidden" name="id" value="<?= $user->id; ?>">
          <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control mb-1 col-6" name="name" value="<?= $user->name; ?>">
          </div>
          <div class="form-group">
            <label for="">Last name</label>
            <input type="text" class="form-control mb-1 col-6" name="lastName" value="<?= $user->lastName ?>">
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control mb-1 col-6" name="email" value="<?= $user->email ?>">
          </div>
          <div class="form-group d-flex flex-row-reverse">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
      <div class="card-footer d-flex flex-row-reverse col-12">
        <button class="btn btn-danger"><a class="text-decoration-none text-light" href="?page=users">Go back</a>
      </div>
    </div>
  </div>
</body>
</html>