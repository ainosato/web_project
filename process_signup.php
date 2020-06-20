<?php
  $id = $_POST['id'];
  $password = $_POST['password'];
  $email1 = $_POST['email1'];
  $email2 = $_POST['email2'];
  $sex = $_POST['sex'];
  $conn = mysqli_connect("localhost", "root", "apmsetup", "opentutorials");
  $sql = "INSERT INTO login
    (id, password, email1, email2, SEX)
    VALUES ('$id', '$password', '$email1', '$email2', '$sex')
  ";
  $result = mysqli_query($conn, $sql);
  if ($result === false) {
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
    error_log(mysqli_error($conn));
  }
  else {
    echo '성공했습니다. <a href="login.php">돌아가기</a>';
  }
?>
