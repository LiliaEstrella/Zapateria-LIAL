var imagen=["blanco.JPG","pato.jpg","tennis.jpg","zapato_azul.JPG","zapato_morado.JPG"];
var descripciones=["Blanco y negro, talla 24","Tennis Imagination, talla 24","En patines, talla 24","Blanco y azul, talla 24","Colores, talla 24"];
var imagenP=document.getElementById("img_principal");
var i=0;
var j=0;
//funcion para pasar a la siguiente imagen
function siguiente(){
    if(j<imagen.length&&j!=5){
    imagenP.setAttribute("src","/imagenes/"+imagen[j]);
    descripcion.innerHTML=descripciones[j];
    j++;
    

}
    console.log(j);
return j;
}
//funcion para pasar a la imagen anterior
function anterior(){
if(j<=imagen.length&&j!=0)
j--;
    {imagenP.setAttribute("src","/imagenes/"+imagen[j]);
    descripcion.innerHTML=descripciones[j];

}
    console.log(j);
return j;
}
var descripcion=document.querySelector("figcaption")
//funcion de la animacion de paso de imagenes
function intervalos(){
   
//cada dos segundos se pasará a la siguiente imagen
        window.setInterval(()=>{
            if(i<imagen.length)
{
            imagenP.setAttribute("src","/imagenes/"+imagen[i]);
            descripcion.innerHTML=descripciones[i];

            i++;
            }
        },2000);

}
intervalos();
fecha();
function fecha(){

    const date = new Date();
const [year, month, day] = [date.getFullYear(), date.getMonth(), date.getDate()];
const fechaActual=year+"-"+(month+1)+"-"+day;
console.log(fechaActual);
var div=document.getElementById("fecha");
div.value=fechaActual;
return fechaActual;
}


