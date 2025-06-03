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

    if (scroll > 50) {
      header.classList.add("shrink");
    } else {
      header.classList.remove("shrink");
    }
});

  
// Scroll suave a secciones
    const btnServicios = document.getElementById("btn-servicios");
    const btnNosotros = document.getElementById("btn-nosotros");
    const btnContacto = document.getElementById("btn-nosotros");
  
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
    if (btnContacto) {
      btnContacto.addEventListener("click", () => {
        const seccionContactos = document.getElementById("contacto");
        if (seccionContactos) {
          seccionContactos.scrollIntoView({ behavior: "smooth" });
        }
      });
    }
  });

// JavaScript para el desplazamiento suave de las secciones
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
  });
});

//Cuando baja la barra de navegación cambie de color los textos
const header = document.querySelector('.header');
window.addEventListener('scroll', () => {
  if (window.scrollY > 50) {
    header.classList.add('active');
  } else {
    header.classList.remove('active');
  }
});

//Animacion Enviando
document.getElementById("enviar").addEventListener("click", function () {
  this.innerHTML = "Enviando...";
});

