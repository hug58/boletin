 function comenzar(){
     var nombre=document.getElementById("nombre");
     var contraseña=document.getElementById("contraseña");
     nombre.addEventListener("input",validar,false);
     contraseña.addEventListener("input",validar,false);
     validar();
     }

 function validar(){

     if (nombre.value===""){
     nombre.setCustomValidity("Introduce nombre de usuario");

     }

     else{
     nombre.setCustomValidity("");
     }

     if (contraseña.value===""){
     contraseña.setCustomValidity("Introduce la contraseña");
     }

     else{
     contraseña.setCustomValidity("");
     }

     }

     window.addEventListener("load", comenzar,false);
