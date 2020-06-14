<?php
  $conn = mysqli_connect('localhost', 'root', 'apmsetup', 'opentutorials');
  settype($_POST['id'], 'integer');
  $filtered = array(
    'id' => mysqli_real_escape_string($conn, $_POST['id'])
  );
  $sql = "
    DELETE
      FROM topic2
      WHERE id = {$filtered['id']}
  ";
  $result = mysqli_query($conn, $sql);
  if ($result === false) {
    echo '문제 발생';
    error_log(mysqli_error($conn));
  }
  else {
    echo '삭제에 성공했습니다. <a href="index.php">돌아가기</a>';
  }
  echo $sql;
?>
