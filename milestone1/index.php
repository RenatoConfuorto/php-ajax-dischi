<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  include "database.php";
  // var_dump($database);
  ?>
  <div class="container">
    <?php foreach($database as $album){?>
      <div class="ms_card-container">
    <div class="ms_card">
      <div class="cover">
        <img src="<?php echo $album['poster']; ?>" alt="<?php echo $album['title']; ?>">
      </div>
      <div class="info">
        <h3><?php echo $album['title']; ?></h3>
        <p><?php echo $album['author']; ?></p>
        <p><?php echo $album['year']; ?></p>
      </div>
    </div>
  </div>
    <?php }?>
  </div>
</body>

</html>