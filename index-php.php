<?php

  include __DIR__ . '/data/db.php'

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style/style.css">
  <title>PHP Ajax Dischi</title>
</head>
<body>

  <header>

    <img src="assets/img/logo.png" alt="logo spotify">

  </header>

  <main>
    <div class="container-discs">

      <?php foreach ($database as $disc) { ?>

        <div class="disc">
          <div class="disc-txt">

            <img src="<?php echo $disc['poster'] ?>" alt="<?php echo $disc['title'] ?>">
            <h2><?php echo $disc['title'] ?></h2>
            <p><?php echo $disc['author'] ?></p>
            <p class="year"><?php echo $disc['year'] ?></p>

          </div>
        </div>

      <?php } ?>

    </div>
  </main>
  
</body>
</html>