function arrastra (){
window.addEventListener('scroll', function(){
	let animacion = document.getElementById('Estilo01');
	let posicionObj1 = animacion.getBoundingClientRect().top;
	console.log(posicionObj1);
	let tamañoDePantalla = window.innerHeight;

	if (posicionObj1 < tamañoDePantalla){
		animacion.style.animation = 'mover 1s ease-out'
	}
})
}
arrastra ();

function arrastra1 (){
window.addEventListener('scroll', function(){
	let animacion = document.getElementById('Estilo08');
	let posicionObj1 = animacion.getBoundingClientRect().top;
	console.log(posicionObj1);
	let tamañoDePantalla = window.innerHeight;

	if (posicionObj1 < tamañoDePantalla){
		animacion.style.animation = 'mover 1s ease-out'
	}
})
}
arrastra1 ();

//arrastra_animacion 
function arrastra2 (){
window.addEventListener('scroll', function(){
	let animacion = document.getElementById('Servicios');
	let posicionObj1 = animacion.getBoundingClientRect().top;
	console.log(posicionObj1);
	let tamañoDePantalla = window.innerHeight;

	if (posicionObj1 < tamañoDePantalla){
		animacion.style.animation = 'mover3 1s ease-out'
	}
})
}
arrastra2 ();

function arrastra3 (){
window.addEventListener('scroll', function(){
	let animacion = document.getElementById('QuienesSomos');
	let posicionObj1 = animacion.getBoundingClientRect().top;
	console.log(posicionObj1);
	let tamañoDePantalla = window.innerHeight;

	if (posicionObj1 < tamañoDePantalla){
		animacion.style.animation = 'mover3 1s ease-out'
	}
})
}
arrastra3 ();

function arrastra4 (){
window.addEventListener('scroll', function(){
	let animacion = document.getElementById('Noticias');
	let posicionObj1 = animacion.getBoundingClientRect().top;
	console.log(posicionObj1);
	let tamañoDePantalla = window.innerHeight;

	if (posicionObj1 < tamañoDePantalla){
		animacion.style.animation = 'mover3 1s ease-out'
	}
})
}
arrastra4 ();

function arrastra5 (){
window.addEventListener('scroll', function(){
	let animacion = document.getElementById('Galeria');
	let posicionObj1 = animacion.getBoundingClientRect().top;
	console.log(posicionObj1);
	let tamañoDePantalla = window.innerHeight;

	if (posicionObj1 < tamañoDePantalla){
		animacion.style.animation = 'mover3 1s ease-out'
	}
})
}
arrastra5 ();

function arrastra6 (){
window.addEventListener('scroll', function(){
	let animacion = document.getElementById('Contactanos');
	let posicionObj1 = animacion.getBoundingClientRect().top;
	console.log(posicionObj1);
	let tamañoDePantalla = window.innerHeight;

	if (posicionObj1 < tamañoDePantalla){
		animacion.style.animation = 'mover3 1s ease-out'
	}
})
}
arrastra6 ();

function arrastra7 (){
window.addEventListener('scroll', function(){
	let animacion = document.getElementById('footer');
	let posicionObj1 = animacion.getBoundingClientRect().top;
	console.log(posicionObj1);
	let tamañoDePantalla = window.innerHeight;

	if (posicionObj1 < tamañoDePantalla){
		animacion.style.animation = 'mover3 1s ease-out'
	}
})
}
arrastra7 ();

//LLAMAR UNA FUNCIÓN CON PONER EL MOUSE ENCIMA
document.getElementById("Estilo02").onmouseover = function() {mouseOver("Imagenes/Galeria5.png",imagen[10])};
document.getElementById("Estilo02").onmouseout = function() {mouseOut("Imagenes/Galeria1.png",imagen[10])};

document.getElementById("Estilo03").onmouseover = function() {mouseOver("Imagenes/Galeria6.png",imagen[11])};
document.getElementById("Estilo03").onmouseout = function() {mouseOut("Imagenes/Galeria2.png",imagen[11])};

document.getElementById("Estilo04").onmouseover = function() {mouseOver("Imagenes/Galeria7.png",imagen[12])};
document.getElementById("Estilo04").onmouseout = function() {mouseOut("Imagenes/Galeria3.png",imagen[12])};

document.getElementById("Estilo05").onmouseover = function() {mouseOver("Imagenes/Galeria8.png",imagen[13])};
document.getElementById("Estilo05").onmouseout = function() {mouseOut("Imagenes/Galeria4.png",imagen[13])};

var imagen = document.getElementsByTagName("img");

//mouse encima
function mouseOver(a,b) {
  b.attributes[0].value = a;
  b.attributes[1].value = "100%";
}

//mouse afuera
function mouseOut(a,b) {
  b.attributes[0].value = a
  b.attributes[1].value = "100%";
}

//MOSTRAR - OCULTAR

 var pri = document.getElementById("NotiMO").value;

document.getElementById("Estilo07").onclick = function ocultar(){
  document.getElementById("NotiMO").style.display='none';
}

document.getElementById("Estilo06").onclick = function mostrar(){
  document.getElementById("NotiMO").style.display='inline-block';
}

//Leer información del formulario
document.getElementById("enviar").onclick = function formulario(){
  var nombre= document.getElementById("nombre").value;
  var email= document.getElementById("email").value;
  var tel= document.getElementById("tel").value;
  var fecha= document.getElementById("fecha").value;
  var msj= document.getElementById("msj").value;
  var categoria= document.getElementById("categoria").value;
  alert ("Cita reservada a: " + nombre + " - Fecha: " + fecha + categoria);


}




