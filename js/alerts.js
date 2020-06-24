/*Alerta de Subir CSV*/
function ready(){
var file=document.getElementById("file");
var msj=document.getElementById("msj");
file.addEventListener("change",fileadd,false);
}

const fileadd = () =>{
	document.getElementById("ci").removeAttribute("required");
	document.getElementById("nombres").removeAttribute("required");
	document.getElementById("apellidos").removeAttribute("required");
	msj.innerHTML="Archivo CSV Añadido";
	msj.style.display="block";
}

window.addEventListener("load", ready, false);