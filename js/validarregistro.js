function comenzar(){
var nombre=document.getElementById("nombre");
var apellido=document.getElementById("apellido");
var cedula=document.getElementById("cedula");
var contraseña=document.getElementById("contraseña");
var ccontraseña=document.getElementById("ccontraseña");



nombre.addEventListener("input",validar,false);
apellido.addEventListener("input",validar,false);
cedula.addEventListener("input",validar,false);

contraseña.addEventListener("input",validar,false);
ccontraseña.addEventListener("input",validar,false);
     validar();
}

function validar(){
   if (nombre.value==""){
    nombre.setCustomValidity("Introduzca su nombre!");
   }

   else{
    nombre.setCustomValidity("");
   }

   if (apellido.value==""){
    apellido.setCustomValidity("Introduzca su apellido!");
   }

   else{
    apellido.setCustomValidity("");
   }


   if (cedula.value==""){
    cedula.setCustomValidity("Introduzca su cedula!");
   }

   else{
    cedula.setCustomValidity("");
   }



   if (contraseña.value==""){
    contraseña.setCustomValidity("Introduce una contraseña");
   }

   else{
    contraseña.setCustomValidity("");
   }

    if (ccontraseña.value==""){
    ccontraseña.setCustomValidity("Confirma la contraseña");
   }

   else{
    ccontraseña.setCustomValidity("");
   }

 if (contraseña.value===ccontraseña.value){
    ccontraseña.setCustomValidity("");
   }

   else{
    ccontraseña.setCustomValidity("La contraseñas no coinciden");
   }
}

window.addEventListener("load", comenzar,false);
