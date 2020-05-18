<?php
  function print_title() {
    if (isset($_GET['id'])) {
      echo $_GET['id'];
    }
    else {
      echo "Welcome";
    }
  }
  function print_list() {
    $list = scandir('./data');
    $i = 0;
    while ($i < count($list)) {
      if ($list[$i] != '.') {
        if ($list[$i] != '..') {
          echo "<li><a href=\"lol.php?id=$list[$i]\">$list[$i]</a></li>\n";
        }
      }
      $i++;
    }
  }
  function print_description() {
    if (isset($_GET['id'])) {
      echo file_get_contents("data/".$_GET['id']);
    }
    else {
      echo "Hello, 소환사!";
    }
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
    <?php
      print_title();
    ?>
    </title>
  </head>
  <body>
    <h1><a href="lol.php">League of Legend</a></h1>
    <ol>
      <?php
        print_list();
       ?>
    </ol>
    <h2>
      <?php
        print_title();
      ?>
    </h2>
      <?php
        print_description();
      ?>
      </body>
</html>
