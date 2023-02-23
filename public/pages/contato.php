
<h2>Contato</h2>

<?= get('message'); ?>

<form action="/pages/forms/contato.php" method="POST" >
  <div class="form-floating m-1 col-4">
    <input
      type="text"
      class="form-control" name="name" value="" placeholder="">
    <label for="">nome</label>
  </div>
  <div class="form-floating m-1 col-4">
    <input
      type="email"
      class="form-control" name="email" value="" placeholder="">
    <label for="">Email</label>
  </div>
  <div class="form-floating m-1 col-4">
    <input
      type="text"
      class="form-control" name="subject" value="" placeholder="">
    <label for="">Assunto</label>
  </div>
  <div class="form mb-3">
    <label for="">Menssagem</label>
    <textarea class="form-control" name="message" rows="10" cols="30" value="" ></textarea>
  </div>
  <button class="btn btn-primary"type="submit">Enviar</button>
</form>