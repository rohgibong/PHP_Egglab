<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Egglab</title>
  <link rel="stylesheet" href="../css/mainPage.css">
</head>

<!-- <?php
  session_start();
  $uid = isset($_SESSION["uid"]) ? $_SESSION["uid"] : 0;
?>
<script>
  const uid = <?php echo $uid ?>;
  if(uid == 0){
    alert('잘못된 접근입니다.');
    location.href='./_index.php';
  }
</script> -->

<body>
  <div class="titleDiv">
    <a href="./process/logoutProc.php" class="logoutBtn">LOGOUT</a>
    <div class="nav_logo">
      <img src="../img/logo2.png" alt="logoImg" width="150px" onclick="location.href='mainPage.php';">
    </div>
    <nav class="header_nav">
      <ul class="nav_menu">
        <li>
          <a href="#">CCTV 1</a>
        </li>
        <li>
          <a href="#">CCTV 2</a>
        </li>
      </ul>
    </nav>
    
  </div>


</body>
</html>