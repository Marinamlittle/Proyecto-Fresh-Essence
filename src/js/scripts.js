//Abrir y cerrar menu en movil
const nav = document.querySelector("#nav");
const abrir = document.querySelector("#abrir");
const cerrar = document.querySelector("#cerrar");

abrir.addEventListener("click", () => {
    nav.classList.add("visible");
})

cerrar.addEventListener("click", () => {
    nav.classList.remove("visible");
})

// Scroll de la barra navegación
var header = document.getElementById('Header');

window.addEventListener('scroll', ()=> {

    var scroll = window.scrollY

    if (scroll > 10) {
        header.style.backgroundColor = '#beb7a4'
    } else {
        header.style.backgroundColor = 'transparent'
    }
});
