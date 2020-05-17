<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><a href="lol.php">League of Legend</a></h1>


    <h2>
      <?php

          if (isset($_GET['id'])) {
            echo $_GET['id'];
          }
          else {
            echo "Welcome";
          }

      ?>
    </h2>
      <?php
        if (isset($_GET['id'])) {
          echo file_get_contents("data/".$_GET['id']);
        }
        else {
          echo "Hello, 소환사!";
        }

       ?>


  </body>
</html>
