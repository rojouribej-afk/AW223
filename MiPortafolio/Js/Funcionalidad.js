

let mensaje = document.getElementById("mensaje");
let boton = document.getElementById("btncambiar");


boton.addEventListener("click", function(){
   
mensaje.textContent = "Gracias por ver mi portafolio :)"
})


let cajas = document.querySelectorAll(".lista-habilidades li");
let btnColor = document.getElementById("btnColor");
let btnLetra = document.getElementById("btnLetra");

btnColor.addEventListener("click", function () {
    cajas.forEach(function (caja) {
        caja.style.backgroundColor = "#0f2741";
        caja.style.color = "white";
    });
});


btnLetra.addEventListener("click", function () {
    cajas.forEach(function (caja) {
        caja.style.fontFamily = "Georgia, serif";
        caja.style.fontStyle = "italic";
    });
});



let formulario = document.getElementById("formContacto");
let inputNombre = document.getElementById("nombre");
let inputEmail = document.getElementById("email");
let inputMensaje = formulario.querySelector('[name="mensaje"]');

formulario.addEventListener("submit", function (evento) {

    let nombre = inputNombre.value.trim();
    let email = inputEmail.value.trim();
    let mensajeTexto = inputMensaje.value.trim();

    if (nombre === "") {
        evento.preventDefault();
        alert("Por favor, escribe tu nombre");
        inputNombre.focus();
        return;
    }

    if (email === "") {
        evento.preventDefault();
        alert("El correo es obligatorio");
        inputEmail.focus();
        return;
    }

    if (mensajeTexto === "") {
        evento.preventDefault();
        alert("Por favor, escribe tu mensaje");
        inputMensaje.focus();
        return;
    }

    // Si llegó aquí, todo está bien: el formulario se envía a guardar_mensaje.php
});