<?= get('message') ?>
<!-- Pagina para receber email - Support -->
<body>
  <div class="form-signin d-flex justify-content-center">
    <div class="card col-12 bg-light">
      <div class="card-header">
        <legend>Contact</legend>
      </div>
      <div class="card-body bg-light">
        <form action="/pages/forms/contact.php" method="POST" >
        <div class="form-floating col-12">
          <input
            type="text"
            class="form-control col-4 mb-2" name="name" value="" placeholder="">
          <label for="">Name</label>
        </div>
        <div class="form-floating col-12">
          <input
            type="email"
            class="form-control mb-2" name="email" value="" placeholder="">
          <label for="">Email</label>
        </div>
        <div class="form-floating col-12">
          <input
            type="text"
            class="form-control mb-2" name="subject" value="" placeholder="">
          <label for="">Subject</label>
        </div>
        <div class="form mb-3">
          <label><strong>Message</strong></label>
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
</html>
