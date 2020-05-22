/*Alerta de Subir CSV*/
function ready(){
var file=document.getElementById("file");
var msj=document.getElementById("msj");
file.addEventListener("change",check,false);
}

const check = () =>{
	msj.innerHTML="Archivo CSV Añadido";
	msj.style.display="block";
}

window.addEventListener("load", ready, false);