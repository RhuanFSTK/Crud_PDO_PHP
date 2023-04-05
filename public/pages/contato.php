<?= get('message'); ?>
<body>
  <div class="form-signin d-flex justify-content-center">
    <div class="card col-4 bg-light">
      <div class="card-header">
        <legend>Contact</legend>
      </div>
      <div class="card-body">
        <form action="/pages/forms/contato.php" method="POST" >
        <div class="form-floating m-1 col-12">
          <input
            type="text"
            class="form-control col-4" name="name" value="" placeholder="">
          <label for="">Name</label>
        </div>
        <div class="form-floating m-1 col-12">
          <input
            type="email"
            class="form-control" name="email" value="" placeholder="">
          <label for="">Email</label>
        </div>
        <div class="form-floating m-1 col-12">
          <input
            type="text"
            class="form-control" name="subject" value="" placeholder="">
          <label for="">Subject</label>
        </div>
        <div class="form mb-3">
          <label for="">Message</label>
          <textarea class="form-control" name="message" rows="6" cols="30" value="" ></textarea>
        </div>
      </div>
        <div class="card-footer d-flex flex-row-reverse col-12">
          <button class="btn btn-primary"type="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
</body>

