<?php
    $conn = mysqli_connect("localhost", "root", "apmsetup", "opentutorials");
    $sql = "SELECT * FROM login";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    while ($row) {
      if ($row['id'] == $_POST['id_user']) {
        echo "안녕하세요";
        break;
      }
      else {
        echo '저장되지 않은 정보입니다. <a href="login.php">돌아가기</a>';
        break;

      }
    }

?>
