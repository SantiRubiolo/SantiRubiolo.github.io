//Animation Scroll Right
let animado1 = document.querySelectorAll(".animadoRight");
function mostrarScrollRight() {
  let scrollTop = document.documentElement.scrollTop;
  for (var i=0; i< animado1.length; i++){
    let alturaAnimado = animado1[i].offsetTop;
    if(alturaAnimado - 500 < scrollTop) {
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
    if(alturaAnimado - 500 < scrollTop) {
      animado2[i].style.opacity = 1;
      animado2[i].classList.add("mostrarIzquierda")
    }
  }
}
window.addEventListener('scroll', mostrarScrollLeft)