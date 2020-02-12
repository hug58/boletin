function verpass(){
  var pass=document.getElementById("password");
  var imgchange=document.getElementById("imgeyes");
  if (pass.type=="password") {
    pass.type="text";
    imgchange.src="css/icons/eye-slash-solid.svg";
  }
else{
  pass.type="password";
  imgchange.src="css/icons/eye-solid.svg";
}
}
