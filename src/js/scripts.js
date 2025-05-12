// Abrir y cerrar menú en móvil
document.addEventListener("DOMContentLoaded", () => {
    const nav = document.querySelector("#nav");
    const abrir = document.querySelector("#abrir");
    const cerrar = document.querySelector("#cerrar");
  
    abrir.addEventListener("click", () => {
      nav.classList.add("visible");
    });
  
    cerrar.addEventListener("click", () => {
      nav.classList.remove("visible");
    });
  
// Scroll de la barra de navegación
    const header = document.getElementById("Header");
    window.addEventListener("scroll", () => {
      const scroll = window.scrollY;
      header.style.backgroundColor = scroll > 10 ? "#beb7a4" : "transparent";
    });
  
// Scroll suave a secciones
    const btnServicios = document.getElementById("btn-servicios");
    const btnNosotros = document.getElementById("btn-nosotros");
  
    if (btnServicios) {
      btnServicios.addEventListener("click", () => {
        const seccionServicios = document.getElementById("servicios");
        if (seccionServicios) {
          seccionServicios.scrollIntoView({ behavior: "smooth" });
        }
      });
    }
  
    if (btnNosotros) {
      btnNosotros.addEventListener("click", () => {
        const seccionNosotros = document.getElementById("nosotros");
        if (seccionNosotros) {
          seccionNosotros.scrollIntoView({ behavior: "smooth" });
        }
      });
    }
  });
