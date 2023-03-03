<form action="/pages/forms/create_user.php" method="POST" role="form">
  <legend>Create account</legend>
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
  <div class="form-group  mb-3">
    <label for="">Password</label>
    <input type="text" class="form-control m-1 col-6" name="password" placeholder="">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>