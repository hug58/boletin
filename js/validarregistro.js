function comenzar(){
var nombre=document.getElementById("nombre");
var apellido=document.getElementById("apellido");
var cedulaid=document.getElementById("cedulaid");
var contraseña=document.getElementById("contraseña");
var ccontraseña=document.getElementById("ccontraseña");



nombre.addEventListener("input",validar,false);
apellido.addEventListener("input",validar,false);
cedulaid.addEventListener("input",validar,false);
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


   if (cedulaid.value==""){
    cedulaid.setCustomValidity("Introduzca la Cedula!");
   }

   else{
    cedulaid.setCustomValidity("");
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
