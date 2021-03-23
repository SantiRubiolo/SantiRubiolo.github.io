
function cerrarMenu() {
    $("#navbarNavAltMarkup").removeClass("show")
  }
  
$(document).on("click", function(){cerrarMenu()});


let animado = document.querySelectorAll(".animado");
function mostrarScroll() {
  let scrollTop = document.documentElement.scrollTop;
  
  for (var i=0; i< animado.length; i++){
    let alturaAnimado = animado[i].offsetTop;
    if(alturaAnimado - 500 < scrollTop) {
      animado[i].style.opacity = 1;
      animado[i].classList.add("mostrarArriba")
    }
  }
}
window.addEventListener('scroll', mostrarScroll)


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

// $(document).ready(function(){
//   $(this).scrollTop(0);

// });