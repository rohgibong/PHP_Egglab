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
    $memberNo = isset($_SESSION["memberNo"]) ? $_SESSION["memberNo"] : 0;
    // $previousPageUrl = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 0;
    // $previous = explode('/', $previousPageUrl);
  ?>
  <script>
    // const memberNo = <?php echo $memberNo ?>;
    // if(memberNo > 0){
    //   alert('이미 로그인 된 상태입니다.');
    //   location.href='./_index.php';
    // }
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
        <input type="text" name="id" id="id" class="id" placeholder="아이디" onkeydown="if(event.keyCode==13) login()"><br>
        <input type="password" name="pwd" id="pwd" class="pwd" placeholder="비밀번호" onkeydown="if(event.keyCode==13) login()"><br>
      </div>
      <label id="label_id" class="label_id"></label>
      <label id="label_pwd" class="label_pwd"></label>
      <button type="button" onClick="login();" class="loginBtn" >로그인</button>
    </div>
    <!-- <div id="btnDiv">
      
    </div> -->

  <!--      

      <div id="inputDiv">
        <input type="text" name="id" id="id" onkeydown="if(event.keyCode==13) login()"><br>
        <input type="password" name="pwd" id="pwd" onkeydown="if(event.keyCode==13) login()"><br>
      </div>
      <label id="label_id"></label>
      <label id="label_pwd"></label>

      <div id="findDiv">
        <a href="./login_findId.php" id="fintIdPw">
          아이디/비밀번호 찾기
        </a>
      </div>

      <div id="btnDiv">
        <button type="button" onClick="login();" id="loginBtn" >LOGIN</button>
        <button type="button" onClick="location.href='./login_joinMember.php'" id="joinBtn">JOIN US</button>
      </div> -->
    

  </form>
  </div>
</div>
<script src="../js/_index.js"></script>
</body>
</html>