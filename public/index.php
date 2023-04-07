<?php 
require "../config.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso php</title>
</head>

<body>
  <div class="container">
    <?php
      try {
        require load(); 
      } catch (Exception $e) {
        echo $e->getMessage();
      } 
    ?>
  </div>
</body>
</html>