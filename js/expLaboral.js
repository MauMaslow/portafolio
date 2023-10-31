
document.getElementById("btnTodos").addEventListener("click", function () {
  ocultarTodoElContenidoExp();
  document.getElementById("contTodos").style.display = "block";
  
});

document.getElementById("btnTodos").click();

document.getElementById("btnAtn").addEventListener("click", function () {
  ocultarTodoElContenidoExp();
  document.getElementById("contAtn").style.display = "block";
});

document.getElementById("btnVentas").addEventListener("click", function () {
  ocultarTodoElContenidoExp();
  document.getElementById("contVentas").style.display = "block";
});

document.getElementById("btnMesa").addEventListener("click", function () {
  ocultarTodoElContenidoExp();
  document.getElementById("contMesa").style.display = "block";
});

document.getElementById("btnCapa").addEventListener("click", function () {
  ocultarTodoElContenidoExp();
  document.getElementById("contCapa").style.display = "block";
});

document.getElementById("btnProf").addEventListener("click", function () {
  ocultarTodoElContenidoExp();
  document.getElementById("contProf").style.display = "block";
});

document.getElementById("btnAnalist").addEventListener("click", function () {
  ocultarTodoElContenidoExp();
  document.getElementById("contAnalist").style.display = "block";
});

function ocultarTodoElContenidoExp() {
  document.getElementById("contTodos").style.display = "none";
  document.getElementById("contAtn").style.display = "none";
  document.getElementById("contVentas").style.display = "none";
  document.getElementById("contMesa").style.display = "none";
  document.getElementById("contCapa").style.display = "none";
  document.getElementById("contProf").style.display = "none";
  document.getElementById("contAnalist").style.display = "none";
}

/*
Todos
Atn
Ventas
Mesa
Capa
Prof
Analist

btnTodos
btnAtn
btnbtnVentas
btnMesa
btnCapa
btnProf
btnAnalist

contTodos
contAtn
contVentas
contMesa
contCapa
contProf
contAnalist





*/

// Obtén una lista de todos los botones con la clase "miPasion"
const botonesExp = document.querySelectorAll(".experiencia button");

// Agrega un evento click a cada botón
botonesExp.forEach((boton) => {
  boton.addEventListener("click", function () {
    // Quita la clase "seleccionado" de todos los botonesExp
    botonesExp.forEach((btn) => {
      btn.classList.remove("seleccionado_exp");
    });

    // Agrega la clase "seleccionado" al botón actual
    this.classList.add("seleccionado_exp");
  });
});

// Llamamos a la función para mostrar el contenido del botón inicialmente seleccionado
document.querySelector(".experiencia .seleccionado_exp").click();






