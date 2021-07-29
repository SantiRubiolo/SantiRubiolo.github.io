//Close Menu
function cerrarMenu() {
    $("#navbarNavAltMarkup").removeClass("show")
};

//Navbar Scroll
function scrollNav(){
    let menu = document.getElementById("menu");
    let boton = document.getElementById("navbarNavAltMarkup");
    console.log(menu.offsetTop);
    if(menu.offsetTop > 60 || boton.classList.contains("show")){
        menu.classList.add("navbar-scroll");
    } else {
        menu.classList.remove("navbar-scroll");
    }
}
window.addEventListener('scroll', scrollNav)

//Navbar Button
function btnNav() {
    let menu = document.getElementById("menu");
    let boton = document.getElementById("navbarNavAltMarkup");
    if (boton.classList.contains("show")){
        menu.classList.remove("navbar-scroll");
    } else {
        menu.classList.add("navbar-scroll");  
    }
}

//onclick btnNav()
document.getElementById("btnNav").addEventListener('click',btnNav);
