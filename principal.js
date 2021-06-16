//Close Menu
function cerrarMenu() {
    $("#navbarNavAltMarkup").removeClass("show")
  }

//Animation Scroll Up
let animado = document.querySelectorAll(".animadoUp");
function mostrarScrollUp() {
  let scrollTop = document.documentElement.scrollTop;
  
  for (var i=0; i< animado.length; i++){
    let alturaAnimado = animado[i].offsetTop;
    if(alturaAnimado - 500 < scrollTop) {
      animado[i].style.opacity = 1;
      animado[i].classList.add("mostrarArriba")
    }
  }
}
window.addEventListener('scroll', mostrarScrollUp)

//Animation Scroll Right
let animado1 = document.querySelectorAll(".animadoRight");
function mostrarScrollRight() {
  let scrollTop = document.documentElement.scrollTop;
  
  for (var i=0; i< animado1.length; i++){
    let alturaAnimado = animado1[i].offsetTop;
    if(alturaAnimado - 600 < scrollTop) {
      animado1[i].style.opacity = 1;
      animado1[i].classList.add("mostrarDerecha")
    }
  }
}
window.addEventListener('scroll', mostrarScrollRight)

//Animation Scroll Left
let animado2 = document.querySelectorAll(".animadoLeft");
function mostrarScrollLeft() {
  let scrollTop = document.documentElement.scrollTop;
  
  for (var i=0; i< animado2.length; i++){
    let alturaAnimado = animado2[i].offsetTop;
    if(alturaAnimado - 600 < scrollTop) {
      animado2[i].style.opacity = 1;
      animado2[i].classList.add("mostrarIzquierda")
    }
  }
}
window.addEventListener('scroll', mostrarScrollLeft)

//Scroll Up
$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 450) { 
            $('#scroll').fadeIn(); 
        } else {
            $('#scroll').fadeOut(); 
        }
    });
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 200); 
        return false;
    });
});
