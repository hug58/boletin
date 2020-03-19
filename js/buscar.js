function mostrar(){
    var secciones=document.getElementById("pizarra");
    var barra=document.getElementById("caja_busqueda");
    var datos=document.getElementById("datos");
    barra.addEventListener("input",mostrar,false);
  if (barra.value==="") {
    secciones.style.visibility="visible";
    secciones.style.opacity="100%";
    datos.style.visibility="collapse";
    datos.style.opacity="0%";

  }
  else{
    secciones.style.visibility="collapse";
    secciones.style.opacity="0%";
    datos.style.visibility="visible";
    datos.style.opacity="100%";
  }
}


window.addEventListener("load",mostrar,false);
