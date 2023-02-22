<?php require "../bootstrap.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Curso php</title>
</head>
<body>
  <h2>Curso de PHP</h2>
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