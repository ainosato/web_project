<?php
  $conn = mysqli_connect('localhost', 'root', 'apmsetup', 'opentutorials');

  $filtered = array(
    'title' => mysqli_real_escape_string($conn, $_POST['title']),
    'description' => mysqli_real_escape_string($conn, $_POST['description'])
  );
  $sql = "
    INSERT INTO topic2
      (title, description, created)
      VALUES(
          '{$filtered['title']}',
          '{$filtered['description']}',
          NOW()
      )
  ";
  $result = mysqli_query($conn, $sql);
  if ($result === false) {
    echo '문제 발생';
    error_log(mysqli_error($conn));
  }
  else {
    echo '성공했습니다. <a href="index.php">돌아가기</a>';
  }
  echo $sql;
?>
