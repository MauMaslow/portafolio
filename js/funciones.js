
//Hamburgeusa

const icon = document.getElementById("icon");
const contenedorEnlaces = document.querySelector(".contenedor_enlaces");

// Función para activar la propiedad "remove"
function toggleRemoveProperty() {
  contenedorEnlaces.classList.toggle("remove");
}


// enlaces quitan elementos de menu hamburguesa

icon.addEventListener("click", toggleRemoveProperty);

// Agregar un evento de clic a todos los enlaces li
const enlacesLi = document.querySelectorAll('.list_contenedor li');
enlacesLi.forEach(function(enlace) {
  enlace.addEventListener('click', function() {
    toggleRemoveProperty(); // Llamar a la función para activar la propiedad "remove"
  });
});


///Barra fija

const fixedBar = document.querySelector(".menu");

    window.addEventListener("scroll", () => {
      if (window.scrollY >= 10) {
        fixedBar.classList.add("fixed_menu");
      } else {
        fixedBar.classList.remove("fixed_menu");
      }
    });

/// funcion de desplazamiento en secciones

document.querySelectorAll('.list_contenedor a').forEach(function(anchor) {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();

    var targetId = this.getAttribute('href').substring(1);
    var targetElement = document.getElementById(targetId);

    if (targetElement) {
      var targetTop = targetElement.offsetTop; // Posición superior de la sección
      var offset;

      if (window.innerWidth >= 1440) {
        offset = targetTop - 80; // Pantalla de 1440px o más, ajuste a 80
      } else if (window.innerWidth >= 780) {
        offset = targetTop - 60; // Pantalla de 780px o más, ajuste a 40
      } else {
        offset = targetTop - 20; // Pantalla de menos de 780px, ajuste a 20 (valor predeterminado)
      }

      window.scroll({
        top: offset,
        behavior: 'smooth'
      });
    }
  });
});


document.getElementById("botonTodos").addEventListener("click", function () {
  ocultarTodoElContenido();
  document.getElementById("contenidoTodos").style.display = "block";
  
});

document.getElementById("botonTodos").click();

document.getElementById("botonHTML5").addEventListener("click", function () {
  ocultarTodoElContenido();
  document.getElementById("contenidoHTML5").style.display = "block";
});

document.getElementById("botonCSS").addEventListener("click", function () {
  ocultarTodoElContenido();
  document.getElementById("contenidoCSS").style.display = "block";
});

document.getElementById("botonJavaScript").addEventListener("click", function () {
  ocultarTodoElContenido();
  document.getElementById("contenidoJavaScript").style.display = "block";
});

document.getElementById("botonReact").addEventListener("click", function () {
  ocultarTodoElContenido();
  document.getElementById("contenidoReact").style.display = "block";
});

document.getElementById("botonFigma").addEventListener("click", function () {
  ocultarTodoElContenido();
  document.getElementById("contenidoFigma").style.display = "block";
});

function ocultarTodoElContenido() {
  document.getElementById("contenidoTodos").style.display = "none";
  document.getElementById("contenidoHTML5").style.display = "none";
  document.getElementById("contenidoCSS").style.display = "none";
  document.getElementById("contenidoJavaScript").style.display = "none";
  document.getElementById("contenidoReact").style.display = "none";
  document.getElementById("contenidoFigma").style.display = "none";
}


// Obtén una lista de todos los botones con la clase "miPasion"
const botones = document.querySelectorAll(".miPasion button");

// Agrega un evento click a cada botón
botones.forEach((boton) => {
  boton.addEventListener("click", function () {
    // Quita la clase "seleccionado" de todos los botones
    botones.forEach((btn) => {
      btn.classList.remove("seleccionado");
    });

    // Agrega la clase "seleccionado" al botón actual
    this.classList.add("seleccionado");
  });
});

// Llamamos a la función para mostrar el contenido del botón inicialmente seleccionado
document.querySelector(".miPasion .seleccionado").click();




// elementos Arrow Card Flip

const cardContainers = document.querySelectorAll(".card-container");

cardContainers.forEach(container => {
    let isFlipped = false;
    let touchStartX = null;
    let touchEndX = null;

    // Verificar si el dispositivo es táctil
    const isTouchDevice = 'ontouchstart' in document.documentElement;

    if (isTouchDevice) {
        container.addEventListener("touchstart", (e) => {
            touchStartX = e.touches[0].clientX;
        });

        container.addEventListener("touchend", (e) => {
            touchEndX = e.changedTouches[0].clientX;

            if (Math.abs(touchEndX - touchStartX) < 10) {
                if (!isFlipped) {
                    container.querySelector(".card_job").style.transform = "rotateY(180deg)";
                } else {
                    container.querySelector(".card_job").style.transform = "rotateY(0deg)";
                }

                isFlipped = !isFlipped;
            }
        });
    } else {
        container.addEventListener("click", () => {
            if (!isFlipped) {
                container.querySelector(".card_job").style.transform = "rotateY(180deg)";
            } else {
                container.querySelector(".card_job").style.transform = "rotateY(0deg)";
            }

            isFlipped = !isFlipped;
        });
    }
});



