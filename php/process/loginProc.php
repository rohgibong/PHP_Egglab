<?php
  $uid = $_POST["uid"];
  $pwd = $_POST["pwd"];
  $locationId = $_POST["locationId"];

  $con = mysqli_connect("localhost", "egglab", "q1w2e3r4!", "egglab");
  $sql = "select * from admin where uid = '$uid' and pwd = '$pwd' and locationId = '$locationId'";

  $result = mysqli_query($con, $sql);
  $row_cnt = mysqli_num_rows($result);

  if($row_cnt == 0){
    echo "
      <script>
        alert('일치하는 관리자가 없습니다.');
        location.href = '../_index.php';
      </script>
    ";
  } else{
    while($row = mysqli_fetch_assoc($result)) {
      $name = $row['name'];
    }
    session_start();
    $_SESSION['uid'] = $uid;
    $_SESSION['name'] = $name;
    $_SESSION['locationId'] = $locationId;

    echo "
      <script>
        alert('관리자 $name($uid)님 환영합니다.');
        location.href = '../mainPage.php';
      </script>
    ";
  }
?>