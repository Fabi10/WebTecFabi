<?php
include '../php/required.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gästebuch</title>
  <link rel="stylesheet" href="../CSS/main.css">
  <link rel="stylesheet" href="../CSS/gaestebuch.css">
</head>

<body>
  <?php include './header.php';  ?>
  <main class="inhalte Rahmen">
    <fieldset class="field">
      <legend><strong>Gästebuch</strong></legend>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <strong>Name: </strong><br><input id="input_name" class="fields" name="input_name" type="text"><br><br>
        <span> <?php echo $errName; ?> </span><br>

        <strong>Betreff:</strong><br> <input id="input_betreff" class="fields" name="input_betreff" type="text"><br><br>
        <span> <?php echo $errBetreff; ?> </span><br>

        <strong>Nachricht:</strong><br> <textarea id="input_nachricht" class="fields" name="input_nachricht" cols="50" rows="10"></textarea><br><br>
        <span> <?php echo $errNachricht; ?> </span><br>

        <input id="button" name="Abschicken" type="submit" value="Kommentieren">
      </form>
    </fieldset>



    <?php


    include '../php/SkriptGaestebuch.php';
    ?>



  </main>
  <?php

  include './footer.php';

  ?>
</body>

</html>
