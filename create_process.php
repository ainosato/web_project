<?php
  file_put_contents('data/'.$_POST['title'], $_POST['description']);
  header('Location: /lol.php?id='.$_POST['title']);
?>
