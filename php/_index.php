<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Egglab</title>
  <link rel="stylesheet" href="../css/_index.css">
</head>
<body>
  <?php
    session_start();
    $uid = isset($_SESSION["uid"]) ? $_SESSION["uid"] : 0;
  ?>
  <script>
    const uid = <?php echo $uid ?>;
    if(uid > 0){
      alert('이미 로그인 된 상태입니다.');
      location.href='./mainPage.php';
    }
  </script>
<div class="mainDiv">
  <div class="logoDiv">
    <img src="../img/logo.jpg" alt="logoImg" class="logoImg" onClick="location.href='./_index.php'">
  </div>

  <div class="loginDiv">
  <form name="loginForm" action="./process/loginProc.php" method="post">
    
    <h1>로그인</h1>
    <div class="loginContent">
      <div id="inputDiv">
        <input type="text" name="uid" id="uid" class="uid" placeholder="관리자 UID" onkeydown="if(event.keyCode==13) login()"><br>
        <input type="password" name="pwd" id="pwd" class="pwd" placeholder="비밀번호" onkeydown="if(event.keyCode==13) login()"><br>
        <input type="text" name="locationId" id="locationId" class="locationId" placeholder="지역 관리번호" onkeydown="if(event.keyCode==13) login()"><br>
      </div>
      <label id="label_uid" class="label_uid"></label>
      <label id="label_pwd" class="label_pwd"></label>
      <label id="label_location" class="label_location"></label>
      <button type="button" onClick="login();" class="loginBtn" >로그인</button>
    </div>    

  </form>
  </div>
</div>
<script src="../js/_index.js"></script>
</body>
</html>