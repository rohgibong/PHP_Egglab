function login(){
  let errCounter = 0;
  let uid = document.getElementById("uid");
  let pwd = document.getElementById("pwd");
  let locationId = document.getElementById("locationId");
  let label_uid = document.getElementById("label_uid");
  let label_pwd = document.getElementById("label_pwd");
  let label_location = document.getElementById("label_location");
  

  if(uid.value == ""){
    label_uid.innerHTML = "관리자 UID를 입력해주세요.";
    label_uid.style.color = "red";
    label_uid.style.fontSize = "8px";
    uid.style.borderBottom = "1px solid red";
    errCounter++;
  } else {
    label_uid.innerHTML = "";
    uid.style.borderBottom = "1px solid lightgray";
  }
  if(pwd.value == ""){
    label_pwd.innerHTML = "비밀번호를 입력해주세요.";
    label_pwd.style.color = "red";
    label_pwd.style.fontSize = "8px";
    pwd.style.borderBottom = "1px solid red";
    errCounter++;
  } else {
    label_pwd.innerHTML = "";
    pwd.style.borderBottom = "1px solid lightgray";
  }
  if(locationId.value == ""){
    label_location.innerHTML = "지역 관리번호를 입력해주세요.";
    label_location.style.color = "red";
    label_location.style.fontSize = "8px";
    locationId.style.borderBottom = "1px solid red";
    errCounter++;
  } else {
    label_location.innerHTML = "";
    locationId.style.borderBottom = "1px solid lightgray";
  }
  
  if(errCounter > 0){
    return;
  } else {
    document.loginForm.submit();
  }

}